<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>MERA Personal Portfolio Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="<?php echo base_url('assets/css/prettyPhoto.css') ?>" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="<?php echo base_url('assets/css/styleSwitcher.css') ?>" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="<?php echo base_url('assets/css/themes/pink.css') ?>" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

    <style>
     #signup{
      position: relative;
      left: 600px ;
     } 
      
    </style>

</head>
<body>
   <div class="container">
  <div id="js" class="page-header">
    <h1>Job Seeker Login</h1>
  </div>

       <form class="form-horizontal">
       <fieldset>



       <!-- Button -->
       <div class="form-group">
         <div class="col-md-4 control-label">
           <a href="<?php echo base_url('index.php/home/signupjs') ?>" id="signup" name="singlebutton" class="btn btn-primary">Sign Up</a>
         </div>
       </div>


       <!-- Text input-->
       <div class="form-group">
         <label class="col-md-4 control-label" for="textinput"></label>  
         <div class="col-md-4">
         <input id="textinput" name="textinput" type="text" placeholder="Username" class="form-control input-md"> 
         </div>
       </div> 

        <!-- pasww input-->
       <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"></label>  
         <div class="col-md-4">
           <input id="passwordinput" name="passwordinput" type="password" placeholder="Password" class="form-control input-md">
         </div>
       </div>

       <!-- Button -->
       <div class="form-group">
         <label class="col-md-4 control-label" for="singlebutton"></label>
         <div class="col-md-4">
           <a href="<?php echo base_url('index.php/home/send') ?>" id="login" name="singlebutton" class="btn btn-primary">Login</a>
         </div>
       </div>

       </fieldset>
       </form>

</body>
</html>
