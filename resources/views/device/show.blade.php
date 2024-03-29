@extends('layouts.farmer.detail-base', ['land' => $land])

@section('meta_title', 'Land ' . $land->name)
@section('page_title', 'Land ' . $land->name)
@section('page_title_icon')
    <em class="metismenu-icon bi bi-columns-gap"></em>
@endsection
@breadcrumbs([
    'Lahan' => route('lands.index'),
    $land->name => route('lands.show', $land->id),
    'Devices' => route('lands.devices.index', $land->id),
    $device->name,
])
@section('css')
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
            margin-top: 10px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <ul class="nav nav-justified">
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link active">Overview</a>
                        </li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Live Data</a>
                        </li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Pengaturan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
                            {{-- node name --}}
                            <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-primary">id</div>
                            <strong>ID:</strong> {{ $device->id }}<br>
                            <div class="mb-2 mr-2 badge badge-dot badge-dot-sm badge-primary">id</div>
                            <strong>Nama:</strong> {{ $device->name }}<br>
                        </div>
                        <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
                            @include('components.device.live-data')
                        </div>
                        <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
                            @include('components.device.settings')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

@endsection
