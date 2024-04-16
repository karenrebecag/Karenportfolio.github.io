<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "mydatabase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Recibir datos del formulario
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$country = $_POST['country'];
$phoneNumber = $_POST['phoneNumber'];
$message = $_POST['message'];

// Insertar datos en la base de datos
$sql = "INSERT INTO contacts (firstName, lastName, email, country, phoneNumber, message)
VALUES ('$firstName', '$lastName', '$email', '$country', '$phoneNumber', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<!--Head---------------------------------------------------------------------------------------------------------------->
<head>
<!-- Metadata -->
    <meta charset="utf-8">
    <meta name="author" content="Karen Ortiz">
    <meta name="description" content="Karen Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title ---------------------------------------------------------------------------------------------------------------->
    <title>Karen Ortiz | Contact </title>
<!-- Favicon ---------------------------------------------------------------------------------------------------------------->
    <link rel="icon" type="image/x-icon" href="https://static.wixstatic.com/media/bc0394_39b087c92ac04872b66dcf2799cd607f~mv2.png">
<!-- Bootstrap ---------------------------------------------------------------------------------------------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Bootstrap Icons ---------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- CSS Links ---------------------------------------------------------------------------------------------------------------->
    <link href="/Styles/style.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- CSS Links ---------------------------------------------------------------------------------------------------------------->
<link href="/Styles/style.css" rel="stylesheet">
<link href="/Styles/responsive.css" rel="stylesheet">
<link href="/Styles/extra.css" rel="stylesheet">
<link href="/Styles/portfolio.css" rel="stylesheet">

<link href="/Styles/mainpage.css" rel="stylesheet">
<link href="/Styles/toggle.css" rel="stylesheet">
<link href="/Styles/project.css" rel="stylesheet">
<link href="/Styles/instagramgrid.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

<!-- Enlace a la hoja de estilo predeterminada (modo claro) -->
<link rel="stylesheet" href="/Styles/style.css" id="theme-style">
<link rel="stylesheet" href="/Styles/mainpage.css" id="mainpage-style">
<link rel="stylesheet" href="/Styles/project.css" id="project-style">
<link rel="stylesheet" href="/Styles/contact.css" id="contact-style">

<!-- Google Fonts ---------------------------------------------------------------------------------------------------------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Catamaran&family=Josefin+Sans&family=Orbitron:wght@600&family=Poppins:wght@200&family=Raleway:wght@100;200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto&display=swap" rel="stylesheet">

    <!--Extra JS Files-->
    <script src="/Scripts/scriptEffects.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
    <!--Scrollbar-->
    <!--Scrollbar-->
    <style>
      /* Estilo del scrollbar completo */
::-webkit-scrollbar {
    width: 12px; /* Ancho del scrollbar */
    height: 5px;
}

/* Estilo del track del scrollbar (la parte que "contiene" al thumb) */
::-webkit-scrollbar-track {
    background: #EEEFEE; /* Color de fondo del track del scrollbar */
}

/* Estilo del thumb del scrollbar (la parte que se mueve/arrastra) */
::-webkit-scrollbar-thumb {
    background-color: #EEEFEE; /* Color del thumb del scrollbar */
    border-radius: 4px; /* Borde redondeado del thumb */
    border: 3px solid #EEEFEE; /* Borde opcional para el thumb */
}

    </style>
    <style>
  @media (max-width: 1400px) {

.container{
  max-width: 100%;
}


.general_padding{
        padding: 0 0 0 0;
    }
.logo-header-main{
  display: none;
}}
@media (max-width: 992px) {


#miHeader{
  min-width: 100%;
}
.navbar-nav {
    flex-direction: row; /* Asegura que los elementos se alineen horizontalmente */
    justify-content: flex-start; /* Alinea los elementos al final del contenedor */
    width: 100%; /* Opcional: asegura que el contenedor ocupe todo el ancho disponible */
  }

  .nav-item {
    margin-right: 5px; /* Espaciado entre los elementos nav-item */
  }

  .navbar-collapse {
    flex-basis: auto; /* Asegura que el contenedor de collapse se ajuste al contenido */
  }

  .card_header_social {
    display: flex; /* Asegura que los elementos sociales también se alineen horizontalmente */
    justify-content: flex-end; /* Alinea los elementos sociales al final */
    width: 100%; /* Opcional: asegura que el contenedor ocupe todo el ancho disponible */
    margin-top: 15px; /* Espacio entre los nav-items y los elementos sociales */
  }

}

      @media (max-width: 820px) {
  .navbar-collapse {
    display: flex;
    flex-direction: column; /* Alinea los contenedores en vertical */
    align-items: start; /* Centra los contenedores horizontalmente */
  }

  .navbar-nav {
    flex-direction: row; /* Asegura que los nav-items estén en línea */
    justify-content: flex-start; /* Centra los nav-items horizontalmente */
    flex-wrap: wrap; /* Permite que los elementos se envuelvan si es necesario */
    width: 100%; /* Los nav-items ocuparán todo el ancho */
  }

  .nav-item {
    margin: 5px; /* Espaciado alrededor de cada nav-item */
  }

  .card_header_social {
    display: flex;
    justify-content: center; /* Centra los elementos sociales horizontalmente */
    width: 100%; /* Los elementos sociales ocuparán todo el ancho */
    margin-top: 15px; /* Espacio entre los nav-items y los elementos sociales */
    flex-wrap: wrap; /* Permite que los elementos se envuelvan si es necesario */

  }
}




