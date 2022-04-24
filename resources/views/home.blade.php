@extends('layout')

@section('content')
    <div class="flex h-screen">
        <div class="m-auto text-center">
            <h1 class="text-4xl font-bold">
                {{ $quote }}
            </h1>
            <p class="mt-12 font-bold text-black/50">
                Share this link to spread some joy<br>
                <span class="text-blue-500">{{ config('app.url') }}/{{ $key }}</span>
            </p>
        </div>
    </div>
@stop
