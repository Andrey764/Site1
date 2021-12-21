<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Site 1</title>
    <link href="css/bootstrap.min.css" , rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12">
                <? include_once("pages/LogIn.php") ?>
            </header>
        </div>

        <div class="row">
            <naw class="col-sm-12 col-md-12 col-lg-12">
                <?php include_once("pages/menu.php"); ?>
            </naw>
        </div>

        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    include_once("pages/$page.php");
                }
                ?>
            </section>
        </div>
    </div>
    <script src="htpps://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>