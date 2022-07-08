<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no, user-scalable='no'">
    <link type="text/css" rel="stylesheet" href="./cours/cours_thomas/css/base.css">
    <link type="text/css" rel="stylesheet" href="./reseau_social/style/style.css">
    <link type="image/png" rel="icon" href="./reseau_social/image/logo/unify_logo.png">
    <script src="https://kit.fontawesome.com/1e99ed71dc.js" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>
<body>
    <div id="bloc_page_accueil">
        <header>
                <?php 
                    require_once __DIR__ . "./cours/cours_thomas/menu.php";
                ?>
        </header>
        <main>
            <section id="bloc_scroll_image_section">
                <aside class="bloc_scroll_image_aside">
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/marie.jpg">
                            <div class="text_bloc_scroll_image_aside">Marie Brunet</div>
                        </a>
                    </div>
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/chloe.jpg">
                            <div class="text_bloc_scroll_image_aside2">Chloé Dubois</div>
                        </a>
                    </div>
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/damien.jpg">
                            <div class="text_bloc_scroll_image_aside3">Damien Martin</div>
                        </a>
                    </div>
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/asha.jpeg">
                            <div class="text_bloc_scroll_image_aside4">Asha Kumari </div>
                        </a>
                    </div>
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/thierry.webp">
                            <div class="text_bloc_scroll_image_aside5">Thierry Salvat </div>
                        </a>
                    </div>
                    <div class="photo_bloc_scroll_image_aside">
                        <a href="" class="bloc_scroll_image_aside_link"><img src="../projetReseauSociaux/reseau_social/image/photo_de_profil/lea.jpg">
                            <div class="text_bloc_scroll_image_aside6">Léa Popa</div>
                        </a>
                        <a class="row_scroll_link" href="">
                            <span class="row_scroll">
                            <svg fill="currentColor" viewBox="0 0 20 20" width="1.5em" height="1.5em" class="svg_row"><g fill-rule="evenodd" transform="translate(-446 -350)"><g fill-rule="nonzero"><path d="M101.751 211.001a1 1 0 0 0 1.415 1.415l5.208-5.209a1 1 0 0 0 0-1.414l-5.208-5.209A1 1 0 0 0 101.75 202l4.501 4.501-4.5 4.501z" transform="translate(355 153.5)"></path><path d="M94.334 207.5h12.812a1 1 0 1 0 0-2H94.333a1 1 0 1 0 0 2z" transform="translate(355 153.5)"></path></g></g></svg>
                            </span>
                        </a>
                    </div>
                </aside>
                <aside class="bloc_scroll_image_aside2">
                    <div class="search-bar_accueil_aside">
                        <div class="search-bar">
                            <a href="" class="photo_profil"><img class="search-bar_photo_profil" src="./reseau_social/image/photo_de_profil/manon.webp"></a>
                            <input type="text" placeholder="Quoi de beau, $user ?"></input>
                        </div>
                        <hr class="dropdown-divider">
                        <div class="search-bar">
                            <ul>
                                <a href="" class="search-bar_icone"><i class="fa-solid fa-location-dot"></i><span>Point de rencontre</span></a>
                                <a href="" class="search-bar_icone"><i class="fa-solid fa-video"></i><span>Vidéo en live</span></a>
                                <a href="" class="search-bar_icone"><i class="fa-solid fa-face-smile-beam"></i><span>État émotionnel</span></a>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside class="bloc_suggestion">
                    <div class="bloc_suggestion_conv">
                        <div class="conv">
                            <a class="creer_conv" href=""><img class="conv_cam" src="./reseau_social/image/icone/caméra.png"><span>Créer conv</span></a>
                        </div>
                        <div class="conv_image">
                            <a href=""><img src="./reseau_social/image/photo_de_profil/carole.jpeg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/richard.jpg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/estelle.jpg"></a>
                            <a href=""><img src="./reseau_social/image/photo_de_profil/michel.jpg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/miriame.jpg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/sacha.jpg"></a>
                            <a href=""><img src="./reseau_social/image/photo_de_profil/shakira.jpg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/morgan.jpg"></a><a href=""><img src="./reseau_social/image/photo_de_profil/awa.jpg"></a>
                        </div>
                    </div>
                </aside>
            </section>
            <section id="bloc_post">
                <aside id="bloc_post_aside">
                    <header>
                        <div class="search-bar_post">
                            <div class="post_header">
                                <div class="bloc_post_header">
                                    <a href="" class="bloc_post_header_lien"><img class="bloc_post_header_photo" src="./reseau_social/image/photo_de_profil/manon.webp"></a>
                                    <div class="bloc_post_nom">
                                        <span>Céline Martin</span>
                                        <div class="post_header_time">
                                            <span>7h.</span>
                                            <svg fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh cyypbtt7 fwizqjfa" title="Partagé avec Public"><g fill-rule="evenodd" transform="translate(-448 -544)"><g><path d="M109.5 408.5c0 3.23-2.04 5.983-4.903 7.036l.07-.036c1.167-1 1.814-2.967 2-3.834.214-1 .303-1.3-.5-1.96-.31-.253-.677-.196-1.04-.476-.246-.19-.356-.59-.606-.73-.594-.337-1.107.11-1.954.223a2.666 2.666 0 0 1-1.15-.123c-.007 0-.007 0-.013-.004l-.083-.03c-.164-.082-.077-.206.006-.36h-.006c.086-.17.086-.376-.05-.529-.19-.214-.54-.214-.804-.224-.106-.003-.21 0-.313.004l-.003-.004c-.04 0-.084.004-.124.004h-.037c-.323.007-.666-.034-.893-.314-.263-.353-.29-.733.097-1.09.28-.26.863-.8 1.807-.22.603.37 1.166.667 1.666.5.33-.11.48-.303.094-.87a1.128 1.128 0 0 1-.214-.73c.067-.776.687-.84 1.164-1.2.466-.356.68-.943.546-1.457-.106-.413-.51-.873-1.28-1.01a7.49 7.49 0 0 1 6.524 7.434" transform="translate(354 143.5)"></path><path d="M104.107 415.696A7.498 7.498 0 0 1 94.5 408.5a7.48 7.48 0 0 1 3.407-6.283 5.474 5.474 0 0 0-1.653 2.334c-.753 2.217-.217 4.075 2.29 4.075.833 0 1.4.561 1.333 2.375-.013.403.52 1.78 2.45 1.89.7.04 1.184 1.053 1.33 1.74.06.29.127.65.257.97a.174.174 0 0 0 .193.096" transform="translate(354 143.5)"></path><path fill-rule="nonzero" d="M110 408.5a8 8 0 1 1-16 0 8 8 0 0 1 16 0zm-1 0a7 7 0 1 0-14 0 7 7 0 0 0 14 0z" transform="translate(354 143.5)"></path></g></g></svg>
                                        </div>
                                    </div>
                                </div>
                                <div aria-expanded="false" aria-haspopup="menu" aria-label="Actions pour cette publication" class="oajrlxb2 gs1a9yip mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 rq0escxv nhd2j8a9 mg4g778l pfnyh3mw p7hjln8o tgvbjcpo hpfvmrgz i1ao9s8h esuyzwwr f1sip0of du4w35lb n00je7tq arfg74bv qs9ysxi8 k77z8yql btwxx1t3 abiwlrkh p8dawk7l lzcic4wl dwo3fsh8 g5ia77u1 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 pq6dq46d kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 pzggbiyp pkj7ub1o bqnlxs5p kkg9azqs c24pa1uk ln9iyx3p fe6kdd0r ar1oviwq l10q8mi9 sq40qgkc s8quxz6p pdjglbur" role="button" tabindex="0">
                                    <svg fill="currentColor" viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh jnigpg78 odw8uiq3">
                                        <g fill-rule="evenodd" transform="translate(-446 -350)"><path d="M458 360a2 2 0 1 1-4 0 2 2 0 0 1 4 0m6 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-12 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0"></path></g>
                                    </svg>
                                    <div class="i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s k19f6yf2 s45kfl79 emlxlaya bkmhp75w spb7xbtv" data-visualcompletion="ignore" style="bottom:-8px;left:-8px;right:-8px;top:-8px"></div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <aside>
                        <video class="" controls width="100%" height="100%">
                            <source src="./reseau_social/Vidéo/Best Of - Bêtisier des Films Cultes.mp4" type="video/mp4">
                            <source src="./reseau_social/Vidéo/Best Of - Bêtisier des Films Cultes.webm" type="video/webm">
                        </video>
                    </aside>
                    <article>
                        
                    </article>
                    <footer>
                    
                    </footer>
                </aside>
            </section>
        </main>
    </div>
</body>
</html>