<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <title>online note</title>
</head>

<body>
    <!-- * navbar -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#">Online Notes</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navb" class="navbar-collapse collapse hide">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" data-target="#Loginmodal" data-toggle="modal"><span class="fas fa-log-in-alt"></span> Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row sign_up_btn">
      <p>Your notes with you wherever you go .</p>
      <p>Ease to use .Protect all your notes.</p>
      <div class="offset-md-3 col-md-4">
        <button type="button" class="btn btn-success btn-lg" data-target="#modalmodal" data-toggle="modal">
          Sign up
        </button>
      </div>
    </div>
  </div>


</body>

</html>