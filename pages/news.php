 <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SarajevoDanas</title>

        <link rel="shortcut icon" type="image/png" href="./../images/favicon.png"/>

        <link rel="stylesheet" type="text/css" href="./../styles/admin.css">
        <link rel="stylesheet" type="text/css" href="./../styles/header.css">
        <link rel="stylesheet" type="text/css" href="./../styles/logo-scaled.css">

        <script src="./../scripts/admin.js"></script>
    </head>

    <body>

        <?php include('./../scripts/news.php') ?>

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
                </td>
            </tr>
        </table>
        <div class="navbar" id="index-navbar">
            <table>
                <tr>
                    <td>
                        <a href="./../index.php">
                         Naslovnica
                     </td>
                    <td>
                        <a href="./../pages/stat.php"> Statistika
                    </td>
                    <td>
                        <a href="./../pages/about.php">
                        O nama
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
                    <td class="active">
                        <a>
                            User panel
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <br>

        <h1>
        <?php
            echo $news_title;
        ?>
    </h1>
        <br>
        <?php
            echo $news_text;
        ?>

        <?php
            echo $comment_html;
        ?>
    </body>
</html>
