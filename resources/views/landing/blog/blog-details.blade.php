@extends('layouts.app')
@section('content')
<div>
    <livewire:component.blog-details-component :blogDetails="$blogDetails"/>
</div>
@endsection
