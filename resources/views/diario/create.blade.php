<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Nota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Criar Nova Nota</h1>
    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="conteudo">Conteúdo:</label>
        <textarea name="conteudo" id="conteudo" rows="5" required></textarea>

        <button type="submit">Salvar Nota</button>
    </form>

    <br>
    <a href="{{ url('/menu') }}">Voltar ao menu</a>
</body>
</html>
