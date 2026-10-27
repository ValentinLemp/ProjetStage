@extends('layouts.layout')
@push('styles')
    <style>
        .error {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            color: white;
            text-align: center;
        }
        .error h1 {
            font-size: 80px;
            margin: 0;
        }
    </style>
@endpush
@section('content')
    <div class="error">
        <h1>404</h1>
        <p>Cette page n'existe pas.</p>
    </div>
@endsection

