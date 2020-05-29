<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tabella diplomati</title>
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

    <!-- javaScript -->
    <script src="vendor/jquery/jquery-3.4.1.js">
        </script>

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <script type="application/javascript">
            //attendo che sia caricata la pagina
            $(document).ready(function(){
                

                function caricaTabella(data){
                        //parsifichiamo il json
                        diplomati = JSON.parse(data);

                        //controllo sul json
                        if(diplomati.length == 0){
                            //stampo che è vuoto
                            $("#tblDiplomati").html("<tr><td>nessun diplomato</td></tr>");
                        }else{
                            //inserisco nella tabella i dati
                            $("#tblDiplomati").html("<tr><th>NOME</th><th>COGNOME</th><th>CODICE FISCALE</th><th>SEZIONE</th><th>INDIRIZZO</th><th>ANNO DIPLOMA</th><th>VOTO DIPLOMA</th></tr>");
                            //ciclo for che scorre tutti i diplomati
                            for(contDiplomati = 0; contDiplomati < diplomati.length; contDiplomati++){
                                //dichiaro la riga
                                var tr = $("<tr></tr>");
                                //dichiaro le colonne
                                var nome = diplomati[contDiplomati].nome;
                                var cognome = diplomati[contDiplomati].cognome;
                                var codiceFiscale = diplomati[contDiplomati].codiceFiscale;
                                var sezione = diplomati[contDiplomati].sezione;
                                var indirizzo = diplomati[contDiplomati].indirizzo;
                                var annoDiploma = diplomati[contDiplomati].annoDiploma;
                                var votoDiploma = diplomati[contDiplomati].votoDiploma;

                                //appendo sulla riga
                                tr.append($("<td>" + nome + "</td><td>" + cognome + "</td><td>" + codiceFiscale + "</td><td>" + sezione + "</td><td>" + indirizzo + "</td><td>" + annoDiploma + "</td><td>" + votoDiploma + "</td><td><button class=\"btn btn-primary\" onclick=\"myFunction(this.id)\" type=\"button\" id=\"" + codiceFiscale + "\">Dettagli</button></td>"));

                                //append sulla tabella
                                $("#tblDiplomati").append(tr);
                            }
                        }
                }

                    //definiamo il link del file della chiamata per la lettura del db
                    var link = "jsonDiplomati.php";
                    //vettore che contiene i diplomati
                    var diplomati;
                    //facciamo la chiamata sul link, passando il link e la relativa funzione contenente i dati ricevuti
                    $.get(link, function(data, status){
                        //stampo il json
                        //console.log(data);
                        caricaTabella(data);
                    });

                $("#btnFiltra").click(function(){
                    //scrivo i parametri dell'url
                    var parametri = "txtCodiceFiscale=" + $("#txtCodiceFiscale").val() + "&txtIndirizzo=" + $("#txtIndirizzo").val();
                    link = "jsonFiltraDiplomati.php?" + parametri;
                    console.log(link);
                    console.log("entrato nella gestione eventi btnFiltra");
                    var diplomati;

                    $.get(link, function(data, status){
                        //console.log(data);
                        caricaTabella(data);
                    });
                });

                $("button").click(function(){
                        var id = (this.id);
                        alert("cliccato");
                });

                $("#btnOrdina").click(function(){
                    //scrivo i parametri dell'url
                    var parametri = "txtCodiceFiscale=" + $("#txtCodiceFiscale").val() + "&txtIndirizzo=" + $("#txtIndirizzo").val() + "&orderBy=" + $("#cmbOrdina").val();
                    link = "jsonOrdinaDiplomati.php?" + parametri;
                    console.log(link);
                    console.log("entrato nella gestione eventi btnOrdina");
                    var diplomati;

                    $.get(link, function(data, status){
                        //console.log(data);
                        caricaTabella(data);
                    });
                });
            });

        </script>
            

        <script>
            function myFunction(id) {
                console.log(id);
                link = "dettaglidiplomato.php?txtCodiceFiscale=" + id;
                window.location= link;
            }
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
            <a class="nav-link js-scroll" href="info.html">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="diplomati.php">Diplomati</a>
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
  <div id="home" class="intro route bg-image" style="background-image: url(diplomati.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">VISUALIZZAZIONE DIPLOMATI</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Diplomati ITIS Delpozzo, Tabella dei diplomati</span><strong class="text-slider"></strong></p>
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
                   <form name="formDiplomati" id="formDiplomati">
                    <div class="form-group input-group">
                        <input type="text" id="txtCodiceFiscale" class="form-control" placeholder="Codice Fiscale">
                        <input type="text" id="txtIndirizzo" class="form-control" placeholder="Indirizzo">
                        <input type="button" id="btnFiltra" class="btn btn-secondary form-control" value="Filtra"><br>
                    </div>
                    <div class="form-group input-group">
                        <select id="cmbOrdina" class="form-control" required>
                            <option value="OrderByAnnoASC">Anno Diploma Crescente</option>
                            <option value="OrderByAnnoDESC">Anno Diploma Decrescente</option>
                            <option value="OrderByVotoASC">Voto Diploma Crescente</option>
                            <option value="OrderByVotoDESC">Voto Diploma Decrescente</option>
                        </select>
                        <input type="button" id="btnOrdina" class="btn btn-secondary form-control" value="Ordina">
                    </div>
                </form>

                

                <div class="col-sm-12">
                <table id="tblDiplomati" class="table table-hover">


                </table>
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
