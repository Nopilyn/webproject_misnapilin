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
    <h1>Buat Lowongan Pekerjaan</h1>
  </div>


     <div class="form-group ">
      <label class="control-label" for="namapekerjaan">Nama Pekerjaan</label>
      <input class="form-control" id="namapekerjaan" name="namapekerjaan" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label" for="jenis">Kota </label>
      <input class="form-control" id="jenis" name="jienis" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="email">Detail Pekerjaan</label>
      <input class="form-control" id="email" name="email" type="text"/>
     </div>
     <div class="form-group ">
       <label class="control-label " for="alamat">Syarat-syarat</label>
       <input class="form-control" id="alamat" name="alamat" type="text"/>
      </div>
    

     <button type="submit" class="btn btn-success" id="next">Create</button>
     
       
  </div>

</body>
</html>


