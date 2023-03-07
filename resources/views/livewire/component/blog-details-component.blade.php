<div>
    <div class="header">
        <h2>Blog Details</h2>
    </div>
    <img class="img-fluid w-100 p-5" src="{{$blogDetails->image}}" alt="">
    <div class=" text-center">
        <p class=" text-primary">{{$blogDetails->title}}</p>
        <p style="text-align: justify;">{{$blogDetails->description}}</p>
    </div>
    <hr>
    <div class="show-comments">
        @if(count($blogComments))
            @foreach($blogComments as $comment)
                <div class="d-flex align-items-center gap-2">
                    <div class="img-fluid">
                        <img src="https://soliloquywp.com/wp-content/uploads/2018/03/slider-placement-featured.jpg"
                             class="rounded-circle" height="50" width="50" alt="">
                    </div>
                    <div class="name">{{$comment->name}}</div>
                </div>
                <div class="">
                    <p>{{$comment->comment}}</p>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning">Data Not Found</div>
        @endif
    </div>
    <hr>
    <div class="comments w-75 m-auto">
        <h5 class="text-center">Comments Section </h5>

        @if(session()->has('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong> {{session('message')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <hr>
        <form wire:submit.prevent="submitComments">
            <input type="hidden" wire:model='blog_id' class="form-control" value="$blog_id">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" wire:model='name' class="form-control" placeholder="">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                <textarea class="form-control" wire:model='comment' id="exampleFormControlTextarea1"
                          rows="3"></textarea>
                @error('comment')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="d-flex  justify-content-center">
                <button type="submit" class="btn btn-dark  w-50 m-auto">Submit</button>
            </div>
        </form>
    </div>
</div>

@push('custom-js')
    <script>
        window.addEventListener('success', event => {

            setTimeout(() => {
                $('.alert-dismissible').remove()
            }, 3000)
            setTimeout(() => {

            }, 3000)

        })
    </script>
@endpush
