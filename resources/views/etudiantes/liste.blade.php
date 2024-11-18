@extends('Etudiantes.layout')

@section('title', 'Liste des CNC')

@section('content')
    <h1>Liste des CNC</h1>
    <a href="/ajouter" class="btn btn-primary mb-3">Ajouter</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ADMINISTRATION</th>
                <th>Site</th>
                <th>Date CNC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cnc as $cnc)
                <tr>
                    <td>{{ $cnc->administration }}</td>
                    <td><a href="{{ strtolower($cnc->site) }}" target="_blank">Lien</a></td>
                    <td>{{ $cnc->datecnc }}</td>
                    <td>
                        <a href="/etudiante/modifier/{{ $cnc->id }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="/etudiante/supprimer/{{ $cnc->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
