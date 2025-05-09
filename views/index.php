<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Esperança</title>
    <!-- Importando Materialize e Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

   
  <!-- Navbar -->
<nav class="light-blue lighten-5">
    <div class="nav-wrapper container">

        <a href="index.php" class="brand-logo ms-0"> 
            <img src="../img/logo.png" class="logo" alt="Logo" width="150" height="50" style="margin-top: 10px;">
        </a>
        <!-- Ícone do menu para telas pequenas -->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>
        <!-- Links para telas grandes -->
        <ul class="right hide-on-med-and-down">
            <li><a class="black-text" href="index.php">Home</a></li>
            <li><a class="black-text" href="departamento/departamento.php">Médicos</a></li>
            <li><a class="black-text" href="agendamento/agendamento.php">Agendamentos</a></li>
            <li><a class="black-text" href="eventos/eventos.php">Pesquisa</a></li>
        </ul>
    </div>
</nav>

<!-- Menu lateral para dispositivos móveis -->
<ul class="sidenav" id="mobile-demo">
    <li><a class="black-text" href="index.php">Home</a></li>
    <li><a class="black-text" href="departamento/departamento.php">Médicos</a></li>
    <li><a class="black-text" href="agendamento/agendamento.php">Agendamentos</a></li>
    <li><a class="black-text" href="eventos/eventos.php">Pesquisa</a></li>
</ul>

<!-- Banner -->
<div class="swiper mySwiper responsivo1">
    <div class="swiper-wrapper">
      <div class="swiper-slide responsivo2"><img src="../img/banner4.png" alt="Slide 1" class="w-100"></div>
      <div class="swiper-slide responsivo2"><img src="../img/banner.png" alt="Slide 3" class="w-100"></div>
      <div class="swiper-slide responsivo2"><img src="../img/banner3.png" alt="Slide 3" class="w-100"></div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>


    <div class="container pt-3">

        <!-- Serviços -->
        <h4 class="center display-4">Serviços</h4>
        <div class="row">
        <div class="swiper mySwiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide"> <!-- Card 1 -->
            <div class="">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/Card1.jpeg" alt="Consulta Médica">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Consulta Médica</span>
                        <p>Consultas especializadas para cuidar da sua saúde.</p>
                    </div>
                </div>
            </div></div>
      <div class="swiper-slide"> <!-- Card 2 -->
      <div class="">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/Card2.jpeg" alt="Exames de Imagem">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Exames de Imagem</span>
                        <p>Tecnologia de ponta para diagnósticos precisos.</p>
                    </div>
                </div>
            </div></div>
      <div class="swiper-slide"><!-- Card 3 -->
      <div class="">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/Card3.jpeg" alt="Cirurgia Ambulatorial">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Cirurgia Ambulatorial</span>
                        <p>Procedimentos seguros realizados por especialistas.</p>
                    </div>
                </div>
            </div></div>
      <div class="swiper-slide"><!-- Card 4 -->
      <div class="">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/Card4.jpeg" alt="Terapias Integrativas">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Terapias Integrativas</span>
                        <p>Tratamentos complementares para seu bem-estar.</p>
                    </div>
                </div>
            </div></div>
            <div class="swiper-slide"><!-- Card 5 -->
      <div class="">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/Card5.jpeg" alt="Terapias Integrativas">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Profissionais Qualificados</span>
                        <p>Altamente inidividuais para seu bem-estar e o de sua familia.</p>
                    </div>
                </div>
            </div></div>
    </div>
    <br>
    <div class="swiper-pagination"></div>
  </div>
          
            
        </div>
    </div>
    <br>
    <!-- Banner 2 -->
    <div class="d-flex justify-content-center">
        <img src="../img/banner2.png" alt="Banner da Clínica Esperança" class="w-100">
    </div>

    <!-- Novidades -->
    <div class="container my-4">
        <h4 class="center display-4">Novidades</h4>
        <div class="row justify-content-center g-4">

            <!-- Card 1 -->
            <div class="col-md-4 m-5 ">
                <div class="card text-center" style="width: 25rem;">
                    <img src="../img/Card7.jpeg " class="card-img-top" alt="Avanços da medicina ">
                    <div class="card-body">
                        <h5 class="card-title">Avanços na Medicina 🧑‍⚕️ </h5>
                        <p class="card-text">Saiba mais sobre as últimas inovações que melhoram a saúde. </p>
                        
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 m-5">
                <div class="card text-center" style="width: 25rem;">
                    <img src="../img/Card6.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Novo atendimento online 💻</h5>
                        <p class="card-text">Agora você pode consultar nossos médicos sem sair de casa.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    
<footer class="page-footer light-blue lighten-5">
    <div class="container center">
        <div class="col l6 s12">
            <a href="index.html" class="brand-logo "> <img src="../img/logo.png" class="logo" alt="Logo" width="150"
                    height="50" style="margin-top: 10px;"></a>
        </div>
        <div class="d-flex flex-rown justify-content-center">
            <ul class="d-flex flex-rown justify-content-center">
                <li><a class="black-text d-flex p-2" href="index.html">Home</a></li>
                <li><a class="black-text d-flex p-2" href="departamento/departamento.php">Médicos</a></li>
                <li><a class="black-text d-flex p-2" href="agendamento/agendamento.php">Agendamentos</a></li>
                <li><a class="black-text d-flex p-2" href="eventos/eventos.php">Pesquisa</a></li>

            </ul>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="./script.js"></script>
        <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
   <script>
    var swiper = new Swiper(".mySwiper1", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
        <!-- Importando materialize e boostrap scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</body>

</html>