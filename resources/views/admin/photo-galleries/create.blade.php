@extends('layouts.admin-theme')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Tambah Galeri Foto</h5>
        </div>
        <div class="card-block">
            <form method="post" action="{{url('admin/photo')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" name="thumbnail" class="form-control 
                        @error('thumbnail') is-invalid placeholder
                        @enderror" id="thumbnail" placeholder="Masukkan thumbnail youtube = (xxxxxx)" value="{{old('thumbnail')}}">
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
                        @enderror" id="title" placeholder="Masukkan judul.." value="{{old('title')}}">
                        @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Textarea</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" name="description" id="description"></textarea>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <a href="{{route('photo.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
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
     $(document).ready(function() {
  $('#description').summernote();
});
    </script>
@endpush
