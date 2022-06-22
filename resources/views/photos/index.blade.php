@extends('layouts.page')

@section('content')
    <div class="container" style="padding: 30px;">
        <div class="d-flex justify-content-between flex-direction-row text-right">
            <div style="font-size: 24px;font-weight: 800;">Photos</div>
            <a class="btn" href="upload" style="background-color: #1A7378; color: white">Upload
                Photos</a>
        </div>
        <br />
        <div class="card d-flex justify-content-start flex-direction-row"
            style="border: none; height: 100vh; width:100%; background-color: white; padding: 30px;">
            <div style="font-size: 18px;font-weight: 800;"> Photos goes <span style="color:#1A7378;">here</span>
            </div>
            <br />
            <div>
                <ul class="d-flex justify-content-start flex-direction-row" style="list-style: none">
                    @foreach ($all_photos as $value)
                        <li style="margin-right: 20px">
                            <div>{{ $value->id }}</div>
                            <div>{{ $value->name }}</div>
                            {{-- <div>{{ $value->file_path }}</div> --}}
                            <img src="{{ asset('storage/' . $value->file_path) }}" height="100" width="100" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
