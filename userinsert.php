<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tbl_item' );

if(isset($_POST['userinsert']))
{
    $user_name = $_POST['user_name'];
    $id_st = $_POST['id_st'];
    $department = $_POST['department'];
   
    $levels= $_POST['levels'];


    $query = "INSERT INTO user (`user_name`,`id_st`,`department`,`levels`) VALUES ('$user_name','$id_st','$department','$levels')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: userindex.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>