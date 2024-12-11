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
            
            <a href="../index.php" class="brand-logo ms-0">
                <img src="../img/logo.png" alt="Logo" width="150" height="50" style="margin-top: 10px;">
            </a>
            <!-- Mobile menu icon -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <!-- Desktop links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="black-text" href="../index.php">Home</a></li>
                <li><a class="black-text" href="../departamento/departamento.php">Médicos</a></li>
                <li><a class="black-text" href="../agendamento/agendamento.php">Agendamentos</a></li>
                <li><a class="black-text" href="../eventos/eventos.php">Pesquisa</a></li>
            </ul>
        </div>
    </nav>

    <!-- Mobile menu -->
    <ul class="sidenav" id="mobile-demo">
        <li><a class="black-text" href="../index.php">Home</a></li>
        <li><a class="black-text" href="../departamento/departamento.php">Médicos</a></li>
        <li><a class="black-text" href="../agendamento/agendamento.php">Agendamentos</a></li>
        <li><a class="black-text" href="../eventos/eventos.php">Pesquisa</a></li>
    </ul>

    <!-- Content -->
    <div class="banner">
        <img src="../img/banner.jpg" alt="Banner da Clínica Esperança" class="img-fluid">
    </div>

    <!-- Importing Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
        });
    </script>

</body>

</html>
