<?php
session_start();
require_once __DIR__ . "./model/_model.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable='no'">
    <script src="https://kit.fontawesome.com/52aec5cfac.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./css/base.css" rel="stylesheet">

</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active bloc_scroll_image_aside">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/marie.jpg">
                    <div class="text_bloc_scroll_image_aside">Marie Brunet</div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/chloe.jpg">
                    <div class="text_bloc_scroll_image_aside2">Chloé Dubois</div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/damien.jpg">
                    <div class="text_bloc_scroll_image_aside3">Damien Martin</div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/asha.jpeg">
                    <div class="text_bloc_scroll_image_aside4">Asha Kumari </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/thierry.webp">
                    <div class="text_bloc_scroll_image_aside5">Thierry Salvat </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/lea.jpg">
                    <div class="text_bloc_scroll_image_aside6">Léa Popa</div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>