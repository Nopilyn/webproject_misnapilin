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


</head>
<body>
  <div class="container">
  <div id="registrasi" class="page-header">
    <h1>Pilih Bidang Pekerjaan</h1>
  </div>

  <form class="form-horizontal">
   <!-- Select Basic -->
   <div class="form-group">
     <label class="col-md-4 control-label" for="bidang"></label>
     <div class="col-md-4">
       <select id="bidang" name="bidang" class="form-control">
         <option value="">Bidang</option>
         <option value="1">choose1</option>
       </select>
     </div>
   </div>

   <!-- Select Basic -->
   <div class="form-group">
     <label class="col-md-4 control-label" for="lokasi"></label>
     <div class="col-md-4">
       <select id="lokasi" name="lokasi" class="form-control">
         <option value="">Lokasi</option>
         <option value="1">choose2 </option>
       </select>
     </div>
   </div>

   <!-- Button -->
   <div class="form-group">
     <label class="col-md-4 control-label" for="next"></label>
     <div class="col-md-4">
       <button id="next" name="next" class="btn btn-primary">Next</button>
     </div>
   </div>

   </form>
 </div>




    
</body>
</html>
