<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wordpost_Check Page!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/wordpost.css" rel="stylesheet">

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
	
	<div class="intro-header">

		<!-- Header -->
		<?php
			include("MyDB.php");
				//測試用MyDB.php建物件
				$myDB = new MyDB("ch8");
				#$values['account']='LIN';
				#$values['password'] = '12345';
				#$myDB->insert("admin", $values);

					//確認身份
					$done=true;
					$result = $myDB->select("admin", "*");
					while($adminData = mysql_fetch_array($result)){
						if($_POST['account'] == $adminData['account']){
							//(寫入資料庫)
						 if($_FILES['filename']['name']){
							$image = addslashes(file_get_contents($_FILES['filename']['tmp_name']));
							$image_name = addslashes($_FILES['filename']['name']);
							$sql= "INSERT INTO product_images (image, image_name) VALUES ('{$image}', '$image_name')";
								if (!mysql_query($sql)){
									echo "<h2><br>Save image failed...Please choose small size pics (<1M),</h2>";
									echo "<br><h2>Sorry about that! (you can do phone screen shot to get small size pic thank you!)</h2>";
								}else{
									$values['date']  =''.$_POST['date'].'';
									$values['whereis']  =''.$_POST['whereis'].'';
									$values['content'] = ''.($_POST['content']).'';
									$values['account']  =''.$_POST['account'].'';
									$values['image'] = $image;
									$values['image_name']  = $image_name;
									if($myDB->insert("wordpost", $values)) //判斷是寫入資料庫
									
									echo "<h2>寫入&上傳成功! <br>Success Upload!</h2>".'<hr class="intro-divider">' ;
									echo '<ul class="list-inline intro-social-buttons">';
									echo '<li>';
									echo '<a href="showImage.php?imageName='.$image_name.'" class="btn btn-default btn-lg"><i class="fa fa-smile-o fa-fw"></i>&nbsp<span class="network-name"><strong>&nbsp Check your Photo! 顯示圖片! <br>(If not corret, try again!)</strong></span></a>';
									echo '</li>';
									echo '</ul>';
								
									$done=false; //正確跳出迴圈
									break;
								}
							}
						}
					}
					if($done){
					echo "<h2>寫入失敗 !<br> Fail Login! Please Retry!</h2>".'<hr class="intro-divider">' ;
					echo '<ul class="list-inline intro-social-buttons">';
					echo '<li>';
					echo '<a href="index.html" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><span class="network-name"><strong>&nbsp 重新申請 / Fail Please Go Back!</strong></span></a>';
					echo '</li>';
					echo '</ul>';
					}
					?>
			<!--
				//密碼修改依據帳號
				//$valueUpdate['password']='fR123456';
				//$myDB->update("admin", $valueUpdate, " account = 'mom' ");
				//$myDB->select("admin", "*");
				//print_r($myDB->fetchAllResult());
				-->
   </div>
    <!-- /.banner -->

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