@media (max-width: 820px) {
      #downloadCvButton{
        display: none;
      }}
  
      @media (max-width: 768px) {
  .bubble, #glow-input, #how_button, #cube-loader {
    display: none;
  }
}

.container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
  width: 100%;
  max-width: none;
}

p {
  margin: 0%;
}

.owl-carousel {
  max-width: 100%;
}

    
    @media (max-width: 430px) {
    
    
      .nav-item{
        position: relative;
        left: -54em;
      }
  
  
      .fade-in{
      display: none;
      }
    }
    
    </style>
</head>

<!--Hi Curious! If you wanna know more about this projects and my work, just send me a message or check my github:)----->
<!--Body---------------------------------------------------------------------------------------------------------------->
<body >

<!--NavBar-->
<header id="miHeader" >


  
  <nav class="navbar navbar-expand-md " >
  <!--Navbar Toggler-->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-toggler">

  <!--Navbar Container-->

    <div class="container-fluid">
      <div class="row">
    
       <!-- Center Column for Main Logo -->
       <div class="col-md-4 d-flex justify-content-center">
        <a style="text-decoration: none;" href="/Pages/indexmain.html">
          <h1 id="logo-header">Karen Ortiz</h1>        
        </a>
      </div>
  
      <div class="col-md-4 d-flex justify-content-center py-3">

        <div  class="button-container-header">
          <a style="text-decoration: none;" href="/Pages/indexmain.html">
          <button class="button-header">
            <h6>Home</h6>
          </button>
          </a>

          <a style="text-decoration: none;" href="/Pages/indexme.html">
          <button class="button-header">
            <h6>About</h6>
          </button>
          </a>
        
          <a style="text-decoration: none;" href="/Pages/indexcontact.html">
          <button class="button-header">
            <h6>Contact</h6>
          </button>
          </a>

          <a style="text-decoration: none;" href="/Pages/indexp.html">
            <button class="button-header">
              <h6>Portfolio</h6>
            </button>
            </a>
        </div>
        


      </div>
      
      
      

      <div id="gooey-nav-logo"></div>


      
    
 

        
        <!-- Right Column for Social Links -->
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <!-- Social Links -->
          <div class="card_header_social mx-5" >

            
            <a class="socialContainer_header_social containerOne_header_social" href="https://www.instagram.com/karenrebeca.og/?hl=es" target="_blank">
              <svg class="socialSvg_header_social twitterSvg_header_social" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30">
                <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path>
            </svg>
            </a>

            <a class="socialContainer_header_social containerTwo_header_social" href="mailto:karenrortizg@gmail.com">
                  <svg class="socialSvg_header_social twitterSvg_header_social" fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                  viewBox="0 0 378.632 378.632" xml:space="preserve">
                <path d="M377.406,160.981c-5.083-48.911-31.093-92.52-73.184-122.854C259.004,5.538,200.457-6.936,147.603,4.807
                  C97.354,15.971,53.256,48.312,26.571,93.491C-0.122,138.731-7.098,192.982,7.436,242.39c7.832,26.66,21.729,51.712,40.15,72.51
                  c18.594,20.972,41.904,37.722,67.472,48.459c23.579,9.888,48.628,14.797,73.653,14.797c34.128-0.001,68.115-9.121,97.949-27.098
                  l-21.092-35.081c-40.578,24.451-90.887,28.029-134.652,9.66c-40.283-16.96-71.759-52.383-84.211-94.761
                  c-11.336-38.595-5.846-81.093,15.125-116.586c20.922-35.467,55.426-60.801,94.622-69.533c41.644-9.225,87.948,0.669,123.857,26.566
                  c32.502,23.394,52.497,56.769,56.363,93.907c2.515,23.979,0.31,42.891-6.526,56.226c-14.487,28.192-35.526,28.36-43.873,27.132
                  c-0.283-0.041-0.476-0.082-0.65-0.117c-2.396-3.709-2.091-17.489-1.974-23.473c0.044-2.332,0.084-4.572,0.084-6.664v-112.06h-31.349
                  c-3.998-3.278-8.225-6.251-12.674-8.921c-17.076-10.159-36.858-15.552-57.255-15.552c-29.078,0-56.408,10.597-76.896,29.824
                  c-32.537,30.543-42.63,80.689-24.551,122.023c8.578,19.62,23.065,35.901,41.876,47.066c17.611,10.434,38.182,15.972,59.47,15.972
                  c24.394,0,46.819-6.735,64.858-19.492c1.915-1.342,3.813-2.79,5.626-4.233c6.431,8.805,15.811,14.4,27.464,16.114
                  c16.149,2.408,32.299-0.259,46.784-7.668c16.453-8.419,29.715-22.311,39.439-41.271C377.209,219.346,380.778,193.46,377.406,160.981
                  z M242.33,224.538c-0.891,1.283-2.229,2.907-2.961,3.803c-0.599,0.778-1.151,1.46-1.643,2.073
                  c-3.868,4.982-8.597,9.48-14.113,13.374c-11.26,7.943-25.152,11.964-41.257,11.964c-28.968,0-53.462-14.75-63.846-38.544
                  c-11.258-25.69-5.071-56.854,15.035-75.692c12.7-11.95,30.538-18.784,48.911-18.784c13.028,0,25.56,3.375,36.268,9.788
                  c6.831,4.072,12.861,9.337,17.9,15.719c0.497,0.613,1.082,1.322,1.724,2.094c0.952,1.135,2.812,3.438,3.981,5.092V224.538z"/>
                </svg>
            </a>
              
            <a class="socialContainer_header_social containerOne_header_social" href="https://www.linkedin.com/in/karen-rebeca-ortiz-gonz%C3%A1lez-b5a860282/" target="_blank">
              <svg class="socialSvg_header_social linkdinSvg_header_social" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
                <path d="M48,8H16c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8h32c4.418,0,8-3.582,8-8V16C56,11.582,52.418,8,48,8z M24,47h-5V27h5 V47z M24.029,23.009C23.382,23.669,22.538,24,21.5,24c-1.026,0-1.865-0.341-2.519-1.023S18,21.458,18,20.468 c0-1.02,0.327-1.852,0.981-2.498C19.635,17.323,20.474,17,21.5,17c1.038,0,1.882,0.323,2.529,0.969 C24.676,18.615,25,19.448,25,20.468C25,21.502,24.676,22.349,24.029,23.009z M47,47h-5V35.887C42,32.788,40.214,31,38,31 c-1.067,0-2.274,0.648-2.965,1.469S34,34.331,34,35.594V47h-5V27h5v3.164h0.078c1.472-2.435,3.613-3.644,6.426-3.652 C44.5,26.5,47,29.5,47,34.754V47z"></path>
                </svg>
            </a>

            <a class="socialContainer_header_social containerFour_header_social" href="https://github.com/karenrebecag" target="_blank">
                    <svg class="socialSvg_header_social whatsappSvg_header_social" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                    <path d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"></path>
                </svg>
            </a>

            <label class="switch">
              <input type="checkbox" id="theme-switch">
              <span class="slider"></span>
            </label>


            </div>
        </div>
    
      </div>
    </div>
    


      
  </div>

  </nav>
</header>
<div class="grain"></div>





<section id="contact-banner"  >
  <div class="main-area-content">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

    <!--Banner-->
    <section data-aos="fade-up" style="padding: 10%;">

        <div class="form-glass-background" id="opacity-enter">
            <!-- Formulario-->
            <div class="container containerPortfolio">
              <div class="row rowPortfolio" style="justify-content: center; max-width: 100%;">
                  <!-- Formulario-->
                  <div class="col-md-8 colPortfolio" >
                        
                      <div class="col-12 py-5 mx-4 colPortfolio colPortfolioLarge">   
                        <!-- Get in Touch -->                                                    
                          <div class="row">
                                <div class="col-12 mx-auto">
                                  <h1 id="about-tittle" style="text-align: center;position: relative; font-size: 5em;" class="typewriter-portfolio">
                                    Get in Touch.</h1> 
                                </div>
                          </div>
                          <div class="separador" style="margin-top: 2em;"></div> <!--purple hr--->
                          <div class="row">
                                <div style="display: flex; justify-content:start; text-align:start;" class="py-5" >
                                    <!-- You can Reach Us Anytime -->
                                    <div class="col-12 mx-auto">
                                      <p id="contact-form-paragraph" style="text-align: center; font-size: 2.5em;" class="degradado">You can reach me anytime</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                      
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <!-- Name -->
                    <div class="row mb-3">
                        <div class="col">
                          <label>Name:</label>
                          <input type="text" class="form-control" placeholder="Enter name here" requiered id="firstName" name="firstName">
                        </div>
                        <div class="col">
                          <label>Last Name:</label>
                          <input type="text" class="form-control" placeholder="Enter last name here" id="lastName" name="lastName">
                        </div>
                    </div>
                    <!-- Email field row -->
                    <div class="row mb-3">
                      <div class="col-12">
                        <label>Email:</label>
                        <div class="input-group">
                          <span class="input-group-text">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <g stroke-width="0"></g>
                              <g stroke-linecap="round" stroke-linejoin="round"></g>
                              <g>
                                <path d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="#d1d1d1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </g>
                            </svg>
                          </span>
                          
                          <input type="email" class="form-control" placeholder="emailme@example.com" id="email" name="email" required >
                        </div>
                      </div>
                    </div>
          
                    <!-- Ladas -->
                    <div class="row mb-3">
                      <div class="col-4">
                          <label>Country:</label>
                          <select style="font-size: 1.1em;" class="form-select" id="country" name="country" required>
                              <option value="" selected>Choose Country</option>
                                          <option value="+93">Afghanistan +93</option>
                                          <option value="+355">Albania +355</option>
                                          <option value="+213">Algeria +213</option>
                                          <option value="+376">Andorra +376</option>
                                          <option value="+244">Angola +244</option>
                                          <option value="+1-268">Antigua and Barbuda +1-268</option>
                                          <option value="+54">Argentina +54</option>
                                          <option value="+374">Armenia +374</option>
                                          <option value="+61">Australia +61</option>
                                          <option value="+43">Austria +43</option>
                                          <option value="+994">Azerbaijan +994</option>
                                          <option value="+1-242">Bahamas +1-242</option>
                                          <option value="+973">Bahrain +973</option>
                                          <option value="+880">Bangladesh +880</option>
                                          <option value="+1-246">Barbados +1-246</option>
                                          <option value="+375">Belarus +375</option>
                                          <option value="+32">Belgium +32</option>
                                          <option value="+501">Belize +501</option>
                                          <option value="+229">Benin +229</option>
                                          <option value="+975">Bhutan +975</option>
                                          <option value="+591">Bolivia +591</option>
                                          <option value="+387">Bosnia and Herzegovina +387</option>
                                          <option value="+267">Botswana +267</option>
                                          <option value="+55">Brazil +55</option>
                                          <option value="+673">Brunei +673</option>
                                          <option value="+359">Bulgaria +359</option>
                                          <option value="+226">Burkina Faso +226</option>
                                          <option value="+257">Burundi +257</option>
                                          <option value="+238">Cabo Verde +238</option>
                                          <option value="+855">Cambodia +855</option>
                                          <option value="+237">Cameroon +237</option>
                                          <option value="+1">Canada +1</option>
                                          <option value="+236">Central African Republic +236</option>
                                          <option value="+235">Chad +235</option>
                                          <option value="+56">Chile +56</option>
                                          <option value="+86">China +86</option>
                                          <option value="+57">Colombia +57</option>
                                          <option value="+269">Comoros +269</option>
                                          <option value="+243">Congo (Democratic Republic of the) +243</option>
                                          <option value="+242">Congo (Republic of the) +242</option>
                                          <option value="+506">Costa Rica +506</option>
                                          <option value="+385">Croatia +385</option>
                                          <option value="+53">Cuba +53</option>
                                          <option value="+357">Cyprus +357</option>
                                          <option value="+420">Czech Republic +420</option>
                                          <option value="+45">Denmark +45</option>
                                          <option value="+253">Djibouti +253</option>
                                          <option value="+1-767">Dominica +1-767</option>
                                          <option value="+1-809">Dominican Republic +1-809</option>
                                          <option value="+593">Ecuador +593</option>
                                          <option value="+20">Egypt +20</option>
                                          <option value="+503">El Salvador +503</option>
                                          <option value="+240">Equatorial Guinea +240</option>
                                          <option value="+291">Eritrea +291</option>
                                          <option value="+372">Estonia +372</option>
                                          <option value="+268">Eswatini +268</option>
                                          <option value="+251">Ethiopia +251</option>
                                          <option value="+679">Fiji +679</option>
                                          <option value="+358">Finland +358</option>
                                          <option value="+33">France +33</option>
                                          <option value="+241">Gabon +241</option>
                                          <option value="+220">Gambia +220</option>
                                          <option value="+995">Georgia +995</option>
                                          <option value="+49">Germany +49</option>
                                          <option value="+233">Ghana +233</option>
                                          <option value="+30">Greece +30</option>
                                          <option value="+1-473">Grenada +1-473</option>
                                          <option value="+502">Guatemala +502</option>
                                          <option value="+224">Guinea +224</option>
                                          <option value="+245">Guinea-Bissau +245</option>
                                          <option value="+592">Guyana +592</option>
                                          <option value="+509">Haiti +509</option>
                                          <option value="+504">Honduras +504</option>
                                          <option value="+36">Hungary +36</option>
                                          <option value="+354">Iceland +354</option>
                                          <option value="+91">India +91</option>
                                          <option value="+62">Indonesia +62</option>
                                          <option value="+98">Iran +98</option>
                                          <option value="+964">Iraq +964</option>
                                          <option value="+353">Ireland +353</option>
                                          <option value="+972">Israel +972</option>
                                          <option value="+39">Italy +39</option>
                                          <option value="+225">Ivory Coast +225</option>
                                          <option value="+1-876">Jamaica +1-876</option>
                                          <option value="+81">Japan +81</option>
                                          <option value="+962">Jordan +962</option>
                                          <option value="+7">Kazakhstan +7</option>
                                          <option value="+254">Kenya +254</option>
                                          <option value="+686">Kiribati +686</option>
                                          <option value="+965">Kuwait +965</option>
                                          <option value="+996">Kyrgyzstan +996</option>
                                          <option value="+856">Laos +856</option>
                                          <option value="+371">Latvia +371</option>
                                          <option value="+961">Lebanon +961</option>
                                          <option value="+266">Lesotho +266</option>
                                          <option value="+231">Liberia +231</option>
                                          <option value="+218">Libya +218</option>
                                          <option value="+423">Liechtenstein +423</option>
                                          <option value="+370">Lithuania +370</option>
                                          <option value="+352">Luxembourg +352</option>
                                          <option value="+853">Macao +853</option>
                                          <option value="+389">Macedonia +389</option>
                                          <option value="+261">Madagascar +261</option>
                                          <option value="+60">Malaysia +60</option>
                                          <option value="+265">Malawi +265</option>
                                          <option value="+960">Maldives +960</option>
                                          <option value="+223">Mali +223</option>
                                          <option value="+356">Malta +356</option>
                                          <option value="+212">Morocco +212</option>
                                          <option value="+596">Martinique +596</option>
                                          <option value="+230">Mauritius +230</option>
                                          <option value="+222">Mauritania +222</option>
                                          <option value="+262">Mayotte +262</option>
                                          <option value="+52">Mexico +52</option>
                                          <option value="+691">Micronesia +691</option>
                                          <option value="+373">Moldova +373</option>
                                          <option value="+377">Monaco +377</option>
                                          <option value="+976">Mongolia +976</option>
                                          <option value="+382">Montenegro +382</option>
                                          <option value="+1-664">Montserrat +1-664</option>
                                          <option value="+258">Mozambique +258</option>
                                          <option value="+95">Myanmar +95</option>
                                          <option value="+264">Namibia +264</option>
                                          <option value="+674">Nauru +674</option>
                                          <option value="+977">Nepal +977</option>
                                          <option value="+505">Nicaragua +505</option>
                                          <option value="+227">Niger +227</option>
                                          <option value="+234">Nigeria +234</option>
                                          <option value="+683">Niue +683</option>
                                          <option value="+47">Norway +47</option>
                                          <option value="+687">New Caledonia +687</option>
                                          <option value="+64">New Zealand +64</option>
                                          <option value="+968">Oman +968</option>
                                          <option value="+31">Netherlands +31</option>
                                          <option value="+92">Pakistan +92</option>
                                          <option value="+680">Palau +680</option>
                                          <option value="+970">Palestine +970</option>
                                          <option value="+507">Panama +507</option>
                                          <option value="+675">Papua New Guinea +675</option>
                                          <option value="+595">Paraguay +595</option>
                                          <option value="+51">Peru +51</option>
                                          <option value="+689">French Polynesia +689</option>
                                          <option value="+48">Poland +48</option>
                                          <option value="+351">Portugal +351</option>
                                          <option value="+1-787">Puerto Rico +1-787</option>
                                          <option value="+974">Qatar +974</option>
                                          <option value="+262">Réunion +262</option>
                                          <option value="+40">Romania +40</option>
                                          <option value="+7">Russia +7</option>
                                          <option value="+250">Rwanda +250</option>
                                          <option value="+290">Saint Helena +290</option>
                                          <option value="+1-869">Saint Kitts and Nevis +1-869</option>
                                          <option value="+1-758">Saint Lucia +1-758</option>
                                          <option value="+508">Saint Pierre and Miquelon +508</option>
                                          <option value="+1-784">Saint Vincent and the Grenadines +1-784</option>
                                          <option value="+685">Samoa +685</option>
                                          <option value="+378">San Marino +378</option>
                                          <option value="+239">São Tomé and Príncipe +239</option>
                                          <option value="+966">Saudi Arabia +966</option>
                                          <option value="+221">Senegal +221</option>
                                          <option value="+381">Serbia +381</option>
                                          <option value="+248">Seychelles +248</option>
                                          <option value="+232">Sierra Leone +232</option>
                                          <option value="+65">Singapore +65</option>
                                          <option value="+421">Slovakia +421</option>
                                          <option value="+386">Slovenia +386</option>
                                          <option value="+677">Solomon Islands +677</option>
                                          <option value="+252">Somalia +252</option>
                                          <option value="+27">South Africa +27</option>
                                          <option value="+82">South Korea +82</option>
                                          <option value="+211">South Sudan +211</option>
                                          <option value="+34">Spain +34</option>
                                          <option value="+94">Sri Lanka +94</option>
                                          <option value="+249">Sudan +249</option>
                                          <option value="+597">Suriname +597</option>
                                          <option value="+47">Svalbard and Jan Mayen +47</option>
                                          <option value="+268">Swaziland +268</option>
                                          <option value="+46">Sweden +46</option>
                                          <option value="+41">Switzerland +41</option>
                                          <option value="+963">Syria +963</option>
                                          <option value="+886">Taiwan +886</option>
                                          <option value="+992">Tajikistan +992</option>
                                          <option value="+255">Tanzania +255</option>
                                          <option value="+66">Thailand +66</option>
                                          <option value="+670">Timor-Leste +670</option>
                                          <option value="+228">Togo +228</option>
                                          <option value="+690">Tokelau +690</option>
                                          <option value="+676">Tonga +676</option>
                                          <option value="+1-868">Trinidad and Tobago +1-868</option>
                                          <option value="+216">Tunisia +216</option>
                                          <option value="+90">Turkey +90</option>
                                          <option value="+993">Turkmenistan +993</option>
                                          <option value="+1-649">Turks and Caicos Islands +1-649</option>
                                          <option value="+688">Tuvalu +688</option>
                                          <option value="+256">Uganda +256</option>
                                          <option value="+380">Ukraine +380</option>
                                          <option value="+971">United Arab Emirates +971</option>
                                          <option value="+44">United Kingdom +44</option>
                                          <option value="+1">United States +1</option>
                                          <option value="+598">Uruguay +598</option>
                                          <option value="+998">Uzbekistan +998</option>
                                          <option value="+678">Vanuatu +678</option>
                                          <option value="+39">Vatican City +39</option>
                                          <option value="+58">Venezuela +58</option>
                                          <option value="+84">Vietnam +84</option>
                                          <option value="+681">Wallis and Futuna +681</option>
                                          <option value="+212">Western Sahara +212</option>
                                          <option value="+967">Yemen +967</option>
                                          <option value="+260">Zambia +260</option>
                                          <option value="+263">Zimbabwe +263</option>
                                                          
                                </select>
                              </div>
                              <div class="col-8">
                                <label>Phone number:</label>
                                <input style="border-radius: 0 15px 15px 0;" type="tel" class="form-control" id="phoneNumber" name="phoneNumber" requiered placeholder="Phone number">
                            </div>
                    </div>
                    <!-- Message textarea row -->
                    <div class="row mb-3">
                      <div class="col-12">
                        <label>Message:</label>
                        <textarea class="form-control" id="message" name="message" required placeholder="How can I help?" rows="4"></textarea>
                      </div>
                    </div>
                    <!-- Submit button row -->
                    <div class="row mb-3">
                      <div class="col-12 py-3" >
                        <button class="button-portfolio" type="submit" style="width: 100%; display: block;">Submit</button>
                      </div>
                      
                    </div>

                  </form>
                            <!-- Terms text row -->
                    <div class="row">
                      <div class="col-12 text-center">
                        <p class="terms-text-form" style="font-size: 1.2em;">
                          By contacting us, you agree to our <a class="href-terms" href="termsofservice.html">Terms of service</a> and <a class="href-terms" href="termsofservice.html#policy">Privacy Policy</a>
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
                  
            <!-- segundo container macro -->
            <div class="col-12 colPortfolio px-5 py-5">


              
              <div class="row py-5" >
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 " style="text-align: center;">
                  <h3  id="paragraph-tittle-contact" >Customer Support</h3>
                  <p id="paragraph-contact">Our support team is available
                    around the clock to address any
                    concerns or queries you may
                    have.</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4  " style="text-align: center;">
                  <h3  id="paragraph-tittle-contact">Feedback & Suggestions</h3>
                  <p id="paragraph-contact">We value your feedback and are
                    continuously working to improve
                    Snappy. Your input is crucial in
                    shaping the future of Snappy.</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 " style="text-align: center;">
                  <h3  id="paragraph-tittle-contact">Media Inquiries</h3>
                  <p id="paragraph-contact">For media-related questions or
                    press inquiries, please contact us
                    at media@snappyapp.com.</p>
                </div>
              </div>
            </div>

        </div>
        
    </section>












