<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tbl_item');

if(isset($_POST['insert']))
{

    $product_name = $_POST['product_name'];
    $details = $_POST['details'];
    $barcode = $_POST['barcode'];
    $qty = $_POST['qty'];
    $img = $_POST['img'];
	$to_upload_path = "image/".basename($_FILES['img']['tmp_name']);


	if(isset($_FILES) && !empty($_FILES))
	{
		$filename = "image/" ($_FILES['img']['tmp_name']);
		$to_upload_path = "./image/".$filename; 
               // uploads folder must be inside your project root directory
		$uf = move_uploaded_file($_FILES["img"]["tmp_name"], $to_upload_path);		
	}




    $query = "INSERT INTO product (product_name, details, barcode, qty, img) VALUES ('$product_name','$details','$barcode','$qty' ,'$img''$to_upload_path')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>