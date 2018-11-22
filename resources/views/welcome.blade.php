<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GoClub</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->


  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <script src="{{asset('assets/lib/angular/angular.min.js')}}"></script>
  <!-- =======================================================
    Theme Name: GoClub
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


<body ng-app="Homeapp">
<div ng-controller='HomeController' >
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>Go</span>Clubs</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#screenshots">L'INPT</a></li>
          <li><a href="#team">Clubs</a></li>
          <li><a href="#blog">Events</a></li>
          <!--<li><a href="#pricing">Pricing</a></li>-->
          <li class="menu-has-children"><a href="">Pré-inscription aux clubs</a>
            <ul>
              <li><a href="#team">Club CIT</a></li>
              <li><a href="#team">Club Rotaract</a></li>
              <li><a href="#team">Club Great Debaters</a></li>
              <li><a href="#team">Club Enactus</a></li>
              
            </ul>
          </li>
          <li><a href="#">Login</a></li>
          <li><a href="#contact">Contact-US</a></li>
        </ul>
      </nav> <br><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
        <br><br><br>
        <br>
      <h1>Welcome to GoClubs</h1>
      <h2>Evenements, Présentation des Clubs, Pré-inscription aux clubs...</h2>
      <img src="{{asset('assets/img/hero-img.png')}}" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
      <div class="btns">
        <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
        <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fa fa-google-plus"></i>  Google Plus</a>
        <br>
        <br>
        <br>
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Les activités parascolaires : un atout pour la réussite </h2>
        <p class="separator">Les recherches récentes montrent l’importance des activités parascolaires, notamment parce qu’elles contribuent à consolider les aspirations scolaires et les projets de formation.<br>L’école est un lieu où le jeune passe une grande partie de son temps. Cependant, il n’y a pas qu’en classe où un élève peut faire des apprentissages qui lui sont profitables. Les recherches récentes montrent l’importance des activités parascolaires, notamment parce qu’elles contribuent à consolider les aspirations scolaires et les projets de formation.</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('assets/img/svg/cloud.svg')}}" alt="img" class="img-fluid">
            <h4>Les évènements</h4>
            <p>Jeudis d'entreprises, JNJD,IEEExTREME Coding, TEDxTalks, Olympiades...</p>
            <a href="#blog">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('assets/img/svg/planet.svg')}}" alt="img" class="img-fluid">
            <h4>Clubs</h4>
            <p>Hayat, CIT, CESE, A2S, IEEE, ENACTUS...</p>
            <a href="#team">read more</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="{{asset('assets/img/svg/asteroid.svg')}}" alt="img" class="img-fluid">
            <h4>Annonces</h4>
            <p>Liste des admis dans les clubs, Meetings, Compétitions ...</p>
            <a href="#">read more</a>

          </div>
        </div>

      </div>
    </div>

  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="{{asset('assets/img/about-img.png')}}" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>Go Clubs</span>Les club au Digital</h2>
            <p>Site dynamique, simple et bien pratique permettant aux INPT'istes 
            </p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Découvrir les différents CLUBs</li>
              <li><i class="fa fa-angle-right"></i>Pré-inscrire dans les clubs</li>
              <li><i class="fa fa-angle-right"></i>Découvrir les évènements en temps réel</li>
              <li><i class="fa fa-angle-right"></i>Voir les annonces de chaque club</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

 <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>L'institut National des Postes et Télécommunications</h2>
        <p class="separator">L'institut National des Postes et Télécommunications (INPT) est un établissement d'enseignement supérieur, rattaché à l’Agence Nationale de Réglementation des Télécommunications (ANRT) de par la loi 24-96  relative à la poste et aux télécommunications promulguée par le dahir n°1-97-162 du 2 rabii II 1418 (7 août 1997), telle qu’elle a été modifiée et complétée, notamment son article 107. L’INPT est également régi par le décret n° 2-11-82 du 7 Ramadan 1432 (8 Août 2011) portant réorganisation de l’Institut National des Postes et Télécommunications.
        L’INPT a pour mission la formation, la recherche et l’expertise. Il est chargé de la formation initiale et de la formation continue dans les domaines des télécommunications, des technologies de l’information et de la communication et disciplines connexes.
        Cette mission concerne également la recherche scientifique et technique ainsi que toute autre forme de formation rendue nécessaire au regard de l’environnement général ou de circonstances conjoncturelles.
        Ces formations ont pour objet la diffusion des connaissances et l’insertion des lauréats dans la vie active.
        L'enseignement à l’INPT est fondé sur les principes énoncés par la loi n° 01-00 portant organisation de l'Enseignement Supérieur, promulguée par le dahir n° 1-00-199 du 15 Safar 1421 (19 mal 2000).</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="{{asset('assets/img/screen/1.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/2.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/3.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/4.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/5.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/6.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/7.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/8.jpg')}}" alt="img"></div>
        <div><img src="{{asset('assets/img/screen/9.jpg')}}" alt="img"></div>

      </div>
    </div>

  </section>
  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title ">
        <h2>Les nouvelles filières</h2>
        <p class="separator">Dans la vision d'être l’école de référence qui attire les meilleurs profils et produit les meilleurs lauréats, au service du développement de l’écosystème numérique</p>
      </div>
    </div>

    <div class="container">
      
          <div class="feature-block">
            <img src="{{asset('assets/img/amoa.png')}}" alt="img" class="img-fluid">
            <h4>AMOA</h4>
            <div class="col-md-12 text-justify" >L’ingénieur innovation et AMOA joue dans un premier temps le rôle d’entrepreneur, en réalisant un projet d’innovation dans le numérique, à travers la création d’une start-up à fort potentiel de croissance au service du développement de l’écosystème numérique.</div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="amoa='True'" ng-init="amoa=False" ng-hide="amoa">Read More</button>
            <div class="col-md-12 text-justify"  ng-show="amoa">

