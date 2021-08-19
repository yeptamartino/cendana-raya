@extends('layouts.admin-theme')
@section('content')
  <div class="card-header">
    <h5>Detail Galeri Foto</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('photo.index')}}"><i class="fa fa-arrow-circle-left" title="Kembali"></i></a></li>
        </ul>
    </div>
</div>
 <div class="table-responsive">
  <table class="table table-hover">
    <tbody>
    <tr>
        <th><b>Foto</b></th>
        <td><img src="{{asset('images/'.$photo->thumbnail) }}" alt="" style="width:10em"></td>
    </tr>
    <tr>
        <th><b>Judul</b></th>
        <td>{{ $photo->title }}</td>
    </tr>
    <tr>
        <th><b>Deskripsi</b></th>
        <td>{!! $photo->description !!}</td>
    </tr>
</tbody>
</table>
</div>
@endsection