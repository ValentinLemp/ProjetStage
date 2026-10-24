@extends('layouts.layout')

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
