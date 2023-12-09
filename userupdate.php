<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tbl_item');

    if(isset($_POST['userupdate']))
    {   
        $id = $_POST['update_id'];
        
        $user_name = $_POST['user_name'];
        $id_st = $_POST['id_st'];
      
        $levels= $_POST['levels'];
        $department= $_POST['department'];

        $query = "UPDATE user SET user_name='$user_name', id_st='$id_st', department='$department', levels=' $levels' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:userindex.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>