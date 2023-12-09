<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> หน้าแรก </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
      body{
        background-image: url('image/5.png');
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

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มอุปกรณ์ </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insert.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> ชื่ออุปกรณ์</label>
                            <input type="text" name="product_name" class="form-control" placeholder="ชื่ออุปกรณ์">

                        </div>
                        <div class="mb-3">
                      <label for="formFile" class="form-label">เพิ่่มรูปภาพ</label>
                       <input class="form-control" type="file" id="img"name="img">
                             </div>
                             <div class="container">

  
                           <div class="form-group">
                             <label for="comment">Comment:</label>
                              <textarea class="form-control" rows="5" id="details" name="details"></textarea>
                                  </div>
 
                               </div>

                      

                        <div class="form-group">
                            <label> Barcode </label>
                            <input type="text" name="barcode" class="form-control" placeholder="กรุณาใส่เลขบาร์โค้ด 9 ตัว " maxlength="9">
                        </div>

                        <div class="form-group">
                            <label> จำนวน </label>
                            <input type="number" name="qty" class="form-control" placeholder="จำนวน">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insert" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->   <!--   หน้าแก้ไขอุปกรณ์  -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> แก้ไข </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> ชื่ออุปกรณ์</label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="ชื่ออุปกรณ์">
                        </div>

                        

                        <div class="form-group">
                             <label for="comment">Comment:</label>
                              <textarea class="form-control" rows="5" id="details" name="details"></textarea>
                                  </div>
 
                               
                        
                        <div class="mb-3">
                      <label for="formFile" class="form-label">รูป</label>
                       <input class="form-control" type="file" id="formFile"name="img" id="img">
                             </div>


                        <div class="form-group">
                            <label> barcode </label>
                            <input type="text" name="barcode" id="barcode" class="form-control"
                                placeholder="Enter barcode" maxlength="9">
                        </div>

                        <div class="form-group">
                            <label> จำนวน </label>
                            <input type="text" name="qty" id="qty" class="form-control"
                                placeholder="จำนวน">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> ลบอุปกรณ์ </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> ต้องการลบอุปกรณ์หรือไม่ ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> ไม่ </button>
                        <button type="submit" name="delete" class="btn btn-primary"> ลบเลย </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id"> รายระเอียด </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="product_name"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron  bg-dark">
            <div class="card"><br>
               <center> <h2> รายการอุปกรณ์ </h2></center>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                       เพิ่มข้อมูล
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'tbl_item');

                $query = "SELECT * FROM product";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered">
                    <thead class="table-dark">
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">ชื่ออุปกรณ์</th>
                                <th scope="col">รายระเอียด </th>
                                <th scope="col"> Barcode </th>
                                <th scope="col"> รูป</th>
                               
                                <th scope="col"> จำนวน </th>
                                
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                       
                            <tr>

                            
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['product_name']; ?> </td>
                                <td> <?php echo $row['details']; ?> </td>
                                <td> <?php echo $row['barcode']; ?> </td>
                                <td> <?php echo"<img width=\"100\"  height=\"100\" src='image/".$row['img']."'>" ?></td> 
                              
                                <td > <?php echo $row['qty']; ?> </td>
                                
                              
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                       
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?> </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


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
                    searchPlaceholder: "ค้นหาสินค้า",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

               
                $('#update_id').val(data[0]);
                $('#product_name').val(data[1]);
                $('#details').val(data[2]);
               
                $('#barcode').val(data[3]);

                $('#qty').val(data[5]);
                $('#img').val(data[4]);

            });
        });
    </script>


</body>
</html>