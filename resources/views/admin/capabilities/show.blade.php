@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Capability</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('capability.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th>Foto</th>
           <td><img class="img img-responsive" src="{{url($capability->thumbnail)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$capability->title}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{!! $capability->description !!}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$capability->phone}}</td>
        </tr>
    </table>
</div>
@endsection

