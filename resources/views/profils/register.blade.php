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
        <form class="centre">
            <input type="text" name="name" id="name" placeholder="Entrez votre nom" required>
            <input type="email" name="email" id="email" placeholder="Entrez votre email" required>
            <input type="text" name="phone" id="phone" placeholder="Entrez votre numéro de téléphone">
            <button>Enregistrer</button>
        </form>
@endsection
