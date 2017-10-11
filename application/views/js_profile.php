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

</head>

<body>
  <div class="container">
  <div id="registrasi" class="page-header">
    <h1>Job Seeker Profile</h1>
  </div>


     <div class="form-group ">
      <label class="control-label" for="name">nama</label>
      <input class="form-control" id="name" name="name" type="text"/>
     </div>
    
    <form class="form-inline ">
          <label class="control-label " for="name"></label>
          <input class="form-control" id="name" name="name" type="text" placeholder="Tahun Lahir"/>
         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
           <option selected>jenis Kelamin</option>
           <option value="1">Perempuan</option>
           <option value="2">Laki-Laki</option>
         </select>
         <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
           <option selected>Status Pernikahan</option>
           <option value="1">Menikah</option>
           <option value="2">Belum Menikah</option>
         </select>
         
    </form>

     <div class="form-group ">
      <label class="control-label " for="text">
       No.Hp
      </label>
      <input class="form-control" id="text" name="text" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="text1">
       Email
      </label>
      <input class="form-control" id="text1" name="text1" type="text"/>
     </div>
    <div class="form-group ">
      <label class="control-label " for="text1">
       Alamat
      </label>
      <input class="form-control" id="text1" name="text1" type="text"/>
     </div>
      <div class="form-group ">
      <label class="control-label " for="text1">
       Pendidikan Terakhir
      </label>
      <input class="form-control" id="text1" name="text1" type="text"/>
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

     <div class="checkbox">
         <label><input type="checkbox">Agree</label>
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>

  </div>
    
</body>
</html>
