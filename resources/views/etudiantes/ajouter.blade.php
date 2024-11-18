@extends('Etudiantes.layout')


@section('title', 'Ajouter un Étudiant')

@section('content')
    <h1 class="mb-4">Formulaire d'Ajout d'Étudiant</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/ajouter/traitement">
        @csrf
        <div class="form-group">
            <label for="nom">Administration :</label>
            <input type="text" class="form-control" name="administration" id="nom" placeholder="Entrez l'administration">
        </div>
        <div class="form-group">
            <label for="site">Site :</label>
            <input type="text" class="form-control" name="site" id="site" placeholder="Entrez le site">
        </div>
        <div class="form-group">
            <label for="datecnc">Date CNC :</label>
            <input type="date" class="form-control" name="datecnc" id="datecnc" placeholder="Entrez la date CNC">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
