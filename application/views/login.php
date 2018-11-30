<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="">

  <title>LOGIN</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url(); ?>assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
  <style type="text/css">
  .login-img3-body { 
      background: url(assets/gambar/Ba2.jpg); 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      overflow: hidden;
    }
  </style>

</head>

<body class="login-img3-body">
  <div class="container">

    <form class="login-form" action="<?php echo site_url('Login/aksi_login'); ?> " method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control form-password" id="password" placeholder="Password" name="password">
        </div>
        <label class="checkbox">
                <input type="checkbox" class="form-checkbox"> Show Password
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
  </div>


<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script type="text/javascript">
        $(document).ready(function(){   
          $('.form-checkbox').click(function(){
            if($(this).is(':checked')){
              $('.form-password').attr('type','text');
            }else{
              $('.form-password').attr('type','password');
            }
          });
        });
    </script>


</body>

</html>
