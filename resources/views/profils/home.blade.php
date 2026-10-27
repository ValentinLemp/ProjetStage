@extends('layouts.layout')

@push('styles')
    <!-- le style a été fait 100% ia.. -->
    <style>
        .tableau-wrapper {
        max-width: 900px;
        margin: 80px auto 20px;
        padding: 0 15px;
        }

        .tableau-wrapper h2 {
        text-align: center;
        color: white;
        }

        .tableau-scroll {
        max-height: 440px;
        overflow-y: auto;
        border-radius: 10px;
        background: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .tableau {
        width: 100%;
        border-collapse: collapse;
        }

        .tableau th,
        .tableau td {
        padding: 10px 14px;
        text-align: left;
        border-bottom: 1px solid #e5e5e5;
        vertical-align: top;
        }

        .tableau thead th {
        position: sticky;
        top: 0;
        background: #2d3748;
        color: white;
        }

        .tableau tbody tr:nth-child(even) {
        background: #f6f8fa;
        }

        .tableau tbody tr:hover {
        background: #e3f2f0;
        }

        .Btn-add-demande{
            position: absolute;
            bottom: 100px;
            width: 180px;
            height: 50px;
            font-size: 15px;
            border-radius: 8px;
            box-sizing: border-box;
        }
    </style>
@endpush
@push('Btn-footer')
    <button onclick="window.location='{{ route('user.deconnexion') }}'" class="Btn-profil-home">Déconnexion</button>
@endpush

@section('content')
    <div class="tableau-wrapper">
        <h2>Vos demandes</h2>

        <div class="tableau-scroll">
            <table class="tableau">
                <thead>
                <tr>
                    {{-- solution plus dynamique que statique ? --}}
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Date d'échéance</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr onclick="window.location='{{ route('profils.demande.modifier', $item) }}'">
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->statut->label }}</td>
                            <td>{{ $item->dueDate->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="Btn-add-demande" onclick="window.location='{{ route('demande.view.add') }}'">Ajouter une demande</button>
    </div>
@endsection
