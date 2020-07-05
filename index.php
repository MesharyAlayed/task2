<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "task2";
    
   // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);


?>




<!DOCTYPE html>
<html>
    <head>
    <title>Task 2</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/normalize.css">

</head>
<body>
    
    <!-- Start landing page -->
            
            <div class="introduction">
                <h1>Smart methodes</h1>
                <p>robot control buttons</p>
            <br><br>

    <!-- End landing page -->


            <div class="buttons text-centre" role="group">
            <div style="text-align:center;width:480px;">
            <form action="" method="POST">
                <button type="submit"   name="F">Forward</button><br><br>
                <button type="submit"   name="L">LEFT</button>
                <button type="submit"   name="S">STOP</button>
                <button type="submit"   name="R">RIGHT</button><br><br>
                <button type="submit"   name="B">Backwards</button>
                <br><br><br><br>
    </form>
    <div>
    <div>
</body>
</html>

<?php


// php code to Insert data into mysql database from input text
if(isset($_POST['R'])){

    // get values form input text and number

    $res = "R";
    
    // mysql query to insert data

$query = "INSERT INTO `remote`(`left1`, `right1`, `forward`, `backword`, `stop`) VALUES ('', '$res' ,'','','')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    header('location: show.php');
    mysqli_close($connect);
}
if(isset($_POST['L'])){

    // get values form input text and number

    $res = "L";
    
    // mysql query to insert data

$query = "INSERT INTO `remote`(`left1`, `right1`, `forward`, `backword`, `stop`) VALUES ('$res', '' ,'','','')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    header('location: show.php');
    mysqli_close($connect);
}
if(isset($_POST['F'])){

    // get values form input text and number

    $res = "F";
    
    // mysql query to insert data

$query = "INSERT INTO `remote`(`left1`, `right1`, `forward`, `backword`, `stop`) VALUES ('', '' ,'$res','','')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    header('location: show.php');
    
    mysqli_close($connect);
}
if(isset($_POST['B'])){

    // get values form input text and number

    $res = "B";
    
    // mysql query to insert data

$query = "INSERT INTO `remote`(`left1`, `right1`, `forward`, `backword`, `stop`) VALUES ('', '' ,'','$res','')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    header('location: show.php');
    
    mysqli_close($connect);
}
if(isset($_POST['S'])){

    // get values form input text and number

    $res = "S";
    
    // mysql query to insert data

$query = "INSERT INTO `remote`(`left1`, `right1`, `forward`, `backword`, `stop`) VALUES ('', '' ,'','','$res')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    header('location: show.php');
    mysqli_close($connect);
}
?>