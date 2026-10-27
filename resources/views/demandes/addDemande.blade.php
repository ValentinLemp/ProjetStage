@extends('layouts.layout')
@section('content')
    <form class="centre" method="POST" action="{{ route('demande.add') }}">
        @csrf

        <input type="text" name="title" id="title" placeholder="Entrez votre titre"
               value="{{ old('title') }}" required>
        @error('title') <p>{{ $message }}</p> @enderror

        <input type="text" name="description" id="description" placeholder="Entrez votre description"
               value="{{ old('description') }}" required>
        @error('description') <p>{{ $message }}</p> @enderror

        <input type="date" name="dueDate" id="dueDate"
               value="{{ old('dueDate') }}" required>
        @error('dueDate') <p>{{ $message }}</p> @enderror

        <button type="submit">Enregistrer</button>
    </form>
@endsection
