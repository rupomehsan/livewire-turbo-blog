@extends('layouts.app')
@section('content')

<div class="header">
    <h2>Contact Us</h2>
</div>
<div class="w-75 m-auto p-3">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select ">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div>
            <label for="inputState" class="form-label">Description</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection