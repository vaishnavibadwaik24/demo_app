@extends('layouts.master')
@section('content')

<!-- start -->
<section class="py-2 bg-gray-100 text-gray-800">
    <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
      <h1 class="text-2xl italic font-bold leadi text-center">Meet Our Authors from Around the World</h1>
      <div class="flex flex-row flex-wrap-reverse justify-center">
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t1.png') }}">
          <p class="text-xl font-semibold leadi">Dr. Nupur Shah</p>
          <p class="text-gray-600">Fetal Medicine</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t7.jpg') }}">
          <p class="text-xl font-semibold leadi">Tej Pratap Singh</p>
          <p class="text-gray-600">Army Officer</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t4.jpg')}}">
          <p class="text-xl font-semibold leadi">Veena Kapur</p>
          <p class="text-gray-600">Author</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t3.png')}}">
          <p class="text-xl font-semibold leadi">Nila Panda</p>
          <p class="text-gray-600">Filmmaker</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t5.jpg')}}">
          <p class="text-xl font-semibold leadi">Shelly Mishra</p>
          <p class="text-gray-600">Student</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t2.jpg')}}">
          <p class="text-xl font-semibold leadi">Dr. Bhatti</p>
          <p class="text-gray-600">Architect</p>
        </div>
        <div class="flex flex-col justify-center m-8 text-center">
          <img alt="" class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full bg-gray-500" src="{{ asset('uploads/t6.jpg')}}">
          <p class="text-xl font-semibold leadi">Dr.V.Srinivas</p>
          <p class="text-gray-600">Doctor</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end -->

  <!-- start feature -->
  <section class="py-6 sm:py-12 bg-white text-gray-800">
    <div class="container p-6 mx-auto space-y-8">
      <div class="space-y-2 text-center">
        <h2 class="text-3xl font-bolder italic pb-12">Featured on</h2>
      </div>
      <div class="grid grid-cols-1 gap-x-2 gap-y-8 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6">
        <!-- Your articles go here -->
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-full h-25 bg-white" src="{{ asset('uploads/f1.jpg')}}">
          </a>
        </article>
  
        <!-- Repeat the above article structure for each card -->
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-21 h-25 bg-white" src="{{ asset('uploads/f2.jpg')}}">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-9 bg-white" src="{{ asset('uploads/f3.jpg')}}">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-15 bg-white" src="{{ asset('uploads/f4.jpg')}}">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-15 bg-white" src="f5.png">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-10 bg-white" src="f6.jpg">
          </a>
        </article> 
      </div>
    </div> 
      <div class="grid grid-cols-1 gap-x-2 gap-y-8 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6">
        <!-- Your articles go here -->
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-10 bg-white" src="">
          </a>
        </article>
  
        <!-- Repeat the above article structure for each card -->
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-21 h-12 bg-white" src="f8.png">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-15 bg-white" src="f12.jpg">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-15 bg-white" src="f10.png">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-14 bg-white" src="f9.png">
          </a>

        </article>
        <article class="flex flex-col bg-white">
          <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
            <img alt="" class="object-cover w-15 h-10 bg-white" src="">
          </a>
        </article> 
      </div>
  </section>
  <!-- end feature -->

@endsection