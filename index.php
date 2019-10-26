<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ujian Online</title>
      <link  rel="stylesheet" href="css/bootstrap.min.css"/>
      <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
      <link  rel="stylesheet" href="css/main.css">
      <link  rel="stylesheet" href="css/font.css">
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <?php if(@$_GET['w'])
        {echo'<script>alert("'.$_GET['w'].'");</script>';}
        ?>
</head>
<body>
      <div class="header">
      <div class="row">
        <div class="col-lg-6">
            <span class="logo">Ujian Online</span>
        </div>
      <div class="col-md-2 col-md-offset-4">
          <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a>
      </div>

      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
            </div>
            <div class="modal-body">
      
      <form class="form-horizontal" action="login.php?q=index.php" method="POST">
      <fieldset>

      <!-- Text input-->
      <div class="form-group">
      <label class="col-md-3 control-label" for="email"></label>  
          <div class="col-md-6">
              <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
          </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
      <label class="col-md-3 control-label" for="password"></label>
          <div class="col-md-6">
            <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
          </div>
      </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		  </fieldset>
      </form>
      </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--sign in modal closed-->
      </div><!--header row closed-->
      </div>

      <div class="bg1">
      <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-4" style="margin-top: 190px;">
        <button class="btn btn-warning font-weight-bold" style="height: 50px; font-size: 20px; font-weight: bold;">
          <a style=" color: #000;" href="registrasi.php">REGISTRASI</a>
        </button>

      </div>
  
</div>
</div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="http://www.projectworlds/online-examination" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://yugeshverma.blogspot.in" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Yugesh Verma</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9165063741</h4>
		<h4 style="font-family:'typo' ">vermayugesh323@gmail.com</h4>
		<h4 style="font-family:'typo' ">Chhattishgarh insitute of management & Technology ,bhilai</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!--footer end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>