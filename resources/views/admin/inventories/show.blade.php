@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail About Us</h5>
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
           <td><img class="img img-responsive" src="{{url($article->thumbnail)}}" style="width:10em;"></td>
       </tr>
		<tr>
            <th>Nama</th>
            <td>{{$article->title}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{!! $article->description !!}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{$article->phone}}</td>
        </tr>
    </table>
</div>
@endsection

