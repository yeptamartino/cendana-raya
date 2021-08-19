@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Product</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('product.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
       <tr>
           <th>Foto</th>
           <td><img class="img img-responsive" src="{{asset('images/'.$product->thumbnail)}}" style="width:30em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$product->name}}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{!! $product->description !!}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{$product->price}}</td>
        </tr>
    </table>
</div>
@endsection

