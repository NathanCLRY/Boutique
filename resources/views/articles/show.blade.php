@extends('layouts.articles')

@section('content')
    <!-- component -->
<div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
        <img class="w-full" alt="image of a girl posing" src="{{$article->image}}" />
    </div>
    
    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
        <div class="border-b border-gray-200 pb-6">
            <p class="text-sm leading-none text-gray-600 dark:text-black-300 ">{{$article->brand}}</p>
            <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-black mt-2">{{$article->name}}</h1>
        </div>
    </div>
      </div>
      
      <h2 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-black mt-2">{{number_format($article->price,2)}} €</h2>
      <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-black mt-7">It is a long established fact that a reader will be distracted by thereadable content of a page when looking at its layout. The point of usingLorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
</div>

<div class="mt-16 m-6 md-16">
    <h3 class="text-gray-600 text-2xl font-medium">Produit similaire</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            @foreach ($articles as $rowArticle)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('{{$rowArticle->image}}')">
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase">{{$rowArticle->name}}</h3>
                    <span class="text-gray-500 mt-2">{{$rowArticle->price}} €</span>
                </div>
            </div>
            @endforeach
        </div>
    
</div>
@endsection