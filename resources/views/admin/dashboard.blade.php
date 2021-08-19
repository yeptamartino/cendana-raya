@extends('layouts.admin-theme')
@section('content')
<x-dashboard-header></x-dashboard-header>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->

<div class="card-header">
    <h5>Daftar User Baru <label class="badge badge-warning">{{$total_candidates}}</label></h5>
</div>
<div class="card-block table-border-style">
    <form action="{{ route('calon.peserta.verifyMultiple') }}" enctype="multipart/form-data" method="POST">
        @method('PUT')
        @csrf

    <div class="table-responsive">
        @if(count($candidates) > 0)
        <div class="form-group">
            <input type="submit" name="submit_verifikasi" value="Setujui" class="btn btn-mini btn-success" title="Setujui">
        </div>
        <table class="table table-hover" id="calon-peserta">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>
                       <div class="form-check">
                            <input id="check-all" class="form-check-input" type="checkbox" value="PILIH SEMUA">Pilih
                        </div>
                    </th>

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
                    <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="selected_candidates[]" value="{{ $candidate->id }}">
                        </div>
                      </td>

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

                        <a href="{{url('calon-peserta',$candidate->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('calon-peserta',$candidate->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                    </td>
                </tr>
                @endforeach
                 @else
                 <tr>
                    <td colspan="4">
                        Belum Ada Calon Peserta
                    </td>
                </tr>
                 @endif
            </tbody>
        </table>
    </div>
</form>
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
