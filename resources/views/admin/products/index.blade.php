@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Daftar Produk</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('product.create')}}"><i class="fa fa-plus" title="Tambah product"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="product">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Diskon</th>
                  <th>Harga</th>
                  <th>Deskripsi</th>
                  <th>Category</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img class="img img-responsive" src="{{asset('images/'.$product->thumbnail)}}" style="width:10em;"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{!! $product->description !!}</td>
                    <td>{{ $product->category->name }}</td>

                    <td>
                        <a href="{{url('product',$product->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye"title="Detail"></i></a>
                        <a href="{{url('product',$product->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('product', ['id' => $product->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini"
                                onclick="return confirm('Anda Yaki Ingin Menghapus product, {{$product->title}}?')"><i
                                    class="fa fa-trash" title="Hapus"></i></button>
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
    $(document).ready(function () {
        $('#product').DataTable();
    });

</script>
@endpush
