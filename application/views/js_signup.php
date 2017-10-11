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
      <div id="registrasi" class="page-header">
        <h1>Job Seeker Sign Up</h1>
      </div>

    <form class="form-horizontal" action="<?php echo base_url('index.php/home/login_js') ?>">

     <!-- Text input-->
     <div class="form-group">
       <label class="col-md-4 control-label" for="textinput"></label>  
       <div class="col-md-4">
       <input id="nama" name="textinput" type="text" placeholder="Nama Lengkap" class="form-control input-md"> 
       </div>
     </div> 

     <!-- Email input-->
     <div class="form-group">
      <label class="col-md-4 control-label" for="textinput"></label>  
       <div class="col-md-4">
         <input id="email" name="textinput" type="text" placeholder="Email" class="form-control input-md">
       </div>
     </div>

      <!-- pasww input-->
     <div class="form-group">
      <label class="col-md-4 control-label" for="textinput"></label>  
       <div class="col-md-4">
         <input id="pass" name="passwordinput" type="password" placeholder="Password" class="form-control input-md">
       </div>
     </div>

      <!-- vrifikasi pass-->
     <div class="form-group">
      <label class="col-md-4 control-label" for="textinput"></label>  
       <div class="col-md-4">
         <input id="pass" name="passwordinput" type="password" placeholder="Verifikasi Password" class="form-control input-md">
       </div>
     </div>

     <!-- Button -->
     <div class="form-group">
       <label class="col-md-4 control-label" for="singlebutton"></label>
       <div class="col-md-4">
          <button id="login" name="singlebutton" class="btn btn-primary">Sign Up</button>
       </div>
     </div>

     </form>


</body>
</html>