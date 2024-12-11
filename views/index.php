<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Esperança</title>
    <!-- Importando materialize e boostrap scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
    <li><a class="black-text" href="index.html">Home</a></li>
    <li><a class="black-text" href="departamento/departamento.php">Médicos</a></li>
    <li><a class="black-text" href="agendamento/agendamento.php">Agendamentos</a></li>
    <li><a class="black-text" href="eventos/eventos.php">Pesquisa</a></li>
</ul>

<!-- Banner -->
<div class="banner">
    <img src="../img/banner.jpg" alt="Banner da Clínica Esperança" class="img-fluid">
</div>






    <div class="container">

        <!-- Serviços -->
        <h4 class="center">Serviços</h4>
        <div class="row">

            <!-- Card 1 -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/consulta-médica.png" alt="Consulta Médica">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Consulta Médica</span>
                        <p>Consultas especializadas para cuidar da sua saúde.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/exames.png" alt="Exames de Imagem">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Exames de Imagem</span>
                        <p>Tecnologia de ponta para diagnósticos precisos.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/cirurgia.png" alt="Cirurgia Ambulatorial">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Cirurgia Ambulatorial</span>
                        <p>Procedimentos seguros realizados por especialistas.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="../img/terapia.png" alt="Terapias Integrativas">
                    </div>
                    <div class="card-content">
                        <span class="card-title">Terapias Integrativas</span>
                        <p>Tratamentos complementares para seu bem-estar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner 2 -->
    <div class="banner">
        <img src="../img/banner2.png" alt="Banner da Clínica Esperança">
    </div>

    <!-- Novidades -->
    <div class="container my-4">
        <h4 class="center">Novidades</h4>
        <div class="row justify-content-center g-4">

            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/avanços.png " class="card-img-top" alt="Avanços da medicina ">
                    <div class="card-body">
                        <h5 class="card-title">Avanços na Medicina 🧑‍⚕️ </h5>
                        <p class="card-text">Saiba mais sobre as últimas inovações que melhoram a saúde. </p>
                        
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card text-center" style="width: 18rem;">
                    <img src="../img/atendimento.png" class="card-img-top" alt="">
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
                <a href="index.html" class="brand-logo "> <img src="./img/logo.png" class="logo" alt="Logo" width="150"
                        height="50" style="margin-top: 10px;"></a>
            </div>
            <div class="center">
                <ul>
                    <li><a class="black-text" href="index.html">Home</a></li>
                    <li><a class="black-text" href="./departamento/departamento.php">Médicos</a></li>
                    <li><a class="black-text" href="./agendamento/agendamento.php">Agendamentos</a></li>
                    <li><a class="black-text" href="./eventos/eventos.php">Pesquisa</a></li>

                </ul>
            </div>
        </div>

        <script src="./script.js"></script>
        <!-- Importando materialize e boostrap scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</body>

</html>