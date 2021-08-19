@extends('layouts.admin-theme')

@section('title')
Edit Category
@endsection

@section('content')
<x-card title="Edit Category">
	<form method="post" action="{{url('categories',$category->id)}}">
		@csrf
		@method('patch')
		<div class="form-group">
			<label for="name" class="form-label">Name</label>
			<input type="text" name="name" class="form-control 
				@error('name') is-invalid placeholder
				@enderror" id="name" placeholder="name" value="{{$category->name}}">
				@error('name')
					<div class="invalid-feedback">{{$message}}</div>
				@enderror
		<button type="submit" class="btn btn-primary my-3">Update Category</button>
	</form>
</x-card>
@endsection
