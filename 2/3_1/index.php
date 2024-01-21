<?
require '../src/config.php';
require '../src/functions.php';
//задание 3.1
file_put_contents('users.json', json_encode(creatUser(50)));

$data = json_decode(file_get_contents('users.json'), true);

$names =[];
$sumAge = 0;
foreach ($data as $user) {
	if (isset($names[$user['name']])) {
		$names[$user['name']]++;
	}
	else {
		$names[$user['name']] = 1;
	}
	$sumAge += $user['age'];
}
$midAge = $sumAge / sizeof($data);
var_dump($names);
echo "Средний возраст: $midAge";