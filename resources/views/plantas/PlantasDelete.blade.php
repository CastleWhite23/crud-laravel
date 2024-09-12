<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excluir um plantas</title>
    </head>
    <body>
        <form action="{{ route('excluir_plantas', ['id' => $plantas->id]) }}" method="POST">
            @csrf 
            <label for=''>Tem certeza que deseja excluir este plantas?</label> <br />
            <input type="text" name='nome' value="{{ $plantas->nome }}"> <br />
            <button>sim</button>
        </form>        
    </body>
</html>