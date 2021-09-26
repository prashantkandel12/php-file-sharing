error_reporting(E_ALL & ~E_NOTICE);
ini_set("max_execution_time", 0);
ini_set('upload_max_filesize', '1000M');
$dbname = "your_db_name";
$user = "user_name";
$password = "password";
$host = "localhost";
$conn = mysqli_connect($host, $user, $password, $dbname);