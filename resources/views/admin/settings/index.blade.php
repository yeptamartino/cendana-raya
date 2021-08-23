@extends('layouts.admin-theme')
@section('content')

<div class="card">
    <div class="card-header">
        <h5>Pengaturan</h5>
    </div>
<div class="card-block">
	<form method="post" action="{{route('setting.update')}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pilih Logo</label>
			<div class="col-sm-10">
                <img class="img img-responsive" src="{{url($setting->logo)}}" style="width:10em; padding-bottom:1em">
				<input type="file" name="logo" class="form-control 
				@error('logo') is-invalid placeholder
				@enderror" id="logo" placeholder="Pilih Video" value="{{old('logo')}}">
				@error('logo')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
			<img src="{{url($setting->logo)}}" alt="">
		</div>


        <div class="form-group row">
			<label class="col-sm-2 col-form-label">Syarat & Ketentuan</label>
			<div class="col-sm-10">
				<textarea class="ckeditor form-control 
                @error('terms_and_conditions') is invalid  @enderror"
                value="{{old('terms_and_conditions')}}" 
                placeholder="Masukkan Deskripsi" id="terms_and_conditions"
				name="terms_and_conditions" cols="10" rows="10">{{ $setting->terms_and_conditions }}</textarea>
				
                @error('terms_and_conditions')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror

			</div>
		</div>
		<button type="submit" class="btn btn-primary my-3">Update Pengaturan</button>
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
        $('#terms_and_conditions').summernote();
    });

</script>
@endpush

