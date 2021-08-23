@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Track Order</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('track-order.create')}}"><i class="fa fa-plus" title="Tambah About Us"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="track_order">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($track_orders as $track_order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img class="img img-responsive" src="{{asset('images/'.$track_order->thumbnail)}}" style="width:10em;"></td>
                    <td>{{ $track_order->title }}</td>
                    <td>{!! $track_order->description !!}</td>
                    <td>
                        
                       @if ($track_order->status == 'DRAFT')
                          <label class="label label-inverse-info">DRAFT</label>
                       @else
                          <label class="label label-inverse-success">PUBLISH</label>                      
                       @endif
                    </td>
                    <td>
                        
                        @if($track_order->status == 'PUBLISH')
                        <form action="{{ url('admin/track-order/draft', ['id' => $track_order->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-info btn-mini" onclick="return confirm('Draft {{$track_order->title}} ?')">
                               <i class="fa fa-bookmark" title="Draft"></i>
                            </button>
                        </form>

                        @else

                        <form action="{{ url('admin/track-order/publish', ['id' => $track_order->id]) }}" method="POST" style="display: inline-block;">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-success btn-mini" onclick="return confirm('Publish {{$track_order->title}} ?')">
                                <i class="fa fa-check" title="Publish"></i>
                            </button>
                        </form>

                        @endif
                        <a href="{{url('admin/track-order',$track_order->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('admin/track-order',$track_order->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                        <form action="{{ url('track-order/track_order', ['id' => $track_order->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Anda Yaki Ingin Menghapus track_order, {{$track_order->title}}?')"><i class="fa fa-trash" title="Hapus"></i></button>
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
      $('#track_order').DataTable();
    });
  </script>
@endpush