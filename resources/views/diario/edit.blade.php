<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Nota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .menu-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }
        .menu-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Editar Nota</h1>
    <div class="container">
        <form action="{{ route('notas.update', $nota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" value="{{ $nota->titulo }}" required>

            <label for="conteudo">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" rows="6" required>{{ $nota->conteudo }}</textarea>

            <button type="submit">Atualizar Nota</button>
        </form>
    </div>

    <a href="{{ url('/menu') }}" class="menu-link">Voltar ao menu</a>
</body>
</html>
