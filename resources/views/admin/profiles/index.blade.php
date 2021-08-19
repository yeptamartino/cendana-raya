@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Profile</h5>
</div>
<div class="card-block table-border-style">  
    <div class="table-responsive">
        <table class="table table-hover" id="profile">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>{{  Auth::user()->name }}</td>
                    <td>{{  Auth::user()->email }}</td>
                    <td>{{  Auth::user()->phone }}</td>
                    <td>
                        
                       @if ( Auth::user()->status == 'PENDING')
                          <label class="label label-inverse-danger">TERTUNDA</label>
                       @else
                          <label class="label label-inverse-success">DISETUJUI</label>                      
                       @endif
                    </td>
                    <td>
                        <a href="{{url('profile', Auth::user()->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('profile', Auth::user()->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection