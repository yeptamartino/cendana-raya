@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Calon Peserta</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('calon-peserta.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th>Foto</th>
           <td><img class="img img-responsive" src="{{url($candidate->photo)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$candidate->name}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{$candidate->address}}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$candidate->phone}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$candidate->email}}</td>
        </tr>
    </table>
</div>
@endsection

