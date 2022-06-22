@extends('layouts.page')

@section('content')
    <div class="container">
        <div>
            <div style="font-size: 24px;font-weight: 800;">Upload Photo</div>
        </div>
        <br />
        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Upload photo') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                    @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label text-md-end"></label>

                <div class="col-md-6">
                    @if (session()->has('success'))
                        <div>
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        </div>
                    @endif
                </div>
            </div>


            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" style="background-color: #1A7378; color: white;">
                        {{ __('Upload') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
