<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>atualizar um produto</title>
    </head>
    <body>
        <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
            @csrf 
            <label for=''>Nome</label> <br />
            <input type="text" name='nome' value="{{ $produto->nome }}"> <br />
            <label for=''>Custo'</label> <br />
            <input type="text" name='custo' value="{{ $produto->custo }}"> <br />
            <label for="">Preco</label> <br />
            <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
            <label for="">Quantidade</label> <br />
            <input type="number" name="quantidade" value="{{ $produto->quantidade }}"> <br />
            <button>Salvar</button>
        </form>        
    </body>
</html>