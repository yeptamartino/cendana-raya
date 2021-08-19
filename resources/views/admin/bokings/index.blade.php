@extends('layouts.admin-theme')
@section('content')
{{-- @include('sweetalert::alert') --}}
<div class="card-header">
    <h5>Daftar Pemesanan</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('boking.create')}}"><i class="fa fa-plus" title="Tambah Bokingan"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="boking">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bokings as $boking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $boking->name }}</td>
                    <td>{{ $boking->email }}</td>
                    <td>{{ $boking->phone }}</td>
                    <td>{{ $boking->address }}</td>
                    <td>{{ $boking->booking_day }}</td>

                    <td>
                        <a href="{{url('boking',$boking->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        {{-- <a href="{{url('boking',$boking->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('boking', ['id' => $boking->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus, {{$boking->name}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
                        </form> --}}
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
      $('#boking').DataTable();
    });
  </script>
@endpush
