@extends('layouts.layout')
@push('styles')
    <style>
        .centre{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-direction: column;
        }
        .centre input,
        .centre button {
            width: 300px;
            height: 50px;
            font-size: 18px;
            border-radius: 8px;
            box-sizing: border-box;
        }
    </style>
@endpush
@section('content')
    <div class="centre">
        <input type="email" name="email" id="email" placeholder="Votre adresse e-mail">
        <button>Se connecter</button>
        <button>S'enregistrer</button>
    </div>
@endsection
