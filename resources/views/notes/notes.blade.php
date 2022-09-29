@extends("layouts.app-master")
@section("content")
    <div class="m-44 mt-5">
    <h1 class="text-8xl">Articles</h1>
    <a href="/add-note">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Add New Article</button>
    </a>
    @foreach($articles as $article)
    <div class="flex mb-5 justify-center mt-2.5">
      <div class="rounded-lg shadow-lg bg-white max-w-sm max-h-2 text-center">
        <div class="py-3 px-6 border-b border-gray-300">
          Featured
        </div>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">{{$article->title}}</h5>
          <p class="text-gray-700 text-base mb-4">
            {{$article->content}}
          </p>
          <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View All</button>
        </div>
        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
          <image height="10px" src="{{asset('/storage/images/').'/'.$article->image}}">
        </div>
        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
            {{$article->author->name}}
        </div>
      </div>
    </div>
    @endforeach
   </div>
@endsection
