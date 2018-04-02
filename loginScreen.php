<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
        <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="forgotModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="forgotModalTitle">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Input your email address below to reset your password. You will receive an email with instructions on how to continue.</p>
                <form>
                  <div class="form-group col-sm-6">
  									<input type="text" class="form-control" id="inputEmailReset" placeholder='email@test.com'>
  								</div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Email</button>
              </div>
            </div>
          </div>
        </div>

      <!-- BEGINNING OF THE END -->
    </div>
    </div>
    </body>
</html>
