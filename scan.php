<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> หน้าแรก </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <style>
      body{
        background-image: url('image/5.jpg');
         font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
      }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.jpg" alt="logo" style="width:40px;">
  </a>
  <a class="navbar-brand" href="#">BorrowSystem</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="userindex.php">รายชื่อ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">รายการอุปกรณ์</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="scan.php">ยืม-คืน</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">Dashboard</a>
    </li>
     <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="login.php">ออกจากระบบ</a>
</li>

  </ul>
</nav>


    

            
    </nav><br>

    <div class="container">
    <center> <div class="jumbotron  bg-dark "style="width:30rem;">
            <div class="card "><br>
                <center>
                    <h2>Scan ยืมอุปกรณ์ </h2>
                </center>
            </div> 


            <div class="card  ">
                <div class="card-body ">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                mysqli_query($connection, "SET NAMES UTF8");
                $db = mysqli_select_db($connection, 'tbl_item');
                
                $query = "SELECT * FROM user ";
                $query_run = mysqli_query($connection, $query);

                $query2 = " select tran_borrow.id,user.user_name ,user.id_st ,
                product.product_name,product.details  ,product.qty,
                tran_borrow.borrowed_date ,tran_borrow.date_of_return,tran_borrow.withdraw,product.id as product_id
                from tran_borrow 
                left join user on tran_borrow.user_id  = user.id
                left join product on tran_borrow.product_id  = product.id where tran_borrow.date_of_return is null ";
                $query_run2 = mysqli_query($connection, $query2);
            ?>
                </div>
                <div class="form-group">

                    <input type="text" maxlength="9" id="barcode" name="barcode" class="form-control" placeholder="bar code reader"
                        value="" >
                    <input type="hidden" id="product_id" name="product_id" class="form-control">
                </div>


                <form action="" method="post">
                    <select id="userindex" name="userindex" class="custom-select mb-3" required>
                        <option value="">เลือกชื่อนักศึกษา</option>
                        <?php  foreach($query_run as $row){?>
                        <option value="<?php echo $row["id"];?>">
                        <?php  echo $row ["id"]; ?>

                            <?php  echo $row ["user_name"]; ?>

                        </option>
                        <?php }?>


                    </select>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">
                                <input type="text" class="form-control" id="qty" name="qty"  placeholder="จำนวนการเบิก">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">ตกลง</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <center><button type="button" name="submit" class="btn btn-success editbtn"
                        onclick="on_save()">บันทึกข้อมูล</button>
                    <br>
                    <br><br></center>
                 
        


    </div>
    </div>
    <center>
                    <h2>รายการยืมอุปกรณ์</h2>
                </center>
                   
    <table id="datatableid" class="table table-bordered">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">ชื่อผู้ยืม</th>
                                <th scope="col">รหัสนักศึกษา</th>

                                <th scope="col">ชื่ออุปกรณ์</th>
                                <th scope="col">รายระเอียด </th>
                               <th scope="col"> จำนวนที่ยืมไป </th>
                                <th scope="col"> วันที่ยืม</th>
                                <!-- <th scope="col"> วันที่คืน</th>  -->
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                if($query_run2)
                {
                    foreach($query_run2 as $row)
                    {
            ?>
                      
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['user_name']; ?> </td>
                                <td style="text-align: center"> <?php echo $row['id_st']; ?> </td>

                                <td style="text-align: center"> <?php echo $row['product_name']; ?> </td>
                                <td style="text-align: center"> <?php echo $row['details']; ?> </td>
                               <td style="text-align: center" > <?php echo $row['withdraw']; ?> </td>
                                <td> <?php echo $row['borrowed_date']; ?> </td>
                                <!-- <td> <?php echo $row['date_of_return']; ?> </td> -->
                                <td> <button type="button" name="submit" class="btn btn-danger " onclick="on_update(<?php echo $row['id']; ?>,<?php echo $row['product_id']; ?>,<?php echo $row['withdraw']; ?>,<?php echo $row['date_of_return']; ?>)">รับคืน</button> </td>
                            </tr>
                       
                        <?php           
                    }
                }
                else 
                {
                    echo "ยังไม่มีข้อมูล";
                }
            ?> </tbody>
                    </table>
    <script>
    document.getElementById("barcode").focus();


    document.getElementById("barcode")
        .addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                var barcode = $('#barcode').val();
                //console.log(barcode)
                $.ajax({
                    url: "services.php",
                    method: "POST",
                    data: ({
                        "service_name": "get_product",
                        barcode: barcode
                    }),
                    success: function(data) {
                        var array = JSON.parse(data);
                        console.log(array)
                        $('#product_id').val(array[0]['id']);
                        $("#myModal").modal();
                        document.getElementById("qty").focus();
                        
                    }
                });


            }
        });

    function on_save() {
        var product_id = $('#product_id').val();
        var userindex = $('#userindex').val();
        var qty = $('#qty').val();
        $.ajax({
            url: "services.php",
            method: "POST",
            data: ({
                "service_name": "ins_tran_borrow",
                product_id: product_id,
                userindex: userindex,
                qty : qty
            }),
            success: function(data) {
                alert("บันทึกการยืมสำเร็จ")
                location.reload();
            }
        });
    }


 
function on_update(tran_id,product_id,withdraw) {
        $.ajax({
            url: "services.php",
            method: "POST",
            data: ({
                "service_name": "upd_tran_borrow",
                tran_id: tran_id,
                product_id : product_id,
                withdraw : withdraw
            }),
            success: function(data) {
                alert("คืนสำเร็จ")
                location.reload();
            }
        });
    }










    
    </script>
    <script src="assets/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "ค้นหาข้อมูลหารยืม",
                }
            });

        });
    </script>