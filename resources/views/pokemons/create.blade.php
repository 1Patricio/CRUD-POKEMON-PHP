<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Pokemons</h1>
        <form action="{{ url('pokemons') }}" method="POST">
            @csrf            
            <label for="nome" class="form-label">Pokemon:</label>
            <input type="textarea" name="nome" placeholder="Insira o nome do pokemon" required class="form-control">
            <br>
            <label for="tipo" class="form-label">Tipo:</label>
            <input type="text" name="tipo" name = "diretor" class="form-control">
            <br>
            <label for="pontos_de_poder" class="form-label">Pontos de Poder:</label>
            <input type="number" name="pontos_de_poder" class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Criar Pokemon</button>
        </form> 

    </div>
</body>
</html>