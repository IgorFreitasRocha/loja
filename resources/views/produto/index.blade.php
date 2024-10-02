<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img\logo\logo-alpha-dark.svg" type="image/x-icon">
    <link rel="stylesheet" href="css\main.css">
    <title>Alpha - Home</title>
</head>
    <body>

    <!-- Menu Inicial -->

    <nav class="nav">
        <a href="#" class="logo">
            <img src="img\logo\logo-alpha-dark.svg" alt="Logo Alpha">
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
    <div class="container-carrossel">
        <img src="img\carrossel\teste.jpg" alt="" srcset="">
    </div>

    <!-- Categorias -->
    <div class="container">

    @foreach($produtos as $produto)
    <div class="categoria">
        <div>
            <a><img src="{{$produto->Categoria->CATEGORIA_IMAGEM}}" alt="" srcset=""></a>
            <p>{{$produto->Categoria->CATEGORIA_NOME}}</p>
        </div>
    </div>

    @endforeach
    

    <!-- Lista de Produtos -->

    
        <h1 class="main-title">Produtos</h1>

        <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit adipisci excepturi provident perspiciatis quae. Sequi dolor accusantium, corrupti minus autem voluptas doloribus omnis explicabo impedit minima nobis! Et, distinctio deleniti?</p>

    

        <!-- Card Produtos -->
        <div class="cards-container">
        @foreach($produtos as $produto)
            <div class="card">
                <div class="card-body">
                    @if(filter_var($produto, FILTER_VALIDATE_URL))
                        <img src="{{$produto->Imagem->IMAGEM_URL}}" alt="Imagem">
                    @else
                        <img src="img\default-img\default-img.webp" alt="Imagem Genérica" width="100">
                    @endif
                </div>
                <p class="badge {{ $produto->PRODUTO_DESCONTO > 0 ? 'badge-desconto' : 'badge-semdesconto' }}">
                        {{ $produto->PRODUTO_DESCONTO > 0 ? 'Promoção' : 'Sem Desconto' }}
                </p>
                <p class="text-sm">{{$produto->Categoria->CATEGORIA_NOME}}</p>
                <p class="text-md">{{$produto->PRODUTO_NOME}}</p>
                <p class="text-preco-desconto">R$ {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}</p>
                <p class="text-preco">R$ {{ number_format($produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO, 2, ',', '.') }}</p>
                <div>
                    <button class="btn btn-carrinho">Carrinho</button>
                    <button class="btn btn-comprar">Comprar</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    </body>
</html>