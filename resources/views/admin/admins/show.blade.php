@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Admin</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('admin.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th col="6">Foto</th>
           <td><img class="img img-responsive" src="{{url($admin->photo)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$admin->name}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{!! $admin->address !!}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$admin->phone}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$admin->email}}</td>
        </tr>
    </table>
</div>
@endsection

