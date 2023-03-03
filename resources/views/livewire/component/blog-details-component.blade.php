<div>
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

})
</script>
@endpush