Il peut également jouer le rôle d’intrapreneur, en menant à bien la transformation numérique au sein d’une entreprise. Son rôle consiste à intégrer simultanément des technologies adaptées et une nouvelle culture du numérique au sein de l’entreprise avec l’apport de méthodologies innovantes et la conduite du changement associée. Ce rôle d’accompagnement peut également s’articuler autour d’une fonction d’assistance à maîtrise d’ouvrage des SI. Il traduit ainsi les besoins fonctionnels d'un commanditaire en solution technologique, selon les objectifs du domaine métier (comptable, ressources humaines, logistique, commercial, production...) et les contraintes économiques et logistiques. Il négocie avec les informaticiens les composantes d'une application et d'un outil logiciel, tout au long de la conception et de la réalisation, dans l'intérêt de l'entreprise et des utilisateurs finaux.

Ses actions se basent sur une approche nouvelle, basée sur l’innovation, la co-création, la pensée analytique et intuitive, au service de son client final. Ce dernier lui permet, entre autres, de concevoir le parcours et l’usage utilisateur sur tout type de plateforme selon les meilleurs normes et standards.

 </div>
         
        </div>

        
          <div class="feature-block">
            <img src="{{asset('assets/img/asdes.png')}}" alt="img" class="img-fluid">
            <h4>ASEDS</h4>
            <div class="text-justify">L’ingénieur Développement des Services Numériques conçoit, développe et met au point des solutions applicatives et logicielles, depuis la phase d'étude jusq'au développement, en utilisant le langage approprié au profit d'un client ou une entreprise selon des besoins fonctionnels et un cahier des charges.
</div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="aseds='True'" ng-init="aseds=False" ng-hide="aseds">Read More</button>
            <div class="col-md-12 text-justify" ng-show="aseds">
