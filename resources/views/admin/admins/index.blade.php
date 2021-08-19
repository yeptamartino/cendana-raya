@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Daftar Admin</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('admin.create')}}"><i class="fa fa-plus" title="Tambah Admin"></i></a></li>
        </ul>
    </div>
</div>

<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="admin">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $admin)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>
                        <a href="{{url('admin',$admin->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('admin',$admin->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('admin', ['id' => $admin->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus Data, {{$admin->name}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
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
      $('#admin').DataTable();
    });
  </script>
@endpush
