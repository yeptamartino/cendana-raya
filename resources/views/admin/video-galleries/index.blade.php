@extends('layouts.admin-theme')
@section('content')
@include('sweetalert::alert')
<div class="card-header">
    <h5>Galeri Video</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('video.create')}}"><i class="fa fa-plus" title="Tambah Galeri Video"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover" id="video">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Video</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <iframe width="315" height="150" src="https://www.youtube.com/embed/{{($video->url_youtube)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </td>
                    <td>
                        <a href="{{url('video',$video->id)}}" class="btn btn-primary btn-mini"><i class="fa fa-eye" title="Detail"></i></a>
                        <a href="{{url('video',$video->id)}}/edit" class="btn btn-warning btn-mini"><i class="fa fa-edit" title="Edit"></i></a>
                          <form action="{{ url('video', ['id' => $video->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-mini" onclick="return confirm('Delete Data?')"><i class="fa fa-trash" title="Hapus Video"></i></button>
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
      $('#video').DataTable();
    });
  </script>
@endpush