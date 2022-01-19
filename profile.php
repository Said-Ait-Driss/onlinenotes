<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <link href="./mainloggedin.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <title>Online notes</title>
    <style>
        table {
            border: 1px solid skyblue;
            background-color: #ccc;
            border-radius: 4px;
        }

        tr {
            border: 1px solid skyblue;
            padding: 10px;
            cursor: pointer;
        }

        tr:hover {
            background-color: skyblue;
        }

        td {
            text-align: start;
            padding: 10px;
            border-left: 1px solid skyblue;
            font-weight: bold;
        }

        .userinfo {
            margin-top: 100px;
        }
    </style>
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
                    <a class="nav-link" href="./profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/minpageloggedin.php">My Notes</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><strong>said ait driss</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout.php"><span class="fas fa-log-in-alt"></span> Log-out</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar -->

    <!-- main begin -->
    <div class="container userinfo">
        <div class="row">
            <div class="offset-md-4 col-md-6">
                <h3>General Acount setting</h3>
                <table>
                    <tr data-toggle="modal" data-target="#resetusername">
                        <td>username</td>
                        <td>said ait driss</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#resetemail">
                        <td>Email</td>
                        <td>Email@gmail.com</td>
                    </tr>
                    <tr data-toggle="modal" data-target="#resetpassword">
                        <td>Password</td>
                        <td style="font-size:1.1em"><b>......</b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- main end -->

    <!-- modals begin -->
    <!-- modal reset username begin -->
    <div class="modal" id="resetusername">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your username</h5>
                    <button class="btn-close" type="button"></button>
                </div>

                <div class="modal-body">
                    <form id="resetusernameForm" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label-control sr-only">username</label>
                            <input type="text" class="form-control" id="username" placeholder="username" name="usernamereset" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">reset</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- reset username end -->

    <!-- modal reset email begin -->
    <div class="modal" id="resetemail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your new email</h5>
                    <button class="btn-close" type="button"></button>
                </div>

                <div class="modal-body">
                    <form id="resetusernameForm" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label-control sr-only">email</label>
                            <input type="email" class="form-control" id="email" placeholder="username" name="emailreset" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal reset email end -->

    <!-- modal reset password begin-->
    <div class="modal" id="resetpassword">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your new password</h5>
                    <button class="btn-close" type="button"></button>
                </div>

                <div class="modal-body">
                    <form id="resetusernameForm" method="POST">
                        <div class="mb-3">
                            <label for="password" class="form-label-control sr-only">current password</label>
                            <input type="password" class="form-control" id="oldpassword" placeholder="current password" name="oldpassword" />
                        </div>
                        <div class="mb-3">
                            <label for="password1reset" class="form-label-control sr-only">new password</label>
                            <input type="password" class="form-control" id="password1reset" placeholder="new password" name="password1reset" />
                        </div>
                        <div class="mb-3">
                            <label for="password2reset" class="form-label-control sr-only">confirme password</label>
                            <input type="password" class="form-control" id="email" placeholder="confirme password" name="password2reset" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal reset password end -->
    <!-- modals end -->
    <!-- footer -->
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <p>Copyright &copy; 2022-2022 Online Notes ALL right resirved </p>
            </div>
        </div>
    </footer>
</body>

</html>