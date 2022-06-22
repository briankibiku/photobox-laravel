@extends('layouts.page')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="d-flex justify-content-between flex-direction-row text-right">
            <div style="font-size: 24px;font-weight: 800;">Dashboard</div>
            <a class="btn" href="add-image" style="background-color: #1A7378; color: white">Upload
                Photos</a>
        </div>
        <br />
        <div class="card d-flex justify-content-between flex-direction-row"
            style="border: none; height: 20vh; width:100%; background-color: white; padding: 30px;">
            <div>
                <div style="font-size: 24px;font-weight: 800;"> Welcome to <span style="color:#1A7378;">Photobox</span>
                    Dashboard
                </div>
                <div style="font-size: 16px;font-weight: 500;"> Safe, secure, storage for those rear monents</div>
            </div>
        </div>
        <br />
        <div style="border: none; height: 20vh; width:100%; padding: 30px;">
            <div style="font-size: 26px; font-weight: 600">
                Overview</div>
            <div class="d-flex flex-direction-row justify-content-between">
                <div class="card"
                    style="width: 20vw; padding: 10px; border: none; border-radius: 10px; font-size: 16px; font-weight: 600">
                    Uploaded Photos
                    <div style="font-size: 28px; font-weight: 800">1,200</div>
                </div>
                <div class="card"
                    style="width: 20vw; padding: 10px; border: none; border-radius: 10px; font-size: 16px; font-weight: 600">
                    Number of
                    Collections
                    <div style="font-size: 28px; font-weight: 800">20</div>
                </div>
                <div class="card"
                    style="width: 20vw; padding: 10px; border: none; border-radius: 10px; font-size: 16px; font-weight: 600">
                    Storage Left
                    <div style="font-size: 28px; font-weight: 800">16 GB</div>
                </div>
            </div>
            <br />
            <div> <a class="btn" href="upload" style="background-color: #1A7378; color: white">Upload 1 Photo</a> <a
                    class="btn" href="upload" style="background-color: #1A7378; color: white">Upload Multiple Photo</a>
            </div>
        </div>
    </div>
@endsection
