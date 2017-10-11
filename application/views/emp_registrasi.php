<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
        #registrasi{
            position: relative;
            left: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="registrasi" class="page-header">
          <h1>Registrasi Perusahaan</h1>
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" id="emp" placeholder="Nama Perusahaan">
        </div>

        
        <form class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" id="namapegawai" placeholder="Nama">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" id="hp" placeholder="No.Hp">
            </div>
        </form>

        <div class="form-group ">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pass" placeholder="Password">
        </div>
        
        <a href="<?php echo base_url('index.php/home/login_emp') ?>">
            <button type="submit" class="btn btn-primary">sign up</button>
        </a>
        
    

    </div>

</body>
</html>