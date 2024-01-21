<?

define("systemRoot", $_SERVER['DOCUMENT_ROOT']);
try {
$DB_host='localhost';
$DB_name='school_php';
$DB_user='school_php';
$DB_pass='F-94.VCZPEK-W-_a';
  # MySQL через PDO_MYSQL
$DBH = new PDO("mysql:host=$DB_host;dbname=$DB_name;charset=UTF8", $DB_user, $DB_pass,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8mb4\''));

}

catch(PDOException $e) {
    echo $e->getMessage();
}

//mysqli

// $host = 'localhost';
// $mysql = new mysqli($host, 'school_php', 'F-94.VCZPEK-W-_a', 'school_php', 3306 );
// if (mysqli_connect_error()) {
//   echo 'Connection error:' . mysqli_connect_error();
//   //die;
// }

// $ret = $mysql->query("SELECT * FROM `users` ORDER BY `id`");
// $data = $ret->fetch_all();
// echo 'rows:' . $mysql->affected_rows . '<br>';
// echo "<pre>";
// print_r($data);
?>