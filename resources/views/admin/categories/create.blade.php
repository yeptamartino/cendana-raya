@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Category</h5>
    </div>
    <div class="card-block">
        <form method="post" action="{{url('category')}}" enctype="multipart/form-data">
            @csrf
          
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control 
                    @error('name') is-invalid placeholder
                    @enderror" id="name" placeholder="Masukkan Nama" value="{{old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

           
           
            <div class="form-group pull-right">
                <a href="{{route('category.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection
