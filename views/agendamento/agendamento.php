<?php 
    include "../../includes/autoLoad.php";
    Security::verifyAuthentication();
    $id = isset($_GET['id']) ? $_GET['id'] : '';
   
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visão Geral</title>
    <link rel="stylesheet" href="agendamento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="agendamento.css">
<?php include '../../includes/navbar.php';
 ?>

    <div class="container">
    <div class="d-flex justify-content-center p-4">
        <a href="../Usuarios/editar.php?id=<?php echo $_SESSION['usuario_id']; ?>" class="btn btn-success m-4">Editar Usuario</a>
        <a href="../Usuarios/editarSenha.php?id=<?php echo $_SESSION['usuario_id']; ?>" class="btn btn-secondary m-4">Editar Senha</a>
        
</div>
        <h1>Visão Geral</h1>

        <div class="box">
            <h2>Minhas Consultas</h2>
            <ul class="consultas">
                <li class="cons">Neurologista - 30/11 às 13h</li>
                <li class="cons">Pediatra - 10/12 às 13h</li>
                <li class="cons">Nutricionista - 12/12 às 14h</li>
                <li class="cons">Cardiologista - 25/12 às 10h</li>
            </ul>
        </div>

        <div class="box">
            <h2>Horários Disponíveis</h2>
            <ul class="horarios">
                <li class="cons">seg - 09h às 17h</li>
                <li class="cons">quar - 10h às 18h</li>
                <li class="cons">sex - 12h às 20h</li>
                <li class="cons">quint - 10h às 18h</li>
            </ul>
        </div>
        <form action="logout.php" method="post" class="d-flex justify-content-center m-4">
    <button type="submit" class="btn btn-danger">Sair</button>
</form>
    </div>
    
    <?php include '../../includes/footer.php'; ?>
</body>
</html>
