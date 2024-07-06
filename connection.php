<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mobilenumber = $_POST['mobilenumber'];
        $datetime = $_POST['datetime'];
        $office = $_POST['office'];
        $team = $_POST['team'];
        $visitor = $_POST['visitor'];
        $gender = $_POST['gender'];
        $state = $_POST['state'];
        $whometomeet = $_POST['whometomeet'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbg";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO visitor(name, mobilenumber, datetime,office,team,visitor,gender,state,whometomeet) VALUES ( '$name', '$mobilenumber', '$datetime','$office','$team','$visitor','$gender','$state', '$whometomeet')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Successfully Submitted";
    }
  
    // close connection
    mysqli_close($con);

?>
