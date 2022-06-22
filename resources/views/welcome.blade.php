@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            Brand Logo
        </div>

        <div class="mt-8  bg-white dark:bg-gray-800 p-10 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"> <h2>Choose to login or register</h2>   
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-black-600 dark:text-black-800 text-sm">                                 
                            
                            {{ __('This is the landing page') }}
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