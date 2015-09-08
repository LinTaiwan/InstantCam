<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in Page!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/cammake.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html">Catch Your Awesome Life Moment!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
    <!-- User  -->
	<div class="col-xs-6 col-md-2"><p></p>
	<!--
	<form method="POST" action="wordpost.php" enctype="multipart/form-data">
		<input type="file" name="filename"><br>
		<input type="submit" value="上傳">
	</form>-->
	</div>
	
		<div class="col-xs-6 col-md-4">
			<div class="thumbnail">
			<h4>Yours!</h4>
			<!--
				<img style="width: 300px; height: 400px; display: block;" alt="300x400" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNDIgMjAwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIG1lZXQiIHdpZHRoPSIyNDIiIGhlaWdodD0iMjAwIj48ZGVmcyAvPjxyZWN0IGZpbGw9IiNlZWVlZWUiIHdpZHRoPSIyNDIiIGhlaWdodD0iMjAwIiAvPjxnPjx0ZXh0IHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIiB4PSI5Mi40NzUiIHk9IjEwMCI+MjQyeDIwMDwvdGV4dD48L2c+PC9zdmc+" data-src="holder.js/100%x200" data-holder-rendered="true">
				-->
				
				<img style="width: 300px; height: 400px; display: block;" alt="300x400" src="img/300400w.jpg">
				<!--
				<input style="left: 100px; top: 100px; width: 300px; height: 400px;" type="file" name="filename" src="img/blank-frame.jpg"  >
				-->
			  <div class="caption" style="center">
				  <form method="POST" action="wordpost.php" enctype="multipart/form-data" >
						<p > &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<i class="fa fa-calendar fa-fw"></i>&nbsp <input type="date" name="date">
						<i class="fa fa-map-marker fa-fw"></i><input type="text" name="whereis"></p>
						<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp <input type="text" name="content"></p>
						<input type="file" name="filename"><br>
						<button class="btn btn btn-primary" type=submit><i class="fa fa-floppy-o fa-fw"></i>&nbsp Save / 送出</button>
						
						<label for=ac class=sr-only>Account</label> <!--原Email address-->
							<input type="text" name="account" id=account class="btn btn-default" placeholder="Check Your Account!" required autofocus> 
							
					</form>
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-md-1"></div>
		
    <!-- Sample  -->
		<div class="col-xs-6 col-md-4">
			<div class="thumbnail">
			<h4>Sample!</h4>
			  <img style="width: 300px; height: 400px; display: block;" alt="fail to show" src="img/cam.jpg">
			  <div class="caption" style="center">
				<p class="lead"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<i class="fa fa-calendar fa-fw"></i>2015-09-06  <i class="fa fa-map-marker fa-fw"></i> U.S.MN.<br><br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Friendship!</p><br>
				<p><a class="btn btn-primary" role="button" href="#"><i class="fa fa-floppy-o fa-fw"></i>&nbsp Save</a> <a class="btn btn-default" role="button" href="#">Sample</a></p>
			  </div>
			</div>
		</div>
  

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Wei-Cheng LIN, Taiwan 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
		
    </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
