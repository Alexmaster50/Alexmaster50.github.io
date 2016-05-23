<!DOCTYPE HTML>
<html>
<head>
    <title>Alex's testing site</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
    <style type="text/css">
        ul {
            padding: 0;
            list-style: none;
        }

        ul > li {
            display: inline-block;
            position: relative;
            line-height: 21px;
            text-align: left;
        }

        ul > li > a {
            display: block;
            padding: 8px 25px;
            color: #333;
            text-decoration: none;
        }

        ul li a:hover {
            color: #fff;
            background: #939393;
        }

        li > ul {
            display: none;
            position: absolute;
            z-index: 100;
        }

        ul #dropdownmenu:hover ul {
            display: block;;
        }

        li > ul > li {
            display: block;
            background-color: #333;
            border: black solid 1px;
            text-align: center;
        }


    </style>
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">
        <h2><a id="logo" href="/"><em>http://</em><i>Alexmaster</i><em>50.github.io</em></a></h2>

        <p></p>
        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li id="dropdownmenu">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="index.html">Main page</a></li>
                        <li><a href="/API-Testing.php">API Testing</a></li>
                        <li><a href="#">WIP1</a></li>
                        <li><a href="#">WIP2</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>


    <br><br>
    <div style="font-size: 22px" align="center">memes</div>
    <br><br>



    <?php
/*

    $json = '{
    "players_online":1042,
    "request":{
        "ip":"108.162.237.22",
        "timestamp":1463929338
        }
    }';
    $info = json_decode($json);

    echo "Players on Wynncraft: ". $info->players_online;


*/
    ?>

    <br><br>

    <?php

    $url = 'https://api.wynncraft.com/public_api.php?action=onlinePlayersSum';

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_URL,$url);

    $info = curl_exec($ch);

    curl_close($ch);

    $infoW = json_decode($info, true);

    echo "Players on Wynncraft: ". $infoW['players_online'];;

    ?>


    <div style="font-size: 22px" align="center">passed</div>

    <br><br>


    <!-- Highlights -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row 200%">
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major fa-paper-plane"></i>

                        <h3>This Is Important</h3>

                        <p>Meow</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major fa-pencil"></i>

                        <h3>Also Important</h3>

                        <p>Meow2</p>
                    </div>
                </section>
                <section class="4u 12u(narrower)">
                    <div class="box highlight">
                        <i class="icon major fa-wrench"></i>

                        <h3>Probably Important</h3>

                        <p>Meow3</p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Gigantic Heading -->
    <!--

        <section class="wrapper style2">
            <div class="container">
                <header class="major">
                    <h2>A gigantic heading you can use for whatever</h2>

                    <p>With a much smaller subtitle hanging out just below it</p>
                </header>
            </div>
        </section>

    -->
</div>
</body>
</html>