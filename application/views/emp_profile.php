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
    <h1>Employer Profile</h1>
  </div>


     <div class="form-group ">
      <label class="control-label" for="emp_nama">Nama Perusahaan</label>
      <input class="form-control" id="emp_nama" name="name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label" for="jenis">Jenis Perusahaan</label>
      <input class="form-control" id="jenis" name="jienis" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="email">Email</label>
      <input class="form-control" id="email" name="email" type="text"/>
     </div>
     <div class="form-group ">
       <label class="control-label " for="alamat">Alamat</label>
       <input class="form-control" id="alamat" name="alamat" type="text"/>
      </div>
    
     
     <form class="form-inline ">        
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
            <option selected>Provinsi</option>
            <option value="1">database1</option>
            <option value="2">database2</option>
          </select>
          <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
            <option selected>Kota</option>
            <option value="1">db1</option>
            <option value="2">database2</option>
          </select>
     </form>
     <button type="submit" class="btn btn-primary" id="submit">Submit</button>

     <a href="<?php echo base_url('index.php/home/lowongan') ?>">
      <button type="submit" class="btn btn-primary" id="next" >Next</button>
     </a>
     
     
       
  </div>

</body>
</html>


