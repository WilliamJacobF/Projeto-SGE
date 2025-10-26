<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("/background.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: black;
            margin-top: 40px;
        }

        h3 {
            text-align: center;
            color: black;
            margin-bottom: 30px;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
        }

        .box a {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>PROJETO SGE</h1>
    <h3>Projeto de Extensão - Sistema de Gerenciamento Empresarial</h3>
    <div class="box">
        <a href="{{ route('clientes-index') }}" class="btn btn-primary">Gerenciar Clientes</a>
        <a href="{{ route('produtos-index') }}" class="btn btn-primary">Gerenciar Estoque</a>
        <a href="{{ route('financias-index') }}" class="btn btn-primary">Gerenciar Finanças</a>
    </div>
</body>
</html>
