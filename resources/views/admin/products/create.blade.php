@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Product</h5>
    </div>
    <div class="card-block">
        <form method="post" action="{{url('product')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="thumbnail" class="form-label">Foto Produk</label>
                <input type="file" class="form-control-files" for="thumbnail" name="thumbnail">
    
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control 
                @error('name') is-invalid placeholder
                @enderror" id="name" placeholder="Masukkan Nama Produk" value="{{old('name')}}">
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="discount" class="form-label">Diskon</label>
                <input type="text" name="discount" class="form-control 
                @error('discount') is-invalid placeholder
                @enderror" id="discount" placeholder="Masukkan Diskon" value="{{old('discount')}}">
                @error('discount')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Harga</label>
                <input type="text" name="price" class="form-control 
                @error('price') is-invalid placeholder
                @enderror" id="price" placeholder="Masukkan Harga" value="{{old('price')}}">
                @error('price')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="descriptions"></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Product Category*</label>
                <select name="category_id" class="form-control">
                  @foreach($category as $cat)
                      <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary my-3">Tambah Produk</button>
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
        $('#descriptions').summernote();
    });

</script>
@endpush
