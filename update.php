<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tbl_item');

    if(isset($_POST['update']))
    {   
        $id = $_POST['update_id'];
        
        $product_name = $_POST['product_name'];
        $details = $_POST['details'];
        $barcode = $_POST['barcode'];
        $qty = $_POST['qty'];
        $img = $_POST['img'];

        $query = "UPDATE product SET product_name='$product_name', details='$details', barcode='$barcode', qty=' $qty', img=' $img' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>