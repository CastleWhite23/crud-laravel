<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>atualizar um plantas</title>
    </head>
    <body>
        <form action="{{ route('alterar_plantas', ['id' => $plantas->id]) }}" method="POST">
            @csrf 
            <label for=''>Especie</label> <br />
            <input type="text" name='Especie' value="{{ $plantas->Especie }}"> <br />
            <label for=''>Tipo'</label> <br />
            <input type="text" name='Tipo' value="{{ $plantas->Tipo }}"> <br />
            <label for="">Porte</label> <br />
            <input type="text" name="Porte" value="{{ $plantas->Porte }}"> <br />
            <button>Salvar</button>
        </form>        
    </body>
</html>