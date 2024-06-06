<x-layout_base>
<x-menu></x-menu>
<div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <div class="w-full bg-green-300 bg-gradient-to-r from-white"> </div>
    <img src="https://http2.mlstatic.com/D_NQ_791421-MLA75689823671_042024-OO.webp">
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="carousel-item relative w-full">
    <div class="w-full bg-blue-300 bg-gradient-to-r from-white"> </div>
    <img src="https://http2.mlstatic.com/D_NQ_633052-MLA75508696426_042024-OO.webp">
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="carousel-item relative w-full">
    <div class="w-full  bg-purple-300 bg-gradient-to-r from-white"> </div>
    <img src="https://http2.mlstatic.com/D_NQ_626561-MLA75684207785_042024-OO.webp">
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full">
    <div class="w-full bg-pink-300 gradient-bg-white"> </div>
    <img src="https://http2.mlstatic.com/D_NQ_617483-MLA75369956496_042024-OO.webp">
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>  
</div>

<div class="bg-white text-black shadow-md rounded-md m-6 p-6">
  <div class="font-bold text-lg">
  Ofertas do Dia
</div>
<div class="grid grid-cols-4 gap-3">

@foreach ($listaProdutos as $produto)

<div class="card bg-gray-50 shadow-xl">
  <figure><img class="aspect-square w-full object-cover w-[20rem]"
   src="{{strpos($produto->foto, 'produtos') ===0?
  asset ('fotos/' .$produto->foto) : $produto->foto}}"
  alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title">{{$produto->name}}</h2>
    <p>{{$produto->descricao}}</p>
    <div class="card-actions justify-between">
      <div class="font-bold text-lg">R${{number_format($produto->valor, 2,',','.')}}</div>
      <button class="btn btn-primary border border-red-100 bg-red-300 text-white">Compre já</button>
    </div>
  </div>
</div>

@endforeach

</div>

</div>
</x-layout_base>