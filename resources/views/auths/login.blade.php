<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login your account</title>
  <link href="admin/assets/mg/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="admin/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="admin/assets/css/style.css" rel="stylesheet">
  <link href="admin/assets/css/style-responsive.css" rel="stylesheet">
  
</head>
<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="/postlogin" method="POST">
        {{csrf_field()}}
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input name="username" type="text" class="form-control" placeholder="Username" autofocus>
          <br>
          <input name="password" type="password" class="form-control" placeholder="Password">
          <br>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
        </div>
      </form>
    </div>
  </div>
  <script src="admin/assets/lib/jquery/jquery.min.js"></script>
  <script src="admin/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="admin/assets/text/javascript" src="admin/assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("admin/assets/img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
