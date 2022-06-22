@extends('layouts.app')

@section('content')
    <div class="container">

        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-8  bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg" style="padding: 40px">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div>
                            <div style="font-size: 24px;font-weight: 800;"> Welcome to <span
                                    style="color:#1A7378;">Photobox</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="ml-6 text-sm leading-7 font-medium">
                            <h5>Choose to login or register</h5>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-black-600 dark:text-black-800 text-sm">

                            {{-- {{ __('This is the landing page') }} --}}
                            <a class="btn btn-primary" href="/login">Login</a>
                            <a class="btn btn-success" href="/register">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
