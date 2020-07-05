
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
</body>
</html>

<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "task2";
  
 // connect to mysql database using mysqli

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$result = "SELECT left1, right1, forward, backword, stop 
FROM remote
ORDER BY id DESC
LIMIT 1;";

$query = mysqli_query($connect, $result) or die('shit');

while($row= mysqli_fetch_assoc($query)){
    foreach($row as $row){
        print "$row\t";
    }
    }
?>
