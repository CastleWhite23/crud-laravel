<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar um novo produto</title>
    </head>
    <body>
        <form action="{{ route('registra_plantas') }}" method="POST">
            @csrf 
            <label for=''>Especie</label> <br />
            <input type="text" name='Especie'> <br />
            <label for=''>Tipo</label> <br />
            <input type="text" name='Tipo'> <br />
            <label for="">Porte</label> <br />
            <input type="number" name="Porte"> <br />
            <button>Salvar</button>
        </form>        
    </body>
</html>