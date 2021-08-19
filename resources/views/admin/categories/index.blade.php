@extends('layouts.admin-theme')
@section('content')
{{-- @include('sweetalert::alert') --}}
<div class="card-header">
    <h5>Daftar Category</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('category.create')}}"><i class="fa fa-plus" title="Tambah categoryan"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="category">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>

                    <td>
                        <a href="{{url('category',$category->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('category',$category->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('category', ['id' => $category->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus, {{$category->name}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection