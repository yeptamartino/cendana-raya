@extends('layouts.admin-theme')

@section('title')
Edit Product
@endsection

@section('content')
<x-card title="Edit Product">
	<form method="post" action="{{url('products',$product->id)}}">
		@csrf
		@method('patch')
		<div class="form-group">
			<label for="name" class="form-label">Nama Produk</label>
			<input type="text" name="name" class="form-control 
				@error('name') is-invalid placeholder
				@enderror" id="name" placeholder="Masukkan Nama Produk" value="{{$product->name}}">
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
            <label for="price_before" class="form-label">Harga Sebelumnya</label>
            <input type="text" name="price_before" class="form-control 
			@error('price_before') is-invalid placeholder
			@enderror" id="price_before" placeholder="Masukkan Haraga Sebelumnya" value="{{old('price_before')}}">
            @error('price')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
		<div class="form-group">
			<label for="price" class="form-label">Harga</label>
			<input type="text" name="price" class="form-control 
			@error('price') is-invalid placeholder
			@enderror" id="price" placeholder="Masukkan Harga" value="{{$product->price}}">
			@error('price')
				<div class="invalid-feedback">{{$message}}</div>
			@enderror
		</div>


		<div class="form-group">
            <label for="quantity" class="form-label">Jumlah Produk</label>
            <input type="text" name="quantity" class="form-control 
			@error('quantity') is-invalid placeholder
			@enderror" id="quantity" placeholder="Masukkan Jumlah Produk" value="{{old('quantity')}}">
            @error('quantity')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="unit" class="form-label">Satuan Produk</label>
            <input type="text" name="unit" class="form-control 
			@error('unit') is-invalid placeholder
			@enderror" id="unit" placeholder="Masuukkan Satuan Produk" value="{{old('unit')}}">
            @error('unit')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" name="description" class="form-control 
			@error('description') is-invalid placeholder
			@enderror" id="description" placeholder="Masukkan Deskripsi" value="{{old('description')}}">
            @error('description')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
		<div class="form-group">
            <label for="category_id">Product Category*</label>
            <select class="form-control" name="category_id">
                <option disabled>Select</option>
                @foreach ($category as $cat)
                  <option value="{{$cat->id}}"  @if (old('category_id') == $cat->id) {{ 'selected' }} @endif>{{$cat->name}}</option>
                @endforeach
            </select>
          </div>
		<button type="submit" class="btn btn-primary my-3">Update Product</button>
	</form>
</x-card>
@endsection
