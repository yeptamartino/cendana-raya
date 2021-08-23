@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Track Order</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('about-us.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th>Foto</th>
           <td><img class="img img-responsive" src="{{asset('images/'.$track_order->thumbnail)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$track_order->title}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{!! $track_order->description !!}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$track_order->phone}}</td>
        </tr>
    </table>
</div>
@endsection

