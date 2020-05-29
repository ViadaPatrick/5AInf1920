<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dettagli diplomato</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <!-- javaScript -->
    <script src="vendor/jquery/jquery-3.4.1.js">
        </script>

  <script type="application/javascript">
            //attendo che sia caricata la pagina
            $(document).ready(function(){
                let searchParams = new URLSearchParams(window.location.search)
                //console.log(searchParams.get('txtCodiceFiscale'));
                    link = "jsonFiltraDiplomati.php?txtCodiceFiscale=" + searchParams.get('txtCodiceFiscale') + "&txtIndirizzo=";
                    console.log(link);
                    $.get(link, function(data, status){
                        //parsifichiamo il json
                        diplomato = JSON.parse(data);
                        console.log(diplomato);
                        console.log("cf");
                        console.log(diplomato[0].codiceFiscale);
                        document.getElementById("idNome").innerHTML = diplomato[0].nome;
                        document.getElementById("idCognome").innerHTML = diplomato[0].cognome;
                        document.getElementById("idCodiceF").innerHTML = diplomato[0].codiceFiscale;
                        document.getElementById("idSezione").innerHTML = diplomato[0].sezione;
                        document.getElementById("idIndirizzo").innerHTML = diplomato[0].indirizzo;
                        document.getElementById("idAnno").innerHTML = diplomato[0].annoDiploma;
                        document.getElementById("idVoto").innerHTML = diplomato[0].votoDiploma;
                        document.getElementById("idPrimoLavoro").innerHTML = diplomato[0].primoLavoro;
                        document.getElementById("idPrimoStipendio").innerHTML = diplomato[0].primoStipendio;
                        document.getElementById("idAttualeLavoro").innerHTML = diplomato[0].lavoroAttuale;
                        document.getElementById("idAttualeStipendio").innerHTML = diplomato[0].attualeStipendio;
                        document.getElementById("idNote").innerHTML = diplomato[0].note;
                        document.getElementById("idBiografia").innerHTML = diplomato[0].biografia;
                    });
            });

        </script>
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">ITIS DIPLOMATI CUNEO</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link js-scroll" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="inserisci.html">Inserimento</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll " href="info.html">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="diplomati.php">Diplomati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="classifica.html">Classifica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll " href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(info.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">DETTAGLI DIPLOMATO SELEZIONATO</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Cerca...,Scopri...,Contatta!</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->  
  
  <!--/ About /-->
  <section id="about1" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="https://media.istockphoto.com/vectors/student-icon-vector-graduation-with-mortar-board-for-school-college-vector-id910041444?k=6&m=910041444&s=170667a&w=0&h=ETXhbw6vCvOS7X9QDC12tSgIJpmodRQechlwThjKpi8=" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    
                  </div>
                </div>
                <div class="skill-mf">
                    <div class="about-info">
                      <p><span class="title-s">Nome: </span> <span id="idNome">Inserire nome</span></p>
                      <p><span class="title-s">Cognome: </span> <span id="idCognome">Inserire cognome</span></p>
                      <p><span class="title-s">Codice fiscale: </span> <span id="idCodiceF">XXXXXXXXXXXX</span></p>
                      <p><span class="title-s">Sezione: </span> <span id="idSezione" >A/B/C</span></p>
                      <p><span class="title-s">Indirizzo: </span> <span id="idIndirizzo" >Info/Chi/Mec/Ele</span></p>
                      <p><span class="title-s">Anno diploma: </span> <span id="idAnno" >Inserire anno</span></p>
                      <p><span class="title-s">Voto diploma: </span> <span id="idVoto" >Inserire voto</span></p>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Informazioni aggiuntive...
                    </h5>
                  </div>
                  <p><span class="title-s">Primo lavoro: </span>
                  <p class="lead" id="idPrimoLavoro">
                    Info primo lavoro
                  </p>
                  <p><span class="title-s" >Primo stipendio: </span>
                  <p class="lead" id="idPrimoStipendio" >
                    Info primo stipendio
                  </p>
                  <p><span class="title-s">Attuale lavoro: </span>
                  <p class="lead" id="idAttualeLavoro" >
                    Info attuale lavoro
                  </p>
                  <p><span class="title-s">Attuale stipendio: </span>
                  <p class="lead" id="idAttualeStipendio" >
                    Info attuale stipendio
                  </p>
                  <p><span class="title-s">Note: </span>
                  <p class="lead" id="idNote" >
                    Annotazione dallo studente
                  </p>
                  <p><span class="title-s">Biografia: </span>
                  <p class="lead" id="idBiografia" >
                    Biografia studente in cui inserisce la mail e i contatti
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--/ End About /-->





    <!--/ About /-->




  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