Doté de solides compétences en développement informatique, il maîtrise égalment des concepts et environnements technologiques qui lui permettent de participer à leur définition et leur structuration (bases de données, serveurs, etc.). En mesure de formaliser la documentation appropriée (guide utilisateurs, etc.), il peut par aillieurs être en charge de la maintenance et de l’évolution du produit.

 </div>
          </div>

        
         
          <div class="feature-block">
            <img src="{{asset('assets/img/issn.jpg')}}" alt="img" class="img-fluid">
            <h4>ISSN</h4>
            <div class="col-md-12 text-justify">L’ingénieur des Systèmes et Services Numériques est en charge de la spécification, la conception et le développement des applications et fonctionnalités propres aux solutions relatives à la technologie « embarquée » dans des équipements tels que : capteur connecté, télévision connectée, voiture connectée, logement connecté, ville connectée et autre.
</div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="issn='True'" ng-init="issn=False" ng-hide="issn">Read More</button>
            <div class="col-md-12 text-justify" ng-show="issn">
Etant le noyau concepteur et « développeur », l’ingénieur des systèmes et services numérique se caractérise par une forte capacité de management et de travail en équipe. Sa parfaite maîtrise des aspects de l’intégration d’électronique lui permet de comprendre et piloter l’exécution de l’intégralité du développement d’un système embarqué.</div>
          </div>
       
          <div class="feature-block">
            <img src="{{asset('assets/img/data.png')}}" alt="img" class="img-fluid">
            <h4>Data Engineering</h4>
            <div class="col-md-12 text-justify">Le Data engineer est un profil dédié au traitement des données massives. Il a pour rôle, entre autres, de valoriser l’ensemble des données de l’entreprise pour en faire un levier de création de valeur pour cette dernière (modèles prédictifs, etc.). Il analyse des masses de données hétérogènes, éventuellement non structurées, pour en extraire de la connaissance utile à l’optimisation des offres, services et processus de l’entreprise. Ses compétences en traitement et exploitation de données structurées ou semi-structurées lui permettent d’intervenir sur des sujets ayant trait à la Business Intelligence et les systèmes informatiques décisionnels qui la sous-tendent.
</div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="data='True'" ng-init="data=False" ng-hide="data">Read More</button>
            <div class="col-md-12 text-justify" ng-show="data">
Le Data engineer a également pour rôle de créer et d’optimiser les infrastructures de stockage, de manipulation, et de restitution des données brutes. Il travaille de concert avec les équipes de développement, de Business Intelligence et d'administration système, en concevant des solutions fonctionnelles, anticipant les besoins futurs et respectant les contraintes imposées par les architectures existantes.

Doté de solides compétences en mathématiques et en informatique, l’intervention du Data Engineer peut converger naturellement vers les sujets ayant trait à l’intelligence artificielle, le machine learning et des systèmes apprenants.</div>
          
        </div>

       

        
          <div class="feature-block">
            <img src="{{asset('assets/img/svg/cloud-computing.svg')}}" alt="img" class="img-fluid">
            <h4>Cloud & IoT</h4>
            <div class="col-md-12 text-justify">L’ingénieur Cloud et IoT accompagne les mutations des systèmes d’information des entreprises vers l’informatique dans le cloud, notamment à travers la dématérialisation des infrastructures IT et des services numériques y afférents.
</div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="iot='True'" ng-init="iot=False" ng-hide="iot">Read More</button>
            <div class="col-md-12 text-justify" ng-show="iot">
Il est en charge du déploiement, du stockage et de la gestion des données sur des serveurs situés dans des data centers hors de l’entreprise. Il intervient dans le cadre de la conception et la mise en service de plateformes informatiques et de traitements de stockage, à la demande, sur des sites distants,  circulant sur des liaisons mutualisées

