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

    <h2>Lista de pokemons</h2>
    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Tipo</td>
            <td>Ano</td>
        </tr>
        @foreach($pokemons as $pokemon)

        <tr><!--Adiciona uma quebra de linha-->
            <td><?php echo $pokemon['id']; ?></td>
            <td><?php echo $pokemon['nome']; ?></td>
            <td><?php echo $pokemon['tipo']; ?></td>
            <td><?php echo $pokemon['pontos_de_poder']; ?></td>
            <td>
                <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}">Edit</a>
                <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>




        </tr> <!--Adiciona uma quebra de linha-->
        @endforeach
    </table>
</body>

</html>