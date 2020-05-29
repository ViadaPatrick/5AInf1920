<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registrazione Alunno</title>
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
  <script src="vendor/jquery/jquery-3.4.1.js"></script>

  <script>
    $(document).ready(function(){
		function messaggioErrore(messaggio){
			alert(messaggio);
		}

        


        $("#btnRegistrati").click(function(){/*
                        email = $("#txtEmail").val();
						domainName = email.split('@');*/
                    if($("#txtPassword").val() != $("#txtConfermaPassword").val()){
						messaggioErrore("errore nei campi");
                    }else{
                        var parametri = "txtNomeUtente=" + $("#txtNomeUtente").val() + 
                                        "&txtEmail=" + $("#txtEmail").val() +
                                        "&txtCF=" + $("#txtCF").val() + 
                                        "&txtPassword=" + $("#txtPassword").val();
                        link = "jsonRegistraUtente.php?" + parametri;
                        console.log(link);
                        $.get(link, function(data, status){
                            if(data == 1){
                                alert("utente registrato");
                            }
                        });
						
                        
                    }
					

                });
    });
  </script>


  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
            <a class="nav-link js-scroll active" href="inserisci.html">Inserimento</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="info.html">Info</a>
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
  <div id="home" class="intro route bg-image" style="background-image: url(inserimento.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Registrazione</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Classifiche aggiornate,Inserimento dati personali,e tanto altro</span><strong class="text-slider"></strong></p>
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
                
                    <!-- inizio-->
                    <div class="col-sm-12">
                        <div class="title-box-2">
                    <h5 class="title-left">
                      Registrazione
                    </h5>
                    </div>

                      <form class="form-group">
                                <!-- Text input primoLavoro-->
                            <div class="form-group">
                                <label class="control-label" for="primoLavoro">Nome Utente</label>  
                                <input id="txtNomeUtente" required type="text" placeholder="nome utente" class="form-control input-md">
                                </div>

                                <!-- Text input primoLavoro-->
                            <div class="form-group">
                                <label class="control-label" for="primoLavoro">Email scolastica</label>  
                                <input id="txtEmail"  type="email" pattern=".+@itiscuneo.eu" required placeholder="nome.cognome@itiscuneo.eu" class="form-control input-md">
                                </div>

                                <!-- Text input primoLavoro-->
                            <div class="form-group">
                                <label class="control-label" for="primoLavoro">Codice Fiscale</label>  
                                <input id="txtCF"  type="text" required size="16" placeholder="codice fiscale" class="form-control input-md">
                                </div>

                                <!-- Text input primoLavoro-->
                            <div class="form-group">
                                <label class="control-label" for="primoLavoro">Password</label>  
                                <input id="txtPassword"  type="password" placeholder="password" class="form-control input-md">
                                </div>


                                <!-- Text input primoLavoro-->
                            <div class="form-group">
                                <label class="control-label" for="primoLavoro">Conferma Password</label>  
                                <input id="txtConfermaPassword"  type="password" placeholder="conferma password" class="form-control input-md">
                                </div>

                                <div>
                                    <font color="red" id="messaggioErrore"></font>
                                </div>

                                Sei già registrato? <a href="login.php">Accedi ora</a>

                             

                                <!-- Button -->
                            <div class="form-group">
                                <label class="control-label" for="aggiungiDati"></label>
                                <div class="col-md-12">
                                    <span class="pull-right">
                                        <button id="btnRegistrati" class="btn btn-primary">Registrati</button>
                                    </span>
                                </div>
                                </div>

                            </form>


                        </div>
                    <!-- fine-->
                        


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--/ End About /-->



    <!--/ End About /-->

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
