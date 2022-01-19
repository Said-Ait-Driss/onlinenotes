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

    <div class="container">
        <div class="row mynotes">
            <div class="col-md-8">
                <button class="btn btn-info btn-md" id="addnote">Add note</button>
                <button class="btn btn-info btn-md" id="editnote">Edit</button>
                <button class="btn btn-success btn-md" id="done">Done</button>
                <button class="btn btn-info btn-md" id="allnotes">All notes</button>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div id="notepad">
                    <textarea name="textarea" id="textarea" cols="30" rows="10">
                    </textarea>
                </div>
                <div class="notes" id="notes">

                </div>
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
</body>

</html>