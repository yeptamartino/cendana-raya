@extends('layouts.admin-theme')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Pengumuman</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><a href="{{route('pengumuman.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-block">
	<table class="table table-hover">
		<tr>
            <th>Nama</th>
            <td>{{$announcement->title}}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{!! $announcement->description !!}</td>
        </tr>
    </table>
</div>
@endsection

