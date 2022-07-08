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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">
  <header>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-3-strong">
      <div class="container-fluid justify-content-between">
        <!-- Left elements -->
        <div class="d-flex">
          <!-- Brand -->
          <a class="navbar-brand" href="#">
            <img src="/projet_annexe/reseau_social/image/logo/unify_logo.png" height="50" alt="MDB Logo" loading="lazy" />
          </a>
          <!-- Search form -->
          <form class="input-group w-auto my-auto d-none d-sm-flex">
            <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search" style="min-width: 125px;" />
            <span class="input-group-text border-0 d-none d-lg-flex"><i class="fas fa-search"></i></span>
          </form>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <ul class="navbar-nav flex-row d-none d-md-flex">
          <li class="nav-item me-3 me-lg-1 active">
            <a class="nav-link" href="#">
              <span><i class="fas fa-home fa-lg"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-flag fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-video fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-shopping-bag fa-lg"></i></span>
            </a>
          </li>

          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-users fa-lg"></i></span>
              <span class="badge rounded-pill badge-notification bg-danger">2</span>
            </a>
          </li>
        </ul>
        <!-- Center elements -->

        <!-- Right elements -->
        <ul class="navbar-nav flex-row">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="/portfolio/Documents Professionnel/moi.png" class="rounded-circle" height="30" alt="Black and White Portrait of a Man" loading="lazy" />
            </a>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-3 me-lg-1">
            <a class="nav-link" href="#">
              <span><i class="fas fa-plus-circle fa-lg"></i></span>
            </a>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a class="nav-link dropdown-toggle hidden-row" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-comments fa-lg"></i>
              <span class="badge rounded-pill badge-notification bg-danger">6</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a class="nav-link dropdown-toggle hidden-row" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell fa-lg"></i>
              <span class="badge rounded-pill badge-notification bg-danger">12</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown me-3 me-lg-1">
            <a class="nav-link dropdown-toggle hidden-row" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-chevron-circle-down fa-lg"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Right elements -->
      </div>
    </nav>
    <!-- Navbar -->
  </header>
  <main>
    <!-- Section : White Background -->
    <section class="bg-white mb-4 shadow-2">
      <div class="container">
        <!-- Section : Images -->
        <section class="mb-5">
          <!-- Background Image -->
          <div class="p-5 text-center bg-image shadow-1-strong rounded-bottom" style=" background-image: url('/portfolio/chamonie.JPG'); height: 400px;"></div>
          <div class="d-flex justify-content-center">
            <img src="/portfolio//Documents Professionnel/moi.png" alt="moi" class="rounded-circle shadow-3-strong position-absolute" style="width: 160px; height: 160px; margin-top: -125px">
          </div>
          <!-- Background Image -->
        </section>
        <!-- Section : Images -->

        <!-- Section : User data -->
        <section class="text-center border-bottom">
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <h2><strong>Thomas Niaux aKa Fatalitas</strong></h2>
              <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, dolor. Inventore facere aspernatur laboriosam tempora nihil laborum praesentium qui veniam quisquam? Odit veniam fuga nihil accusamus inventore corrupti architecto libero.</p>
            </div>
          </div>
        </section>
        <!-- Section : User data -->

        <!-- Section : Buttons -->
        <section class="px-3 d-flex justify-content-between align-items-center mt-2 mb-2">
          <!-- Left elements -->
          <div>
            <button type="button" class="btn btn-light btn-rounded bg-lighte_link">Publications</button>
            <button type="button" class="btn btn-light btn-rounded bg-lighte_link">À propos</button>
            <button type="button" class="btn btn-light btn-rounded bg-lighte_link">Ami(e)s
              <small class="text-muted">1456</small>
            </button>
            <button type="button" class="btn btn-light btn-rounded bg-lighte_link">Photos</button>
            <div class="dropdown d-inline-block">
            </div>
          </div>
          <!-- Left elements -->
          <!-- Right elements -->
          <div>
            <a href="#" onclick="afficher()" class="btn-inscription"><button type="button" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i> Ajouter un article</button></a>
            <!-- Modal -->
            <div class="modal" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
              <div class="">
                <div class="">
                  <div class="">
                    <div class="form-outline">
                      <input type="text" id="form12" class="form-control mt-3" placeholder="Quel est le titre de votre article" size="25%" />
                      <label class="form-label" for="form12"></label>
                    </div>
                  </div>
                  <div class="modal-body">
                    <div class="form-outline">
                      <textarea class="form-control" id="textAreaExample" rows="8"></textarea>
                      <label class="form-label" for="textAreaExample"></label>
                    </div>
                    <input type="file" class="form-control" id="customFile" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" onclick="afficher()" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-light mr-2 bg mb-2" data-mdb-ripple-color="dark"><i class="fas fa-pen"></i> Modifier le profil</button>
          </div>
          <!-- Right elements -->
        </section>
        <!-- Section : Buttons -->
      </div>
    </section>
    <!-- Section : White Background -->

    <!-- Section : Grey Background -->
    <section class="">
      <div class="container">
        <div class="row_post">
          <div class="col-md-3 mb-md-0 ml-1 none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maxime sint, quisquam totam repudiandae dignissimos nemo vitae velit cum ad exercitationem consectetur quae architecto, enim aut quo, quia quam quaerat! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi reprehenderit nam consequatur ipsam inventore accusantium sapiente nisi iusto cumque id, minima, quod eligendi sed tenetur! Ab dignissimos veniam quia sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis optio corrupti modi laboriosam eaque quia possimus alias, ut aperiam adipisci hic atque dolores nesciunt. Dolorum ratione ducimus voluptatum quaerat ea? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, saepe quos quas consequatur voluptatum cupiditate deserunt, distinctio, quidem laboriosam ea perspiciatis veritatis recusandae iure nostrum sequi nesciunt voluptatibus blanditiis quibusdam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias aperiam fuga asperiores laudantium vitae dolorum voluptas et magni hic culpa deserunt, veniam magnam explicabo tenetur! Numquam, alias. Maxime, rem modi.</div>
          <div class="row collumns">
            <div class="col-md-5 mb-md-0">
              <div class="card width: 450px;">
                <div class="card-body">
                  <h5 class="card-title"><strong>Intro</strong></h5>
                  <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-100 mb-2" data-mdb-ripple-color="dark">Ajouter une bio</button>
                  <ul class="list-unstyled text-muted">
                    <li><i class="fas fa-briefcase"></i> Travail chez <a href="https://www.riotgames.com/fr" class="text-reset"><strong>Riot Games</strong></a></li>
                    <li><i class="fas fa-graduation-cap"></i> A étudié à <a href="https://www.coursflorent.fr/campus/paris" class="text-reset"><strong>Cours Florent</strong></a></li>
                    <li><i class="fas fa-home"></i> Habite à <a href="https://www.sartrouville.fr/" class="text-reset"><strong>Sartrouville, France</strong></a></li>
                    <li><i class="fas fa-heart"></i> Actuellement <a href="https://www.meetic.fr/unlogged/landing/?mtcmk=896674&gclid=CjwKCAjw682TBhATEiwA9crl37emX5tgHyB1_jeJX45PM1S3ZTdAWwPIqTtKq5Z_T8k7o6j015oUABoC_jcQAvD_BwE" class="text-reset"><strong>Célibataire</strong></a></li>
                    <li><i class="fas fa-rss"></i> Suivi par presque 4 millions de personnes sur <a href="https://www.twitch.tv/myfatalitas" class="text-reset"><strong> Twitch</strong></a></li>
                    <li><i class="fas fa-globe-europe"></i> Mon <a href="file:///D:/xampp/htdocs/portfolio/Index/index.html" class="text-reset"><strong>Portefolio</strong></a></li>
                  </ul>
                  <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-100 mb-2" data-mdb-ripple-color="dark">Modifier les infos</button>
                  <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-100 mb-2" data-mdb-ripple-color="dark">Ajouter des loisirs</button>
                  <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-100 mb-2" data-mdb-ripple-color="dark">Ajouter de contenu à la une</button>
                </div>
              </div>
            </div>
            <div class="col-md-7 mb-md-0">
              <div class="card card2">
                <div class="card mind">
                  <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-90 mt-mb-4" data-mdb-ripple-color="dark">Modifier les infos</button>
                </div>
              </div>
              <br>
              <div class="card card2 publication">
                <div class="card_publication w-100">
                  <div class="d-flex justify-content-between align-items-center w-100">
                    <h5 class="card-title"><strong>Publication</strong></h5>
                    <div class="d-flex mr-16">
                      <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-90 mt-mb-4" data-mdb-ripple-color="dark"><i class="fas fa-balance-scale"></i></button>
                      <button type="button" class="btn btn-light bg-light shadow-1-strong btn-block w-90 mt-mb-4" data-mdb-ripple-color="dark"><i class="fas fa-cog"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card2">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="/portfolio/images/malte.JPG" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-md-0 ml-1 none1">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, magnam. Quasi natus obcaecati aut quam architecto maiores nostrum incidunt beatae pariatur consequuntur, aperiam libero blanditiis numquam corporis excepturi ipsam. Incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ut dignissimos nulla quod dolore nam ipsam. Fugiat voluptas porro veniam velit facilis nostrum repellendus quaerat alias eligendi corrupti, tempora recusandae.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro itaque sapiente magnam! Minima, odit? Necessitatibus quae unde eius quas, et nemo. Consequatur dolorum eaque ipsam sequi vitae quaerat omnis voluptatem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat tempore illo velit alias fuga id facere consequatur temporibus molestiae distinctio voluptatem reprehenderit sapiente, ab, obcaecati aut. Exercitationem eaque expedita eveniet! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestiae veritatis cum inventore sapiente vitae, dolor, iure aut fugiat in fuga labore asperiores? Rerum praesentium ipsa deserunt molestiae quisquam distinctio.
          </div>
        </div>
      </div>
    </section>
    <!-- Section : Grey Background -->
    <section>

    </section>
  </main>
  <footer>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="/projet_annexe/reseau_social/style/style_profil.css" rel="stylesheet">

  <script>
    function afficher() {
      document.querySelector('.modal').classList.toggle('active')
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  <!--Custom styles-->
    
</body>