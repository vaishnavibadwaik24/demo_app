{{-- @extends('layouts.master')
@section('content') --}}

<form action="{{url('blog/update', $data->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="lg:w-1/2 md:w-1/ px-6 bg-white md:ml-auto w-full md:py-8 mt-8 md:mt-0">
    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font text-center">Edit Blog</h2>
    <div class="relative mb-4">
      <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
      <input type="text" id="title" name="title" value="{{$data->title}}"
        class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
    </div>
    <div class="relative mb-4">
      <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
      <textarea type="text" id="description" name="description" 
        class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$data->description}}</textarea>
    </div>
    <div class="p-2 w-full">
      <div class="relative">
        <label for="category_id" class="leading-7 text-sm text-gray-600">Category</label>&nbsp;
        <select name="category_id" id="category_id" class="bg-gray-100 border border-gray-300 focus:border-indigo-500">
          <option value="">Select Category</option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}" {{ old('category_id', $data->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="p-2 w-full">
      <div class="relative">
        <label for="photo" class="leading-7 text-sm text-gray-600">Current Photo</label>&nbsp;
          <img src="{{ asset('images/'.$data->photo) }}" alt="Profile" style="max-width: 100px; max-height: 100px;">
      </div>
    </div>    
    <div class="p-2 w-full">
      <div class="relative">
        <label for="photo" class="leading-7 text-sm text-gray-600">New Photo</label>
        <input type="file" id="photo" name="photo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-25 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out">
      </div>
    </div>
    <div class="p-2 w-full">
      <div class="relative">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="text" id="email" name="email" value="{{$data->email}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
    </div>
    
    <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg ">Update</button>
  </div>
</form>

{{-- @endsection --}}