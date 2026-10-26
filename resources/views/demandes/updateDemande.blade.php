@extends('layouts.layout')

@section('content')
    <form class ="centre" method="post" action="{{ route('demande.update', $item) }}" >
        @csrf
        <input type="text" name="title" id="title" value="{{ $item->title }}"
               value="{{ old('title') }}" required>
        @error('title') <p>{{ $message }}</p> @enderror

        <input type="text" name="description" id="description" value="{{ $item->description }}"
               value="{{ old('description') }}" required>
        @error('description') <p>{{ $message }}</p> @enderror

        <select name="statut_id" id="statut_id" required>
            @foreach($statuts as $statut)
                <option value="{{ $statut->id }}" @selected($item->statut->id == $statut->id)>{{ $statut->label }}</option>
            @endforeach
        </select>

        <button type="submit">Modifier</button>
    </form>
@endsection

@push('Btn-footer')
    <button onclick="window.location='{{ route('demande.delete', $item)}}'" class="Btn-profil-home">Supprimer</button>
@endpush
