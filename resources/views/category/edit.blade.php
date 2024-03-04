{{-- @extends('layouts.master')
@section('content') --}}
<form action="{{url('category/update',$data->id)}}" method="POST">
    @csrf
<div class="lg:w-1/2 md:w-1/ px-6 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font text-center">Edit Category</h2>
    <div class="relative mb-4">
      <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
      <input type="text" id="name" name="name" value="{{$data->name}}"
        class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
    </div>
    <button
      class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Update</button>
  </div>
</form>
{{-- @endsection --}}