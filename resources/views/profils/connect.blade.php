@extends('layouts.layout')

@section('content')
        <form class="centre" method="post" action="{{ route('user.connexion') }}">
            @csrf
            <input type="email" name="email" id="email" placeholder="Votre adresse e-mail"
                   value="{{ old('email') }}" required>
            @error('email') <p>{{ $message }}</p> @enderror
            <button type="submit">Se connecter</button>
            <button onclick="window.location='{{ route('profils.register') }}'">S'enregistrer</button>
        </form>
@endsection
