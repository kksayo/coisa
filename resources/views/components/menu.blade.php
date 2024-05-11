<div class="navbar bg-red-300">
  <div class="flex-1">
    <a class="btn btn-ghost text-black text-xl">Carros Market</a>
  </div>
  <div class="flex-none gap-3">
    <div class="form-control mr-[20rem] w-[64rem]">
      <input type="text" placeholder="Search" class="input input-bordered md:w-auto bg-red-100" />
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
        <img alt="Tailwind CSS Navbar component" src="https://recreio.uol.com.br/media/uploads/2024/02/mate-carros_capa.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content text-black rounded-box w-52 bg-red-300">
        <li>
          <a class="justify-between bg-red-300">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>


<div class="navbar bg-red-300 position: sticky top-0 z-10">
  <div class="navbar-start text-black text-xl ml-10">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-red-300 rounded-box w-52">
        <li>
          <summary>Categorias</summary>
          <ul class="p-2 bg-red-300">
            <li><a>Veiculos</a></li>
            <li><a>Supermercado</a></li>
            <li><a>Tecnologia</a></li>
            <li><a>Casa e Moveis</a></li>
          </ul>
        </details>
      </li>
      <li><a>Oferta</a></li>
      <li><a>Histórico</a></li>
      <li><a>Supermercado</a></li>
      <li><a>Moda</a></li>
    </ul>
    </div>
    <a class="btn btn-ghost text-xl "></a>
  </div>
  <div class="navbar-center hidden z-40 lg:flex bg-red-300 text-black">
    <ul class="menu menu-horizontal px-1">
      <li>
        <details>
          <summary>Categorias</summary>
          <ul class="p-2 bg-red-300">
            <li><a>Veiculos</a></li>
            <li><a>Supermercado</a></li>
            <li><a>Tecnologia</a></li>
            <li><a>Casa e Moveis</a></li>
          </ul>
        </details>
      </li>
      <li><a>Oferta</a></li>
      <li><a>Histórico</a></li>
      <li><a>Supermercado</a></li>
      <li><a>Moda</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn bg-red-300 text-black hover:bg-red-100">Compras</a>
  </div>
</div>

