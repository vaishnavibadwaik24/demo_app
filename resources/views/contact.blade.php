@extends('layouts.master')
@section('content')

    <!-- start contact -->
    <section class="py-6 bg-white dark:text-black">
        <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-1 md:divide-x">
      <div class="py-6 md:py-0 md:px-6">
        <h1 class="text-4xl text-center">Get in touch</h1>
        <p class="pt-2 pb-4 text-center">Fill in the form to start a conversation</p>
      </div>
      <form novalidate="" class="flex flex-row py-6 md:py-0 md:px-40">
        <label class="block px-4" >
          <input type="text" placeholder="Enter Name" class="block w-full rounded-md bg-white border-2" required>
        </label>
        <label class="block px-4">
          <input type="email" placeholder="Email" class="block w-full rounded-md bg-white border-2" required>
        </label>
        <label class="block px-4">
          <input type="number" placeholder="Mobile No." class="block w-full rounded-md bg-white border-2" required>
        </label>
        <button type="button" class="self-center px-8 py-1 text-lg rounded focus:ring hover:ring focus:ri light:text-gray-900 dark:bg-cyan-400">Submit</button>
      </form>
    </div>
  </section>
  <!-- end contact -->
  

@endsection  