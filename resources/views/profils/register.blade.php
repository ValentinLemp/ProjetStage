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
        <form class="centre" method="POST" action="{{ route('user.add') }}">
            @csrf

            <input type="text" name="name" id="name" placeholder="Entrez votre nom"
                   value="{{ old('name') }}" required>
            @error('name') <p>{{ $message }}</p> @enderror

            <input type="email" name="email" id="email" placeholder="Entrez votre email"
                   value="{{ old('email') }}" required>
            @error('email') <p>{{ $message }}</p> @enderror

            <input type="text" name="phone" id="phone" placeholder="Entrez votre numéro de téléphone"
                   value="{{ old('phone') }}">
            @error('phone') <p>{{ $message }}</p> @enderror

            <button type="submit">Enregistrer</button>
        </form>
@endsection
