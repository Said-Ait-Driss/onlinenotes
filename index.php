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
      <div class="offset-md-4 col-md-4">
        <button type="button" class="btn btn-success btn-lg" data-target="#modalmodal" data-toggle="modal">
          Sign up
        </button>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <div class="footer" id="footer">
      <div class="container">
        <p>Copyright &copy; 2022-2022 Online Notes ALL right resirved </p>
      </div>
    </div>
  </footer>

  <!--  sign up  modal-->
  <div class="modal" tabindex="-1" id="modalmodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign up today and start using online note today !</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal"></button>
        </div>
        <form method="POST" id="signupForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="username" class="form-label sr-only">username</label>
              <input type="text" class="form-control" id="username" placeholder="username" name="username">
            </div>
            <div class="mb-3">
              <label for="Email1" class="form-label sr-only">Email address</label>
              <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="email adresse" name="email">
            </div>
            <div class="mb-3">
              <label for="Password1" class="form-label sr-only">Password</label>
              <input type="password" class="form-control" id="Password1" placeholder="password" name="password1">
            </div>

            <div class="mb-3">
              <label for="Password2" class="form-label sr-only">confirme Password</label>
              <input type="password" class="form-control" id="Password2" placeholder="confirme password" name="password2">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Sign up</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>




  <!-- login modal -->
  <div class="modal" tabindex="-1" id="Loginmodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">put email and password to log in !</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal"></button>
        </div>
        <form method="POST" id="loginForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="Email1" class="form-label sr-only">Email address</label>
              <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="email adresse" name="loginemail">
            </div>
            <div class="mb-3">
              <label for="Password1" class="form-label sr-only">Password</label>
              <input type="password" class="form-control" id="Password1" placeholder="password" name="loginpassword">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
              <label class="form-check-label" for="rememberme">Remember me</label>
              <!-- data-target="#forgotmodal" data-toggle="modal" -->
              <a href="#" class="pull-right" style="float:right;" data-toggle="modal" data-target="#forgotmodal" data-dismiss="modal">Forgot password?</a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Log in</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">Cancel</button>
          </div>
        </form>

      </div>
    </div>
  </div>



  <!-- forgot password modal -->
  <div class="modal" tabindex="-1" id="forgotmodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">enter your email to reset password !</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal"></button>
        </div>
        <form method="POST" id="forgotpasswordform">
          <div class="modal-body">

            <div class="mb-3">
              <label for="forgotEmail1" class="form-label sr-only">Email address</label>
              <input type="email" class="form-control" id="forgotEmail1" aria-describedby="emailHelp" placeholder="email adresse" name="forgotemail">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Reset</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>