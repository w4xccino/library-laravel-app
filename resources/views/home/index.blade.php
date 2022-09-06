@extends("layouts.app-master")
@section("content")
    <div class="m-44 mt-5">
    <h1 class="text-8xl">Home</h1>
     @auth
    <div class="flex">
    <p>Bienvenido <span class="font-semibold text-gray-900 underline dark:text-black decoration-indigo-500">{{auth()->user()->name ?? auth()->user()->username}}</span>, estas logeado a la pagina</p>
    <div>
        <img class="w-96 h-auto rounded-full"  src="https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2020-07/kitten-510651.jpg">
    </div>
    </div>
     @endauth
    @guest
   <p>Hola, estas como invitado</p>
   <p>SI quieres ver mas contenido, <a href="/login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><button>Inicia Sesion</button></a></p>
  @endguest
   </div>
@endsection
