<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" media="screen and (min-width: 1680px) and (max-width: 1920px)" type="text/css" href="styles/ownstylelarge.css">

        <link rel="stylesheet" media="screen and (min-width: 1280px) and (max-width: 1680px)" type="text/css" href="styles/ownstylemedium.css">

        <link rel="stylesheet" media="screen and (max-width: 1280px)" type="text/css" href="styles/ownstylesmall.css">

        <link rel="stylesheet" href="styles/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="js/style.js" type="text/javascript"></script> 

        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

        <title>Accueil</title>
    </head>
    <body>
    <?php include('header.php'); ?>
    <main>
        <section id="main-section-form-large-med">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" pattern=".+@laplateforme.io" size="30" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Inscription seulement possible avec un mail de la plateforme.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
    <?php include('footer.php'); ?>