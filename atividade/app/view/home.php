<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once '/usr/share/nginx/app/view/css.php'; ?>
    <title>Página inicial</title>
</head>

<body class="bg-light text-center p-5">
    <div class="container">
        <h1 class="mb-5">Sistema de Cadastros</h1>

        <div class="d-grid gap-3 col-6 mx-auto">
            <a href="/cliente/lista" class="btn btn-primary btn-lg">Clientes</a>
            <a href="/forncedor/lista" class="btn btn-primary btn-lg">Fornecedore</a>    
            <a href="/usuario/lista" class="btn btn-warning btn-lg">Usuários</a>
            <a href="/empresa/lista" class="btn btn-info btn-lg">Empresas</a>
        </div>
    </div>

    <?php include_once '/usr/share/nginx/app/view/script.php'; ?>
</body>
</html>