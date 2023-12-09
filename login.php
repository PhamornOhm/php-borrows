<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> หน้าแรก </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">


    <style>
body{
    background-image: url("3.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  font-family :Arial, Helvetica, sans-serif;
  
  
 
}
*{

margin:0;
padding:0;
box-sizing:border-box;

}
body{
height:100vh;
width: 100%;
display:flex;
justify-content :center;
align-items:center ;

}
form.container{
display: flex;
flex-direction: column;
align-items: center;


}
h2{
margin:20px;
color:#fff;
font-weight: 300;


}
input{
border: none;
height: 50px;
width: 250px;
margin:10px;
padding: 0 10px;
font-size:1rem;
outline:none;
text-align: center;
border-radius: 5px;
transition: .5s;
cursor: pointer;
align-items: center;

}
.textbox{
color: #fff;
background:rgba(255,255,255,0.2);
border:1px solid rgba(255,255,255,0.4);

}
.textbox::placholder{
color:#fff;
}


.textbox:hover,
.textbox:focus {
background:#fff;
width: 350px;
color:#1abc9c;

}
.btn-submit{
background: #fff;
color: #1abc9c;
}
.btn-submit:hover{
color:#fff;
background: #1abc9c;
box-shadow: 0 0 10px rgba(0, 0,0,0);
}
</style>
</head>

<body >




<?php session_start();?>
<?php
 include("condb.php");
?>
<style type="text/css">
#btn{
width:100%;
}
</style>

<form  class ="container" name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">


    <center><h2>Admin Login </h2></center>
    <input class="textbox" name="username" type="text" placeholder="Username">
    <input class="textbox" name="password" type="password" placeholder="password">
    <input class="btn-submit"  type="submit" value="login">

</form>
</body>
</html>



<!--<div class="container" style="padding-top:300px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5" style="background-color:#F3DEFE"  >
      <h3 align="center">
      <span class="glyphicon glyphicon-lock" > </span>
      Admin Login </h3>

      
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-dark" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
             <br><b> <label>
                 กรุณาเข้าสู่ระบบ
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 