@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Track order</h5>
    </div>
    <div class="card-block">
	<form method="post" action="{{url('admin/track-order',$track_order->id)}}" enctype="multipart/form-data">
		@csrf
		@method('patch')
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Foto</label>
			<div class="col-sm-10">
				<img class="img img-responsive" src="{{assset('images/'.$track_order->thumbnail)}}" style="width:10em; padding-bottom:1em">
				<input type="file" name="thumbnail" class="form-control 
				@error('thumbnail') is-invalid placeholder
				@enderror" id="thumbnail" placeholder="Masukkan Nama" value="{{$track_order->thumbnail}}">
				@error('thumbnail')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div> 
		
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-10">
				<input type="text" name="title" class="form-control 
				@error('title') is-invalid placeholder
				@enderror" id="title" placeholder="Masukkan Judul" value="{{$track_order->title}}">
				@error('title')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Deskripsi</label>
			<div class="col-sm-10">
				<textarea class="ckeditor form-control 
					@error('description') is invalid  @enderror"
					value="{{old('description')}}" 
					placeholder="Masukkan Deskripsi" id="description"
					name="description" cols="10" rows="10">{{ $track_order->description }}</textarea>
					
					@error('description')
					<div class="invalid-feedback">{{$message}}</div>
					@enderror
			</div>
		</div>

		
	   
		<div class="form-group pull-right">
			<a href="{{route('track-order.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</div>
	</form>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#description').summernote();
    });

</script>
@endpush
