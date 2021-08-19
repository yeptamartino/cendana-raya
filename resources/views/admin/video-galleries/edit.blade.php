@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Galeri Video</h5>
    </div>
    <div class="card-block">
        <form method="post" action="{{url('video',$video->id)}}" enctype="multipart/form-data">
			@method('PATCH')
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Url Yutube</label>
                <div class="col-sm-10">
                    <input type="text" name="url_youtube" class="form-control 
                    @error('url_youtube') is-invalid placeholder
                    @enderror" id="url_youtube" placeholder="Masukkan Url Youtube" value="{{$video->url_youtube}}">
                    @error('url_youtube')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <code>Note: URL Youtube.</code>
                </div>
            </div>
           
            <div class="form-group pull-right">
                <a href="{{route('video.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection