<?php

function getStaticGmapURLForDirection($origin, $destination, $waypoints, $size = "500x500") {
        $markers = array();
        $waypoints_labels = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K");
        $waypoints_label_iter = 0;

        $markers[] = "markers=color:green" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter++] . '|' . $origin);
        foreach ($waypoints as $waypoint) {
            $markers[] = "markers=color:blue" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter++] . '|' . $waypoint);
        }
        $markers[] = "markers=color:red" . urlencode("|") . "label:" . urlencode($waypoints_labels[$waypoints_label_iter] . '|' . $destination);

        $url = "https://maps.googleapis.com/maps/api/directions/json?origin=$origin&destination=$destination&waypoints=" . implode($waypoints, '|');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, false);
        $result = curl_exec($ch);
        curl_close($ch);
        $googleDirection = json_decode($result, true);

        $polyline = urlencode($googleDirection['routes'][0]['overview_polyline']['points']);
        $markers = implode($markers, '&');
        
        return "https://maps.googleapis.com/maps/api/staticmap?size=$size&maptype=roadmap&path=enc:$polyline&$markers";
    }
