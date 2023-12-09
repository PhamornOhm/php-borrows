<?php

$connection = mysqli_connect("localhost","root","");
mysqli_query($connection, "SET NAMES UTF8");
$db = mysqli_select_db($connection, 'tbl_item' );

if($_POST['service_name'] == "get_product")
{
    $barcode = $_POST['barcode'];
    $query = "SELECT * FROM product where barcode = '" . $barcode . "' ";
    $query_run = mysqli_query($connection, $query);
    while($row = $query_run->fetch_assoc()) {
        $myArray[] = $row;
    }
    echo json_encode($myArray);
}





else if($_POST['service_name'] == "ins_tran_borrow")
{
    $product_id = $_POST['product_id'];
    $userindex = $_POST['userindex'];
    $qty = $_POST['qty'];

    $query = "INSERT INTO tran_borrow (user_id, product_id, borrowed_date, date_of_return,withdraw) 
    VALUES($userindex, $product_id, current_timestamp(), NULL,$qty); ";
    $query_run = mysqli_query($connection, $query);


    $query2 = "update product set qty = (qty - '" . $qty . "') where id = '" . $product_id . "'  ";
    $query_run2 = mysqli_query($connection, $query2);
}



else if($_POST['service_name'] == "upd_tran_borrow")
{
    $tran_id = $_POST['tran_id'];
    $product_id = $_POST['product_id'];
    $withdraw = $_POST['withdraw'];

    $query = "update product set qty = (qty + '" . $withdraw . "') where id = '" . $product_id . "'  ";
    $query_run = mysqli_query($connection, $query);

    $query2 = "update tran_borrow set date_of_return = current_timestamp() where id = '" . $tran_id . "' ";
    $query_run2 = mysqli_query($connection, $query2);
}



?>