{{-- @extends('layouts.master')
@section('content') --}}

<form action="{{url('blog/store')}}" method="POST" class="bg-white" enctype="multipart/form-data">
  @csrf
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-15 pb-4 mx-auto">
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
              <input type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
              <textarea type="text" id="description" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="category_id" class="leading-7 text-sm text-gray-600">Category</label>&nbsp;
              <select name="category_id" id="category_id" class="bg-gray-100 border border-gray-300 focus:border-indigo-500">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="photo" class="leading-7 text-sm text-gray-600">Photo</label>
              <input type="file" id="photo" name="photo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-25 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
              <input type="text" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-full">
            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>

{{-- @endsection --}}

