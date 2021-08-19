@extends('layouts.admin-theme')
@section('content')
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card-header">
    <h5>Galeri Foto</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('photo.create')}}"><i class="fa fa-plus" title="Tambah Galeri Video"></i></a></li>
        </ul>
    </div>
</div>
 <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Judul</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($photos as $photo)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><img src="{{asset('images/'.$photo->thumbnail) }}" alt="" style="width:10em"></td>
        <td>{{ $photo->title }}</td>
        <td>
          <a href="{{route('photo.show',$photo->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a>
          <a href="{{url('photo',$photo->id)}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
          <form action="{{route('photo.destroy',$photo->id)}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Hapus Video"></i></button>
        </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
@endsection