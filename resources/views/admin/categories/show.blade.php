@extends('layouts.admin-theme')

@section('title')
Detail Category
@endsection

@section('content')
<x-card title="Detail Category">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$category->name}}</h5>
        <p class="card-text"><img src="{{ asset('images/'.$category->thumbnail) }}" alt="" style="max-width: 10em;"></p>
        <a href="{{url('categories',$category->id)}}/edit" class="btn btn-warning">Edit</a>
        <form action="{{$category->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
        <a href="{{url('categories')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</x-card>
@endsection

