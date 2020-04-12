$host = ('MYSQL_HOST');
$user = ('MYSQL_USER');
$pass = ('MYSQL_PASSWORD');
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
   exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
echo 'Successful database connection!'.PHP_EOL;

