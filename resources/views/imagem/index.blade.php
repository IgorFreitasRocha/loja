<h1>IMAGEM</h1>


@foreach($imagens as $imagem)

<ul>
  @if(filter_var($imagem, FILTER_VALIDATE_URL))
      <img src="{{$imagem->IMAGEM_URL}}" alt="Imagem" width="100">
  @else
      <img src="img\default-img\default-img.webp" alt="Imagem Genérica" width="100">
  @endif
  <li>{{ $imagem->Produto->PRODUTO_NOME }}</li>
  <li>{{ $imagem->Produto->Categoria->CATEGORIA_NOME}}</li>
  
  <li>Categoria Imagem - {{ $imagem->Produto->Categoria->CATEGORIA_IMAGEM}}</li>
  <li>Produto Imagem - {{ $imagem->IMAGEM_URL}}</li>
  <li>R$ {{number_format($imagem->Produto->PRODUTO_PRECO, 2, ',', '.')}}</li>
</ul>



@endforeach