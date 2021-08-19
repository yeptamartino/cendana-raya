@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit User</h5>
    </div>
    <div class="card-block">
	<form method="post" action="{{url('calon-peserta',$candidate->id)}}" enctype="multipart/form-data">
		@csrf
		@method('patch')
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Foto</label>
			<div class="col-sm-10">
				<img class="img img-responsive" src="{{url($candidate->photo)}}" style="width:10em; padding-bottom:1em">
				<input type="file" name="photo" class="form-control 
				@error('photo') is-invalid placeholder
				@enderror" id="photo" placeholder="Masukkan Nama" value="{{$candidate->photo}}">
				@error('photo')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div> 
		
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="name" class="form-control 
				@error('name') is-invalid placeholder
				@enderror" id="name" placeholder="Masukkan Nama" value="{{$candidate->name}}">
				@error('name')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" name="address" class="form-control 
				@error('address') is-invalid placeholder
				@enderror" id="address" placeholder="Masukkan Alamat" value="{{$candidate->address}}">
				@error('address')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Telepon</label>
			<div class="col-sm-10">
				<input type="number" name="phone" class="form-control 
				@error('phone') is-invalid placeholder
				@enderror" id="phone" placeholder="Masukkan Nomor Telepon" value="{{$candidate->phone}}">
				@error('phone')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" name="email" class="form-control 
				@error('email') is-invalid placeholder
				@enderror" id="email" placeholder="Masukkan Email" value="{{$candidate->email}}">
				@error('email')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-10">
				<input type="password" name="Password" class="form-control 
				@error('Password') is-invalid placeholder
				@enderror" id="Password" placeholder="Masukkan Password" value="{{$candidate->password}}">
				@error('Password')
				<div class="invalid-feedback">{{$message}}</div>
				@enderror
			</div>
		</div>
	   
		<div class="form-group pull-right">
			<a href="{{route('calon-peserta.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</div>
	</form>
</div>
@endsection

