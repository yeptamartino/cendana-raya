@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Capability</h5>
    </div>
    <div class="card-block">
        <form method="post" action="{{url('admin/capability')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" name="thumbnail" class="form-control 
                    @error('thumbnail') is-invalid placeholder
                    @enderror" id="thumbnail" placeholder="Masukkan Thumbnail" value="{{old('thumbnail')}}">
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
                    @enderror" id="title" placeholder="Masukkan Title" value="{{old('title')}}">
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
						placeholder="Masukkan Deskripsi" id="description"
						name="description" cols="10" rows="10">{{ old('description') }}</textarea>
						
						@error('description')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
                </div>
            </div>

           
            <div class="form-group pull-right">
                <a href="{{route('capability.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
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
