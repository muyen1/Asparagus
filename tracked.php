<!-- <?php
/* take data out of the database*/
// include 'pdo_connect.php';


    
//     $foodname = $_POST['foodname'];
//     $unit = $_POST['unit'];
//     $query = 'SELECT  foodname,unit FROM  food';

//     $params = array();
//     $results = dataQuery($query, $params);
    



$dbhost = 'localhost';
$dbuser = '';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}

$sql = 'SELECT foodname, unit FROM employee';
mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_assoc($retval)) {
   echo "foodname: {$row['foodname']}  <br> ".
      "quantity : {$row['unit']} <br> ".
      "--------------------------------<br>";
}

echo "Fetched data successfully\n";

mysql_close($conn);
?> -->