<div>

    <div class="row ">
        @foreach($blogs as $blog)
        <div class="card mb-3 col-md-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$blog['image']}}" class="img-fluid h-100 w-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{substr($blog['title'],0,10)}}</h5>
                        <p class="card-text">{{substr($blog['description'],0,30)}}</p>
                        <p class="card-text"><small class="text-muted">{{$blog['date']}}</small></p>
                        <a href="{{url('blog/blog-details/')}}/{{$blog['id']}}" class="btn btn-primary">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$blogs->links()}}
    </div>
</div>