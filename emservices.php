<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .fire {
            background-color: #55a1ff;
        }

        .police {
            background-color: red;
        }

        .hospital {
            background-color: seagreen;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Aapka Sahara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">

                    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                    <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i>Senior Citizens</a>
                    <a class="nav-link" href="logout.php"><i class="fa fa-calendar" aria-hidden="true"></i>Meetups</a>
                    <a class="nav-link" href=""><i class="fa fa-cog" aria-hidden="true"></i>Emergency Services</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Emergency Services !!</h1>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 hospital">
                <h3>Hospital</h3>

                <img src="download.png" alt="no response">


                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-md-4 police">
                <h3>Police</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <img src="download1.jfif" alt="no response">
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-md-4  fire">
                <h3>Fire station</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <img src="download.png" alt="no response">

                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>

</body>

</html>