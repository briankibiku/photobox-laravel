@extends('layouts.page')

@section('content')
    <div class="text-left" style="margin:40px;">

        <form method="POST" action="upload">
            @csrf
            <input type="file" name="photo" />
            <input type="submit" name="Upload" />
        </form>
        {{-- <h2 class="text-center">Upload Photo </h2>
        <div class="card-body">
            <form method="post" action="{{ route('upload') }}">
                @csrf

                <div class="row mb-3">
                    <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('Upload photo') }}</label>

                    <div class="col-md-6">
                        <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror"
                            name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tag"
                        class="col-md-4 col-form-label text-md-end">{{ __('Tag (give the photo a special tag)') }}</label>

                    <div class="col-md-6">
                        <input id="tag" type="text" class="form-control @error('tag') is-invalid @enderror"
                            name="tag" value="{{ old('tag') }}" autocomplete="tag" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="tel"
                            class="form-control @error('description') is-invalid @enderror" name="description"
                            autocomplete="description">
                    </div>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary" style="background-color: #1A7378; color: white;">
                            {{ __('Upload') }}
                        </button>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
@endsection
