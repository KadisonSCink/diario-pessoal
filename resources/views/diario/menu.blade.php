<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .menu-container {
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        .menu-item {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f0f0f0;
            width: 200px;
            text-align: center;
        }
        .menu-item a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            display: block;
            margin-top: 10px;
        }
        .menu-item a:hover {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao Diário Pessoal</h1>
    <div class="menu-container">
        <div class="menu-item">
            <h2>Adicionar Nota</h2>
            <a href="{{ route('notas.create') }}">Clique aqui para adicionar</a>
        </div>
        <div class="menu-item">
            <h2>Ver Notas</h2>
            <a href="{{ route('notas.index') }}">Clique aqui para ver suas notas</a>
        </div>
    </div>
</body>
</html>
