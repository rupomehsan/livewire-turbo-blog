@extends('layouts.app')
@section('content')
<div>
    <div class="header">
        <h2>Blog Details</h2>
    </div>
    <img class="img-fluid w-100 p-5" src="{{ $blog->image }}" alt="">
    <div class=" text-center">
        <p class=" text-primary">{{ $blog->title }}</p>
        <p style="text-align: justify;"> {{ $blog->description }}</p>
    </div>
    <hr>
    <div class="show-comments">
        <div class="d-flex align-items-center gap-2">
            <div class="img-fluid">
                <img src="{{ $blog->image }}" class="rounded-circle" height="50" width="50" alt="">
            </div>
            <div class="name">Rupom Ehsan</div>
        </div>
        <div class="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum ex similique, nisi sint iusto expedita
                cupiditate molestias velit voluptatum, ipsum eum quidem. Voluptatem nulla, doloribus rerum iure possimus
                temporibus excepturi d</p>
        </div>

        <div class=" d-flex align-items-center gap-2">
            <div class="img-fluid">
                <img src="https://soliloquywp.com/wp-content/uploads/2018/03/slider-placement-featured.jpg"
                    class="rounded-circle" height="50" width="50" alt="">
            </div>
            <div class="name">Rupom Ehsan</div>
        </div>
        <div class="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum ex similique, nisi sint iusto expedita
                cupiditate molestias velit voluptatum, ipsum eum quidem. Voluptatem nulla, doloribus rerum iure possimus
                temporibus excepturi dolorem iusto expedita facilis harum debitis explicabo vel esse accusamus non
                sapiente
                architecto nostrum libero! Illum asperiores labore nisi, veniam consequuntur ipsum quo dolorum ?</p>
        </div>
    </div>
    <hr>
    @livewire('component.blog-details-component',["blog_id"=>"$blog->id"])

</div>
@endsection