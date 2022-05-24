@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-coffeeBean text-5xl lowercase font-extrabold text-shadow-md pb-14">
                The older you get the more you eat
            </h1>
            <a href="/blog" class="rounded-1xl text-center bg-gray-50 text-gray-700 hover:bg-whiskey py-2 px-4 font-bold text-xl lowercase ">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://media.istockphoto.com/photos/japanese-ramen-soup-with-chicken-egg-chives-and-sprout-picture-id511793034?k=20&m=511793034&s=612x612&w=0&h=RY5lLZ7l2y-6oXHtRBvGOyBS6REiQNdEGibjbgbBwo4=" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling about not having a good food?
        </h2>

        <p class="py-8 text-gray-500 text-s">
            We are here to help you!
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Get different food ideas from different people.
        </p>

        <a href="/blog" class="lowercase text-athensGray bg-coffeeBean hover:bg-cioccolato  text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-coffeeBean text-white">
    <h2 class="uppercase text-gray-300 tracking-wide text-5xl lowercase font-extrabold text-shadow-md pb-9 py-5">
        Discover the food you love
    </h2>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Overview
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-2xl font-bold">
                Spicy Chicken Wings
            </span>

            <h3 class="text-l py-10">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
            </h3>

            <a href="" class="lowercase hover:bg-cioccolato  bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://img.freepik.com/free-photo/hot-barbecue-chicken-wings-with-sauce-bbq-black-background-top-view_89816-22768.jpg?w=2000" alt="">
    </div>
</div>
@endsection