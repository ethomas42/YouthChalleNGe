<?php
/*
 * @AUTHOR Colton Thompson
 *
*/
?>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  
	  <style> 
	  body {font-family: Arial, Helvetica, sans-serif;}
/* Full-width input fields */
input[type=text], input[type=password] {
  height: 40px;
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-left: -120px;
  display : block;

}

label {
  margin-left: -120px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
    display : block;
  }

button:hover {
    opacity: 0.8;
}

button.login {
  background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
    display : block;
  margin-left: 280px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 40%;
    border-radius: 50%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.login {
  margin:0 auto;
  width: 200%;
}
/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    font-size: 35px;
    font-weight: bold;
    color: #999;
}
.close:hover,
.close:focus {
    color: #BE211A;
    cursor: pointer;
}

.close:hover{
  color: #BE211A
}

.close:focus{
  color: #BE211A
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 75%;
    }
}
	  </style> 
      <title>Georgia Youth ChalleNGe Program</title>

       <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- Our Custom CSS -->
      <link href="cs1.css" rel="stylesheet">
      <!-- DataTables CSS CDN -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

      <!-- jQuery CDN -->
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <!-- Bootstrap Js CDN -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- DataTables JS CDN -->
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <!-- Our Custom JS -->
      <script src="functions.js"></script>

    </head>
    <body>
      <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
          <div class="sidebar-header">
            <a href="home.html"><img class="logo" name="logo" src="ngyc.png" style="width:200px;height:200px" border="0"></a>
          </div>

          <ul class="list-unstyled components">
            <p>Georgia Youth ChalleNGe Program</p>
          </ul>

        </nav>

        <!-- Page Content Holder -->
        <div id="content" class="col-sm-12">

          <nav class="navbar navbar-default">
            <div class="container-fluid">

              <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                  <i class="glyphicon glyphicon-align-left"></i>
                  <span>Toggle Sidebar</span>
                </button>
                <h1>Login</h1>
              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <!-- COMMENTING OUT 'Page's
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                  -->
                </ul>
              </div>
            </div>
          </nav>
		
			<body onload="document.getElementById('id01').style.display='block'"> <!--style="width:auto;"> -->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onload="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="ngyc.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
		<div align = "center"> 
      <label for="uname"><b>Username</b></label> <br>
      <input type="text" placeholder="Enter Username" name="username" required> <br>

      <label for="psw"><b>Password</b></label> <br>
      <input type="password" placeholder="Enter Password" name="password" required><br>
    </div>
      <button type="submit" class="login">Login</button><br>
    <div align = "center">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    </div>

    
  </form>
</div>
		 
		<!---
      <form action = "loginSessions.php" method = "POST"> 
        <div class='row'>
          <div class="form-group col-sm-6 col-m-6">
            <label for="inputUsername">Username</label>
            <input type="text" class="form-control" name="inputUsername" id="inputUsername" placeholder='Username'>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6 col-m-6">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control"  name = "inputPassword" id="inputPassword" placeholder='Password'>
          </div>
        </div>
        <div class='row justify-content-between'>
          <div class='col-sm-4 col-md-4'>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#forgotModal">
              Forgot Password?
            </button>
              </form>
          </div>
          <div class='col-sm-4 col-md-4'>
            <button name="login" class="btn btn-success" type="submit" id="login">Login</button>
          </div>
        </div>
        <!--MODAL START-->
		
      <!-- BEGINNING OF THE END -->
    </div>
    </div>
    </body>
	<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>
