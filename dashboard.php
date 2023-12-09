
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

.card-counter{
    box-shadow: 2px 2px 10px #ffffff;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 110px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 40px 20px #ffffff;
    transition: .3s linear all;
    
  }

  .card-counter.primary{
    background-color: #B71414;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #22B438;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #08096C;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #AD1563;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 6em;
    opacity: 0.2;
  }
  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 70px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  /* .wrapper {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  grid-auto-rows: minmax(100px, auto);
}
.three {
  grid-column: 1;
  grid-row: 2 / 5;
} */
  </style>
</head>

<body >
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
  
<br><br>








<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />



<?php
                $connection = mysqli_connect("localhost","root","");
                mysqli_query($connection, "SET NAMES UTF8");

                $db = mysqli_select_db($connection, 'tbl_item');

            ?>


<center><h2> Admin DashBoard</h2></center>
<hr>
 <br>
<div class="container">
			<div class="row">
				<div class="col col-sm-11">
       <div class="alert alert-danger" role="alert">
				
					<h5>อัพเดทข้อมูลล่าสุด :  
          <?php 
date_default_timezone_set('Asia/Bangkok');
echo date('d-m-Y H:i:s');
?>
						 </h5>
				</div>
				







<br>
<div class="container">
<div class="row">
    <div class="col-md-3">
    <div class="card-counter primary">
       <br> <i class="fa fa-code-fork"></i>
      
        <span class="count-numbers">



        <?php
     
     $query = "SELECT * FROM tran_borrow where date_of_return is null ";
             $query_run = mysqli_query($connection, $query);

             if($query = mysqli_num_rows($query_run ))
             {
                 echo '<h4 class="mb-o">'.$query.'</h4>';
             }
             else
             {
                 echo '<h4 class="mb-o">NO DATA</h4>';

             }

             ?>


        </span>
     
        <span class="count-name">อุปกรณ์ที่ยังไม่ได้คืน</span>
      </div>
    </div>

    

    <div class="col-md-3">
      <div class="card-counter success">
       <bR> <i class="fa fa-database"></i>
        <span class="count-numbers">
        <?php
        $query = "SELECT * FROM product ";
                $query_run = mysqli_query($connection, $query);

                if($query = mysqli_num_rows($query_run ))
                {
                    echo '<h4 class="mb-o">'.$query.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-o">NO DATA</h4>';

                }

                ?>

        </span>
        <span class="count-name">จำนวนอุปกรณ์ทั้งหมด</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <br><i class="fa fa-users"></i>
        <span class="count-numbers">        <?php
        $query = "SELECT * FROM user";
                $query_run = mysqli_query($connection, $query);

                if($query = mysqli_num_rows($query_run ))
                {
                    echo '<h4 class="mb-o">'.$query.'</h4>';
                }
                else
                {
                    echo '<h4 class="mb-o">NO DATA</h4>';

                }

                ?>
</span>
        <span class="count-name">จำนวนนักศึกษา</span>
      </div>
    </div>
  </div>
</div>
<br>
<br>


<?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'tbl_item');

                $query = "SELECT * FROM user ORDER BY id DESC limit 5";
                $query_run = mysqli_query($connection, $query);
            ?>
            <div class="wrapper">
             
                    <table id="datatableid" class="table table-bordered"class="three">
                    <thead class="table-dark">
                            <tr>
                               
                                <th colspan="2"style="text-align:center;">รายชื่อนักศึกษาที่เพิ่มล่าสุด</th>
                              
                        </thead>
               <tbody>            
                  <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                   
                            <tr>
                            
                                <td> <?php echo $row['user_name']; ?> </td>
                                <td> <?php echo $row['id_st']; ?> </td>
                              
                      
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>  </tbody>
                    </table>
                </div>
            </div>