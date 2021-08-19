@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Bokingan</h5>
    </div>
    <div class="card-block">
        <form method="post" action="{{url('boking')}}" enctype="multipart/form-data">
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

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control 
                    @error('address') is-invalid placeholder
                    @enderror" id="address" placeholder="Masukkan Alamat" value="{{old('address')}}">
                    @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control 
                    @error('email') is-invalid placeholder
                    @enderror" id="email" placeholder="Masukkan Email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="number" name="phone" class="form-control 
                    @error('phone') is-invalid placeholder
                    @enderror" id="phone" placeholder="Masukkan Nomor Telepon" value="{{old('phone')}}">
                    @error('phone')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hari Pemesanan</label>
                <div class="col-sm-10">
                    <input type="date" name="booking_day" class="form-control 
                    @error('booking_day') is-invalid placeholder
                    @enderror" id="booking_day" placeholder="Masukkan Tanggal Pemesanan" value="{{old('booking_day')}}">
                    @error('booking_day')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Note</label>
                <div class="col-sm-10">
                    <input type="text" name="note" class="form-control 
                    @error('note') is-invalid placeholder
                    @enderror" id="note" placeholder="Masukkan Nomor Note" value="{{old('note')}}">
                    @error('note')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>         
           
            <div class="form-group pull-right">
                <a href="{{route('boking.index')}}" class="btn btn-success btn-outline-success btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>


@endsection
