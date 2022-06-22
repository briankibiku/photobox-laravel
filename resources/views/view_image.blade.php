@extends('layouts.page')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-direction-row text-right">
            <div style="font-size: 24px;font-weight: 800;">Photos</div>
            <a class="btn" href="add-image" style="background-color: #1A7378; color: white">Upload
                Photos</a>
        </div>
        <br />
        <div class="row">
            <div class="col-sm" style="background-color:#197378; margin: 10px; padding:20px">
                @foreach ($imageData as $data)
                    <img src="{{ url('public/Image/' . $data->image) }}"
                        style="height: 100px; margin-bottom:10px; margin-right:10px; width: 150px;">
                @endforeach
            </div>
        </div>
    </div>
@endsection
