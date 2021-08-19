@extends('layouts.admin-theme')
@section('content')
<x-dashboard-header></x-dashboard-header>
<!-- Page-header end -->
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Pengumuman</h5>
            </div>
            @if (count($announcements) > 0)
            @foreach($announcements as $announcement)
            <div class="card-block accordion-block">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="accordion-panel">
                        <div class="accordion-heading" role="tab" id="{{ $announcement->title }}">
                            <h3 class="card-title accordion-title">
                                <a class="accordion-msg waves-effect waves-dark scale_active collapsed"
                                    data-toggle="collapse" data-parent="#accordion" href="#{{ $announcement->id }}"
                                    aria-expanded="false" aria-controls="{{ $announcement->id }}">
                                    {{ $announcement->title }}
                                </a>
                            </h3>
                        </div>
                        <div id="{{ $announcement->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="{{ $announcement->id }}">
                            <div class="accordion-content accordion-desc">
                                <p>
                                    @if($announcement->thumbnail)
                                    <img class="img img-responsive" src="{{url($announcement->thumbnail)}}" style="width:20em; margin:20px">
                                    @endif
                                </p>
                                <p>
                                    {!! $announcement->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <tr>
                <td>
                    Belum Ada Pengumuman
                </td>
            </tr>
            @endif
            @endsection
