<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Easy Work</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <style>
       #next{
        position: relative;
        left: 70%;
       }
   </style>
     

</head>
<body>  
    <div class="container">

        <div id="registrasi" class="page-header">
          <h1>Berkas Lain</h1>
        </div>
    
        <form class="form-horizontal">
    
    
        <!-- Sertifikasi input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Sertfikasi</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Nama Sertifikasi" class="form-control input-md">
            
          </div>
        </div>

      
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="selectbasic"></label>
          <div class="col-md-4">
            <select id="selectbasic" name="selectbasic" class="form-control">
              <option value="1">Option one</option>
              <option value="">Option two</option>
            </select>
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton"></label>
          <div class="col-md-4">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>


        <!-- Dokumen input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dokumen</label>  
          <div class="col-md-4">
          <input id="dok" name="dok" type="text" placeholder="Nama Dokumen" class="form-control input-md">
            
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton"></label>
          <div class="col-md-4">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" ></label>
          <div class="col-md-8">
            <button id="sub" name="sub" class="btn btn-success">Submit</button>
            <button id="next" name="next" class="btn btn-danger">Next</button>
          </div>
        </div>

    
        </form>

    </div>
</body>
</html>