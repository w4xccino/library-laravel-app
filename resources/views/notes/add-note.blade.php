@extends("layouts.app-master")
@section("content")
   <div class="m-44 mt-5">
   <h1 class="text-8xl">Add new Article</h1>
   <form method="POST" action="/add-note" enctype="multipart/form-data">
   @csrf
   <div class="mb-6">
     <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
     <input name="title" type="text" id="large-input" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 :bg-gray-700">
   </div>
   <div class="mt-5">
     <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Content</label>
     <textarea name="content" id="message" name rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your message..."></textarea>
   </div>
   <div class="mt-5">
     <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
     <input name="image" type="file" id="large-input" class="" accept="image/png, image/jpeg">
   </div>
   <br>
   <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" >Submit</button>
   </form>
   </div>
@endsection
