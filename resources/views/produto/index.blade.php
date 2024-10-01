<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo\logo-alpha-dark.svg" type="image/x-icon">
    <link rel="stylesheet" href="css\main.css">
    <title>Alpha - Home</title>
</head>
    <body>

    <!-- Menu Inicial -->

    <nav class="nav">
        <a href="#" class="logo">
            <img src="logo\logo-alpha-dark.svg" alt="Logo Alpha">
        </a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Produtos em promoção</a></li>
            <li><a href="#">Sobre</a></li>
        </ul>
        <did>
            <input type="text" placeholder="Pesquisar produto">
            <button class="btn btn-pesquisa">Pesquisar</button>
        </did>
    </nav>

    <!-- Carrosel de imagens -->


    <!-- Lista de Produtos -->

    <div class="container">
        <h1 class="main-title">Produtos</h1>

        <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit adipisci excepturi provident perspiciatis quae. Sequi dolor accusantium, corrupti minus autem voluptas doloribus omnis explicabo impedit minima nobis! Et, distinctio deleniti?</p>

        <button class="btn btn-comprar">Comprar</button>
        <button class="btn btn-carrinho">Carrinho</button>


        <div class="produtos">
            @foreach($produtos as $produto)
                <div class="produto">
                    <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}">
                    <h2>{{ $produto->PRODUTO_NOME }}</h2>
                    <p>R$ {{ $produto->PRODUTO_PRECO }}</p>
                </div>
            @endforeach

        
    </body>
</html>