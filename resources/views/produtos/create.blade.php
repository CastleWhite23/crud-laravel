<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar um novo produto</title>
    </head>
    <body>
        <form action="{{ route('registra_produto') }}" method="POST">
            @csrf 
            <label for=''>Nome</label> <br />
            <input type="text" name='nome'> <br />
            <label for=''>Custo'</label> <br />
            <input type="text" name='custo'> <br />
            <label for="">Preco</label> <br />
            <input type="text" name="preco"> <br />
            <label for="">Quantidade</label> <br />
            <input type="number" name="quantidade"> <br />
            <button>Salvar</button>
        </form>        
    </body>
</html>