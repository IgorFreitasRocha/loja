<h1>CATEGORIA</h1>
<ul>
    @foreach($categorias as $categoria)
        <li>{{ $categoria->CATEGORIA_NOME }}</li>
        <li>{{ $categoria->CATEGORIA_DESC }}</li>
        <img src="{{$categoria->CATEGORIA_IMAGEM}}" alt="">
    @endforeach
</ul>