<div id="gooey2"></div>
<div id="gooey3"></div>


<!--Footer---------------------------------------------------------------------------------------------------------------->
<footer class="foot mx-5" style="margin-top: em;" > 
  
   
  
    
  <!--logo-->
      <div class="container text-start">
          <div class="row align-items-start">
              <div  data-aos="fade-up " class="col-2" style="position: relative; left: -4px;">
                  <a class="navbar-brand" href="/Pages/indexmain.html">
                    <h1 id="logo-header">Karen Ortiz</h1>        </a>  
              </div>
          </div>
      </div>
            
  
  <!--left footer's columns-->
        <div class="container text-start">
     <div class="row align-items-start">
        <div class="col py-5">
              <h6> <b>Address</b> </h6>
              <h6>Cuernavaca,</h6>
              <h6>Morelos, México </h6>
              <h6> <b>   Contact </b> </h6>
              <h6>   karen.ortizg@yahoo.com</h6>
              <h6>   Over this webpage's chat</h6>
        </div>
  
     <div class="col search-col my-4">
              <p></p>
              <p></p>
              <h6>Search:</h6>
              <a href="/Pages/indexmain.html#top" style="font-style: inherit;" class="foot_buttons">Top</a><br>
              <a href="/Pages/indexmain.html#about" style="font-style: inherit;" class="foot_buttons">About</a><br>
              <a href="/Pages/indexmain.html#tools" class=" foot_buttons">Tools</a><br>
              <a href="/Pages/indexp.html" class=" foot_buttons">Portfolio</a><br>
              <a href="/Pages/indexmain.html#reviews" class=" foot_buttons">Reviews</a><br>
              <a href="/Pages/indexhow.html#contact" class=" foot_buttons">Contact</a><br>
              
      </div>
            
          <div class="col text-end karen-ortiz-footer pic_foot">
            <img id="videoElement" src="https://static.wixstatic.com/media/bc0394_24f8010bd4b941658c505b94d842ac27~mv2.png" height="120px" width="120px" style="border-radius: 80px;">
          </div>
          
      </div>
        </div>
  
        <!--social icons-->
            <div  class="container text-start soc_foot" style="margin-top: -25px;">
              <div class="row align-items-start">
                <div class="col-12">
                  <div class="social-icons">
                    <a href="https://www.instagram.com/karenrebeca.og/?hl=es" target="_blank"><img src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_36,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/01c3aff52f2a4dffa526d7a9843d46ea.png" alt="instagram" style="padding:25%"></a>
                    <a href="https://www.linkedin.com/in/karen-rebeca-ort%C3%ADz-b5a860282/" target="_blank"><img src="https://static.wixstatic.com/media/6ea5b4a88f0b4f91945b40499aa0af00.png/v1/fill/w_36,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/6ea5b4a88f0b4f91945b40499aa0af00.png" alt="linkedin" style="padding:25%"></a>
                    <a href="https://github.com/karenrebecag" target="_blank"><img src="https://static.wixstatic.com/media/11062b_138b4018ea8244fcb5137cb0e98361f3~mv2.png/v1/fill/w_36,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_138b4018ea8244fcb5137cb0e98361f3~mv2.png" alt="github" style="padding:25%"></a>
                    <a href="https://discord.gg/YPfNs76n" target="_blank"><img src="https://static.wixstatic.com/media/11062b_f642c87820384bd6b2a7c95d10b73a22~mv2.png/v1/fill/w_36,h_36,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/11062b_f642c87820384bd6b2a7c95d10b73a22~mv2.png"  alt="discord" style="padding:25%"></a>
                      
                      <div class="container text-center">
                        <div class="row align-items-center">
  
                        <div class="col-12"></div>
                    
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                        <div class="col"></div>
                  </div>
                        <div class="col"></div>
                </div>
                        <div class="col"></div>
              
                        <div class="col"></div>
                        <div class="col"></div>
                  
                        <div class="col"></div>
                        <div class="col"></div>
              
                        <div class="col"></div>
      
  
                        <hr style="color: white;"><!--Section Separator -->
  <!--hedgehog-->
    <section id="hegehog-gif"> 
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center">
            <img id="videoElement" src="https://static.wixstatic.com/media/bc0394_34c638f1286d4574895a6185059d2a38~mv2.gif" alt="hedgy" class="hedgy">            
          </div>
        </div>
        
  
        <div class="row">
          <div class="col d-flex justify-content-center">
            © 2023 Karen Ortiz /  Designed and programmed by me:)
          </div>
        </div>
      </div>
    
    <div class="row mt-3 mx-auto justify-content-center">
      <div class="col-auto">
        <a href="/Pages/indexhow.html" style="text-decoration: none;">
  
          <button id="how_button" class="button-io" style="font-size: medium; width: 280px; padding: 0 10px 0 10px; margin-bottom: 2em;">
            <span>How did I make this webpage? &#x1F680;</span>
          </button>
        </a>
      </div>
    </div>
    
    </section>
    
</footer>
  

<!--Additional Links (WA, Script)---------------------------------------------------------------------------------------------------------------->
  <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <!--Initiate AOS---------------------------------------------------------------------------------------------------------------->
    <script>
    AOS.init();
    </script>

    <!--linked JS Files-->
    <script src="/Scripts/main.js"></script>
    <script src="/Scripts/mainjsport.js"></script>
    <script src="/Scripts/header.js"></script>
    <script src="/Scripts/elem.js"></script>

    <script src="/Scripts/cursor2.js"></script>    


    <div class="custom-cursor2" id="customCursor2" style="color: white;"> < > </div>

  </div>

  <!--Opacity Enter-->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
  const element = document.getElementById('opacity-enter');
  if (element) {
    element.style.opacity = 1; // Cambia la opacidad a 100% al cargar
  }
});

  </script>
  <!--Dark Mode-->
<script src="/Scripts/darkmode6.js"></script>
    
<script src="/Scripts/number.js"></script>
    

</body>
</html>




