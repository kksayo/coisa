<x-layout_base>
<!-- Hero -->
<div class="absolute ml-96"><img src="https://wallpaper.forfun.com/fetch/04/0478f5b6363ef6f93e8b22cd2267d874.jpeg" alt=""></div>
<div class="relative items-end bg-gradient-to-b from-red-500 via--500 to-black-500">
<div class="relative items-end bg-red-500 w-1/2">
  <div class="flex flex-col items-end justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 mr-64 ">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-16 h-12 mr-2" src="https://i.pinimg.com/originals/b5/74/04/b574045f483218530f7f284802a03ec7.png" alt="logo">
            <div class="mr-32">
          Carros Market
</div>
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-red-300  dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-yellow-300">
                  Faça seu login, fofinho!
              </h1>
              <form action="{{route('salva-usuario')}}" method="POST">
                @csrf
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-yellow-300">Your User</label>
                      <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="SeuNomeMinion" required="">
                  </div>

                  
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-yellow-300">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="minionname@company.com" required="">
                  </div>
                  
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-yellow-300">Password</label>
                      <input type="password" name="senha" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 ml-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-blue-200 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-white" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="dark:text-yellow-500">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500 dark:text-yellow-500">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 dark:text-yellow-500">Sign in</button>
                  <p class="text-sm font-light text-gray-500 dark:text-blue-500">
                      Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500 dark:text-yellow-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section> 


</div>
</div>
</div>
<!-- End Hero -->


</x-layout_base>