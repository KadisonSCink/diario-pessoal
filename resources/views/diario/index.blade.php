<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Notas</title>
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
            width: 80%;
            margin: 0 auto;
        }
        .nota-card {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .nota-card h2 {
            color: #007BFF;
            font-size: 18px;
        }
        .nota-card p {
            color: #555;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .buttons a, .buttons form button {
            padding: 8px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .buttons a:hover, .buttons form button:hover {
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
    <h1>Lista de Notas</h1>
    <div class="container">
        @foreach($notas as $nota)
        <div class="nota-card">
            <h2>{{ $nota->titulo }}</h2>
            <p>{{ \Illuminate\Support\Str::limit($nota->conteudo, 100) }}</p>
            <div class="buttons">
                <a href="{{ route('notas.edit', $nota->id) }}">Editar</a>
                <form action="{{ route('notas.destroy', $nota->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <a href="{{ url('/menu') }}" class="menu-link">Voltar ao menu</a>
</body>
</html>
