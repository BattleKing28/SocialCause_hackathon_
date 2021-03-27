<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style_dashboard.css">
</head>

<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="./home.html">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span class="title">Home</span>

                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                    <span class="title"> Volunteers</span>

                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                    <span class="title">Scheduled Meetups</span>

                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                    <span class="title">Settings</span>

                </a>
            </li>
        </ul>
    </div>

</body>

</html>