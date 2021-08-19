@extends('layouts.admin-theme')
@section('content')
<div class="card-header">
    <h5>Detail Galeri Video</h5>
    <div class="card-header-right">
        <ul class="list-unstyled card-option">
            <li><a href="{{route('video.index')}}"><i class="fa fa-undo" title="Kembali"></i></a></li>
        </ul>
    </div>
</div>
<div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Video Alternatif Youtube</th>
                    <td>
                    <iframe width="315" height="150" src="https://www.youtube.com/embed/{{($video->url_youtube)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
