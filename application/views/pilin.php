<!DOCTYPE html>
<html>
<head>
	<title>EASY WORK</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
  
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/home.css" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

    <style>
        #jj{
            position: relative;
            left: 90px;
        }
        #js{
            position: relative;
            left: 50px;
        }
        #jl{
            position: relative;
            left: 50px;
        }
        #qq{
            position: relative;
            left: 150px;
        }
        #qe{
            position: relative;
            left: 70px;
        }
        #ql{
            position: relative;
            left: 70px;
        }
        

    </style>
 
</head>
</body>
<div class="col-lg-12 col-md-4 col-sm-4  text-center ">
      <h1>WHO ARE YOU ?</h1>
</div>
<div id ="home">
    <div class="overlay">
        <div class="container">
           <div class="row pad-top-bottom  move-me jj">
                    <div class="col-lg-5 col-md-5 col-sm-7 image-center text-center">
                        <img id="jj" src="assets/img/j1.jpg" class="main-img img-circle img-responsive wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt=""/>
                        <h1 id="js" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">JOB SEEKER</h1>
                        <h2 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s"></h2>
                        <a id="jl" href="<?php echo base_url('index.php/home/login_js') ?>" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">LOGIN</a>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-5 image-center text-center">
                        <img id="qq" src="assets/img/j2.jpg" class="main-img-2 img-circle img-responsive wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                        <h1 id="qe" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">EMPLOYER</h1>
                        <h2 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s"></h2>
                        <a id="ql" href="<?php echo base_url('index.php/home/login_emp') ?>" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">LOGIN</a>
                    </div>
                </div>
</div>
</div>


</html>