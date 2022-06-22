@extends('layouts.page')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="d-flex justify-content-between flex-direction-row text-right">
            <div style="font-size: 24px;font-weight: 800;">My Collections</div>
            <a class="btn" href="add-image" style="background-color: #1A7378; color: white">Upload
                Photos</a>
        </div>
        <br />
        <div class="card d-flex justify-content-between flex-direction-row"
            style="border: none; height: 20vh; width:100%; background-color: white; padding: 30px;">
            <div style="font-size: 18px;font-weight: 800;"> Photos goes <span style="color:#1A7378;">here</span>
            </div>
        </div>
    </div>
@endsection
