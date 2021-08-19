@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Daftar Pengumuman</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('pengumuman.create')}}"><i class="fa fa-plus" title="Tambah Calon Peserta"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="pengumuman">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($announcements as $announcement)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                   
                    <td>{{ $announcement->title }}</td>
                    {{-- <td>{{ str_limit($announcement->description),10}}</td> --}}
                    <td>{!! Str::limit($announcement->description)  !!}</td>
                    <td>
                        
                       @if ($announcement->status == 'DRAFT')
                          <label class="label label-inverse-info">DRAFT</label>
                       @else
                          <label class="label label-inverse-success">PUBLISH</label>                      
                       @endif
                    </td>
                    <td>
                        
                        @if($announcement->status == 'PUBLISH')
                        <form action="{{ url('pengumuman/draft', ['id' => $announcement->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-info btn-mini" onclick="return confirm('Draft {{$announcement->title}} ?')">
                               <i class="fa fa-bookmark" title="Draft"></i>
                            </button>
                        </form>

                        @else

                        <form action="{{ url('pengumuman/publish', ['id' => $announcement->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-success btn-mini" onclick="return confirm('Publish {{$announcement->title}} ?')">
                                <i class="fa fa-check" title="Publish"></i>
                            </button>
                        </form>

                        @endif
                        <a href="{{url('pengumuman',$announcement->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('pengumuman',$announcement->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('pengumuman', ['id' => $announcement->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus Artikel, {{$announcement->title}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('styles')
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />
@endpush

@push('scripts')
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#pengumuman').DataTable();
    });
  </script>
@endpush