Le rôle de l’ingénieur cloud et IoT intervient et gère la relation d’interdépendance entre  l’internet des objets et le cloud. De  par ses compétences en conception, en déploiement et en administration des infrastructures cloud, il gère les échanges entre objets et le traitement des données (stockage, flux de données, élasticité des infrastructures, et autre.).</div>
         
        </div>

        


      
          <div class="feature-block">
            <img src="{{asset('assets/img/ict.png')}}" alt="img" class="img-fluid">
            <h4>Smart ICT</h4>
            <div class="col-md-12 text-justify">L’Ingénieur Smart ICT conçoit, planifie, développe et réalise les architectures, les plateformes et les solutions techniques et technologiques des réseaux intelligents modernes de télécommunications, selon les besoins et la stratégie de l'entreprise ou du client. Il est garant du bon fonctionnement et de la qualité de l'infrastructure sur les plans matériel et logiciel, participe à son évolution et pilote les projets d'intégration et de modernisation.
              </div>
            <button type="button" class="btn btn-outline-info btn-sm" ng-click="ict='True'" ng-init="ict=False" ng-hide="ict">Read More</button>
            <div class="col-md-12 text-justify" ng-show="ict">
Il conseille et oriente alors les choix de l’entreprise en matière de solutions technologiques intelligentes, et peut participer aux négociations avec les prestataires. Il peut également encadrer des prestataires (techniciens réseaux) si l’équipe est importante.
L’ingénieur Smart ICT peut par ailleurs être amené à superviser les opérations de transferts technologiques (déménagement d’infrastructures, site annexe de back up et autre. et réaliser des opérations de veille et d’optimisation des ressources.
 </div>
          

      </div>
    </div>
  </section>



  <!--==========================
    Video Section
  ============================-->

 

  <!--==========================
    Club Section
  ============================-->
  <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Présentation des Clubs</h2>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="{{asset('assets/img/team/1.jpg')}}" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>Rotaract</span>
              <h4><button  type="button" class="btn btn-info btn-sm" ng-click="Rotaract='True'" ng-init="Rotaract=False" >Présentation</button></h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="{{asset('assets/img/team/2.jpg')}}" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>Great Debaters</span>
              <h4><button  type="button" class="btn btn-info btn-sm" ng-click="Great='True'" ng-init="Great=False" >Présentation</button></h4>
            </div>
          </div>
        </div>

      
        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="{{asset('assets/img/team/4.jpg')}}" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>Enactus</span>
              <h4><a href="#">Présentation</a></h4>
            </div>
          </div>


        </div>

    
  
    
        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="{{asset('assets/img/team/5.jpg')}}" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>CIT</span>
              <h4><a href="#">Présentation</a></h4>
            </div>
          </div>
         </div>
      </div>
      </div>
  </section>
 <section  ng-hide="Great" ng-show="Rotaract"  class="padd-section text-justify ">

    <div class="container">
      <div class="section-title text-center">

        <h2>Rotaract</h2>

      </div>
    </div>

    <div class="container">
      Le but du Rotaract est de fournir une occasion pour les jeunes hommes et femmes de 18 à 30 ans à améliorer les connaissances et les compétences qui les aideront dans le développement personnel, pour répondre aux besoins physiques et sociaux de leurs communautés, et à promouvoir de meilleures relations entre tous les peuples du monde entier à travers un cadre de l’amitié et de service.

Fondé en 1968 par le Rotary International, association internationale de dirigeants et de leaders attachés à l’idée de service, le Rotaract représente aujourd’hui plus de 7 300 clubs, chacun parrainé par un Rotary club et regroupant plus de 145 000 membres dans 150 pays au monde.

Mission
– Développer des compétences de leadership professionnel.
– Souligner le respect des droits d’autrui, et promouvoir des normes éthiques et de la dignité de toute occupation utile.

– Offrir des possibilités aux jeunes de répondre aux besoins et aux préoccupations de la communauté et du monde.

– Fournir des opportunités pour travailler en collaboration avec les Rotary clubs parrains.

– Motiver les jeunes à une éventuelle adhésion au Rotary .
    </div>
  </section>
   <section  ng-hide="Rotaract" ng-show="Great"  class="padd-section text-justify ">

    <div class="container">
      <div class="section-title text-center">

        <h2>Great Debaters</h2>

      </div>
    </div>

    <div class="container">
      Il s’agit d’un club lié à la compétition nationale « The Great Debaters Morocco » – « GDM »- qui est une compétition de débat inter-écoles supérieures et universités du Maroc.
Les membres du club sont aussi des membres du comité GDM et ont donc pour mission de participer à l’organisation de la compétition nationale,d’organiser des présélections internes pour choisir les membres de l’équipe qui y représentera l’INPT,ainsi que d’assurer la coordination entre ces derniers et le comité GDM.
Le club peut aussi organiser des conférences, des compétitions culturelles,ou tout autre évènement en accord avec l’esprit et les valeurs des Great Debaters.

Club d’aspect culturel en activité à l’INPT
    </div>
  </section>
  

  <!--==========================
    Testimonials Section
  ============================
  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>S'il n'y avait pas d'hiver, le printemps ne serait pas si agréable : si nous ne goûtions pas à l'adversité, la réussite ne serait pas tant appréciée.</p>
                    <h4>Kimberly Tran<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Henderson<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>David Spark<span>manager</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
-->

  <!--==========================
    Pricing Table Section
  ============================
  <section id="pricing" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Meet With Price</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>basic</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>PERSONAL</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>BUSINESS</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="block-pricing">
            <div class="table">
              <h4>profeesional</h4>
              <h2>$29</h2>
              <ul class="list-unstyled">
                <li><b>4 GB</b> Ram</li>
                <li><b>7/24</b> Tech Support</li>
                <li><b>40 GB</b> SSD Cloud Storage</li>
                <li>Monthly Backups</li>
                <li>Palo Protection</li>
              </ul>
              <div class="table_btn">
                <a href="#" class="btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Evenements</h2>
        <p class="separator">L'ensemble des évènement organisé par l'ensemble des clubs sous l'accompagnement des responsables au sein de l'inpt</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('assets/img/blog/blog-image-1.jpg')}}" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">Jeudis d'entreprises</a></h4>
              <span>Chaque Jeudi</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('assets/img/blog/blog-image-2.jpg')}}" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">TEDxINPT</a></h4>
              <span>05, Janvier 2019</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="{{asset('assets/img/blog/blog-image-3.jpg')}}" class="img-responsive" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">JNJD - CIT </a></h4>
              <span>05, Mars juin 2018</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Newsletter Section
  ============================-->
  <section id="newsletter" class="newsletter text-center wow fadeInUp">
    <div class="overlay padd-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <form class="form-inline" method="POST" action="#">

              <input type="email" class="form-control " placeholder="Email Adress" name="email">
              <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>

            </form>

          </div>
        </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>


      </div>
    </div>
  </section>

  <!--==========================
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Contact</h2>
        <p class="separator">L'INSTITUT NATIONAL DES POSTES ET TELECOMMUNICATION-GoCLubs Group</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Madinat Al Irfane<br>Rabat, Maroc</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>inpt.home@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+212 5 24 555 6658</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">GoCLubs</a>
            <p>La plateforme N°1 pour l'accompagnement des nouveaux INPT'ist dans leurs choix de clubs.</p>

          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-2">
          <div class="list-menu">

            <h4>About us</h4>

            <ul class="list-unstyled">
              <li><a href="#about-us">About us</a></li>
           
              
            </ul>

          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-2">
          <div class="list-menu">

            <h4>Contact</h4>

            <ul class="list-unstyled">
              <li><a href="#contact">Contact us</a></li>
           
             
            </ul>

          </div>
        </div>

        

       
      </div>
    </div>

    

  </footer>

</div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/lib/modal-video/js/modal-video.js')}}"></script>
  <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>

   <script src="{{asset('assets/lib/angular/controller.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
