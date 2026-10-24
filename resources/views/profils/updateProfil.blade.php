@extends('layouts.layout')

@section('content')
    <form class ="centre" method="post" action="{{ route('user.update') }}" >
        @csrf
        <input type="text" name="name" id="name" value="{{ $item->name }}"
               value="{{ old('name') }}" required>
        @error('name') <p>{{ $message }}</p> @enderror

        <input type="email" name="email" id="email" value="{{ $item->email }}"
               value="{{ old('email') }}" required>
        @error('email') <p>{{ $message }}</p> @enderror

        <input type="text" name="phone" id="phone" value="{{ $item->phone }}"
               value="{{ old('phone') }}">
        @error('phone') <p>{{ $message }}</p> @enderror

        <button type="submit">Modifier</button>
    </form>
@endsection
