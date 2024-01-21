<?php
$km = intval($_GET['km']);
$min = intval($_GET['min']);
$tarif = intval($_GET['tarif']);
switch ($tarif) {
    case 1: $act1 ='selected';
        break;
    case 2: $act2 ='selected';
        break;
    case 3: $act3 ='selected';
        break;
    default: $act1 ='selected';
}
include "src/TariffInterface.php";
include "src/ServiceInterface.php";
include "src/TariffAbstract.php";
include "src/TariffBasic.php";
include "src/ServiceGPS.php";
include "src/ServiceDriver.php";
include "src/TariffHour.php";
include "src/TarifStudent.php";
?>
    <form method="get">
        <select name="tarif">
            <option <?=$act1?> value="1">Базовый</option>
            <option <?=$act2?> value="2">Почасовой</option>
            <option <?=$act3?> value="3">Студенческий</option>
        </select>
        <input type="text" placeholder="Киллометры" name="km" value="<?=$km?>">
        <input type="text" placeholder="Минуты" name="min" value="<?=$min?>">
        <input type="submit" value="Посчитать">
    </form>
    <p>* считается с уже подключенной услугой "GPS в салон"</p>
<?php
if ($tarif==1) {
    $tariff = new TariffBasic($km, $min);
}
elseif ($tarif==2) {
    $tariff = new TariffHour(0, $min);
}
else {
    $tariff = new TariffStudent($km, $min);
}

/** @var TariffInterface $tariff */
$tariff->addService(new ServiceGPS($min));
//$tariff->addService(new ServiceDriver(100));//раскоментировать, если нужен дополнительный водитель
echo $tariff->countPrice();