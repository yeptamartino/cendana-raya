@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Pemesanan</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('boking.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
		<tr>
            <th>Nama</th>
            <td>{{$boking->name}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{$boking->address}}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$boking->phone}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$boking->email}}</td>
        </tr>
        <tr>
            <th>Tanggal Acara</th>
            <td>{{$boking->booking_day}}</td>
        </tr>
        <tr>
            <th>Catatan</th>
            <td>{{$boking->note}}</td>
        </tr>
    </table>
</div>
@endsection

