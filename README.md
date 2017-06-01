# php-google-static-map-directions
Small utility function to get a direction rendered on a Google Static Maps from an array of locations. Developed for and used by our website <a href="https://www.nabuco.com">Nabuco</a>.

# usage

```
include "static-map-direction.php"

$origin = "45.291002,-0.868131";
$destination = "44.683159,-0.405704";
$waypoints = array(
    "44.8765065,-0.4444849",
    "44.8843778,-0.1368667"
  );

$map_url = $this->getStaticGmapURLForDirection($origin, $destination, $waypoints);

echo '<img src="'.$map_url.'"/>';
        
```

# result

<img height="500" width="500" src="https://maps.googleapis.com/maps/api/staticmap?size=500x500&maptype=roadmap&path=enc:w%7BlsGtphDzBeOpOrH%7CY%7Ca%40zYbI%60ZpL%7CNvQt%40hQ%7BG%7CX%60CErA%7B%40%60%40xD%60%40hCdAzB%60K%60GnU%7Cd%40vEhb%40bGb%5BfMqG%7CZcTnmAcz%40%7Es%40og%40pxBexAfiBsoAhmD%7BfCjw%40%7De%40jIaPf%5Cew%40zEaR%60CqUhKyFlCPpAKzXlF%7CQbS%7CYtR%7EW%7BE%60pBym%40xsBgp%40rgA%7D%5CdVgBtIeF%60%5DmEpIoHnFC%7Eg%40fLhRdBxO_BxH%5E%7E_AzRdXwDfXjBz%5D%60M%5EqKnV%7D%7D%40xM%7BPfJi%40fEkBnP%7CEvVlKhi%40%7De%40hvDakFbpFyuHrMsMxa%40uY%60oCcmBR_AgEuCmHwOqAy%5BsFoOpGoQ%60IeZZyRqEusAsAuY%5EyJhZgMba%40%7DS%7EGkExi%40u%5ErOyIzKjCdP%60GnCCYaOrDwLdLuFxBp%40FlDXrImDbCgDm%40k%40sEbJchDrCmcAnH%7Dz%40bPidAjWg%7CBvBaY%7BCiUkWsd%40%7DF%7DWVmT%7ED%7BFj%5CoKdn%40kXrHWbHfE%7C%40sCuAoJy%40uV%7EMkwAh%40gb%40yNix%40yDo%60%40%7CCme%40vGcfA%7DEc%5Byd%40ouAgAwJwFhC%7D%40uBtAgCnDtHb%5BncAud%40oJ%60%40%7CUM%7CCL%7DCa%40%7DUqEEkA_%40y%40m%40sA%7DKoD_AmLoa%40uAaHjD%7BAdGc%40lJw%40bGb%40vB%7ECpEKl%40gCwHwS%7DFss%40b%40gXbNenAcBmXyKwl%40%7BIubBsRkzDgF%7BfBhAck%40vLso%40pGwu%40nBa%5DrZcs%40pXwv%40fDoTNkt%40dBgd%40%7EKgs%40Ugo%40wN%7Bm%40k%5B%7Bj%40yY%7BW_l%40qh%40eM%7DKcS%7DIe%5DaCc%5EmGwSwKic%40ZzG_%7C%40cEgb%40qB%7Dq%40nFci%40rLsf%40vSkb%40%60Rg%5CtIiZjReb%40Nc%40LUKYcDmRnG%7DZnCqIrG%7DOlDcU%7EJf%40fImHdT%7BAvBeIxFmLtCrDiC%7EDiA%60Cv%40%7DBzBcCaA%7DEgAgF%7EAiFrIkAzNh%40%60FiGvLbIhW%60EpMbEdS%5ChVRhb%40aBlKfDbOZhExLrL%60r%40l%40vGh%40vAvo%40hsD%7EQrc%40jZlYnXy%40%60FzvAtVd%5D%7CDfl%40vWn%7CAcGnb%40cGf%7E%40q%40%60g%40xH%7CD%7EOnGl%40dMnNbWtVhKpY%60UtGtBdE%7B%40tNIjNcDtIRlKhIdHbAxJxOhh%40bj%40%60L%7Ce%40tJhq%40f%5Dbo%40f_%40du%40jIdZfFlJG%7CIfDPnBQfHU%60GtApZgEhB%7EA%60Fxf%40dGll%40%7EF%7ELlJxHv%5E%7EXfG%7Ea%40VnP%60G%60QpMl%5CbZ%7Ce%40rqAvk%40rHh%5CbEnOs%40pJ%7CE%7EHrIlExCj%40lBpHDpKpBzRrAdAjK%7EUbHbS%7CFnHdH%7EW%7CAvEtJ%7EHrM%7CQjK%60ChFiHp%5DtWuCpe%40tAtNbEfCrOfB%60TvPNXBHF%40HO%7CKoG%7CS_Y%7C%60%40aa%40&markers=color:green%7Clabel:A%7C45.291002%2C-0.868131&markers=color:blue%7Clabel:B%7C44.8765065%2C-0.4444849&markers=color:blue%7Clabel:C%7C44.8843778%2C-0.1368667&markers=color:red%7Clabel:D%7C44.683159%2C-0.405704"/>
