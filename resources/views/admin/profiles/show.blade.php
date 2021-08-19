@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Profile</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('profile.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th>Foto</th>
           <td><img class="img img-responsive" src="{{url($profile->photo)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$profile->name}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{$profile->address}}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$profile->phone}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$profile->email}}</td>
        </tr>
    </table>
</div>
@endsection

