@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Daftar User</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('calon-peserta.create')}}"><i class="fa fa-plus" title="Tambah User"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">  
    <div class="table-responsive">
        <table class="table table-hover" id="calon-peserta">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $candidate->name }}</td>
                    <td>{{ $candidate->email }}</td>
                    <td>{{ $candidate->phone }}</td>
                    <td>
                        
                       @if ($candidate->status == 'PENDING')
                          <label class="label label-inverse-danger">TERTUNDA</label>
                       @else
                          <label class="label label-inverse-success">DISETUJUI</label>                      
                       @endif
                    </td>
                    <td>
                        
                        @if($candidate->status == 'APPROVED')
                        <form action="{{ url('calon-peserta/banned', ['id' => $candidate->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Apakah Anda Yakin Ingin Meolak {{$candidate->name}} ?')">
                               <i class="fa fa-times-rectangle" title="Tolak"></i>
                            </button>
                        </form>

                        @else

                        <form action="{{ url('calon-peserta/approved', ['id' => $candidate->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-success btn-mini" onclick="return confirm('Apakah Anda Yakin Ingin Menyetujui {{$candidate->name}} ?')">
                                <i class="fa fa-check" title="Terima"></i>
                            </button>
                        </form>

                        @endif
                        <a href="{{url('calon-peserta',$candidate->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('calon-peserta',$candidate->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('calon-peserta', ['id' => $candidate->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus, {{$candidate->name}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
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
      $('#calon-peserta').DataTable();
    });
  </script>
@endpush
