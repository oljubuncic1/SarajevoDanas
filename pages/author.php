<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SarajevoDanas</title>

        <link rel="shortcut icon" type="image/png" href="./../images/favicon.png"/>

        <link rel="stylesheet" type="text/css" href="./../styles/index.css">
        <link rel="stylesheet" type="text/css" href="./../styles/header.css">
        <link rel="stylesheet" type="text/css" href="./../styles/news.css">
        <link rel="stylesheet" type="text/css" href="./../styles/logo-scaled.css">

        <script src="./../scripts/author.js"></script>
        <script src="./../scripts/news.js"></script>
        <script src="./../scripts/date.js"></script>
        <script src="./../services/api_info.js"></script>
        <script src="./../services/news.js"></script>

    </head>

    <body>

        <?php include('./scripts/author.php') ?>


        <table class="index-header" id="header">
            <tr>
                <td>
                    <h1>SarajevoDanas - saznaj šta se dešava u tvom gradu!</h1>
                </td>
                <td id="logo-cell">
                    <div class="logo-scaled-wrapper" id="index-logo">
                        <div class="logo-scaled-line-top"></div>
                        <div class="logo-scaled-base"></div>
                        <div class="logo-scaled-line-bot"></div>
                        <div class="logo-scaled-line-behind"></div>
                    </div>
                </td> </tr> </table>
        <div class="navbar" id="index-navbar">
    <!--            <div class="logo"></div> -->
            <table>
                <tr>
                    <td class="active">Naslovnica</td>
                    <td>
                        <a href="./../pages/stat.php">
                            Statistika
                        </a>
                    </td>
                    <td> <a href="./../pages/about.php">
                            O nama
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/contact.php">
                            Kontakt
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/login.php">
                            Login
                        </a>
                    </td>
                    <td>
                        <a href="./../pages/admin.php">
                            Admin panel
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div id="admin-text">
            <?php
                echo $okMsg;
                echo $logoutButton;
            ?>
        </div>
        <div>
            Prikaži
            <select id="news_filter" onchange="filter_news(this)">
                <option value="all">sve novosti</option>
                <option value="day">današnje novosti</option>
                <option value="week">novosti ove sedmice</option>
                <option value="month">novosti ovog mjeseca</option>
            </select>
            Sortiaj abecedno<input type="checkbox" name="alphabetical" value="no" onchange="return checked_ab(this)"><br>
        </div>
        <div class="news-container">
            <div class="news-row">
                <div id="news-test"></div>
                <div id="news-r"></div>
            </div>
            <div id="news-lf"></div>
            <div id="news-rf"></div>
        </div>
    </body>
</html>
