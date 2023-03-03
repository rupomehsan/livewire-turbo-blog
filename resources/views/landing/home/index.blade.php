@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://soliloquywp.com/wp-content/uploads/2018/03/slider-placement-featured.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://soliloquywp.com/wp-content/uploads/2016/08/wordpress-slider-for-recent-blog-posts.jpg" class="d-block w-100 h-50" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/html_image_slider.jpg" class="d-block w-100 h-50" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="header">
    <h2>Our Blogs</h2>
</div>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <img class="img-fluid" src="https://soliloquywp.com/wp-content/uploads/2018/03/slider-placement-featured.jpg" style="height:200px;" alt="">

            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco.</p>
        </div>
        <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <img class="img-fluid" src="https://soliloquywp.com/wp-content/uploads/2016/08/wordpress-slider-for-recent-blog-posts.jpg" style="height:200px;" alt="">
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco.</p>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>About Me</h2>
            <img class="img-fluid" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/html_image_slider.jpg" alt="">
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div>
        <div class="card">
            <h3>Popular Post</h3>
            <img class="img-fluid" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/html_image_slider.jpg" alt=""><br>
            <img class="img-fluid" src="https://soliloquywp.com/wp-content/uploads/2018/03/slider-placement-featured.jpg" alt=""><br>
            <img class="img-fluid" src="https://www.simplilearn.com/ice9/free_resources_article_thumb/html_image_slider.jpg" alt="">
        </div>
        <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
        </div>
    </div>
</div>



@endsection