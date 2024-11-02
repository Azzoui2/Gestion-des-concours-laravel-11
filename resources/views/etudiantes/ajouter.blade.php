<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Ajout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulaire d'Ajout d'Étudiant</h1>

        <!-- Affichage des messages de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Affichage des messages d'erreur -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Affichage des erreurs de validation -->
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
                <label for="nom">Adminstration  :</label>
                <input type="text" class="form-control" name="administration" id="nom" placeholder="Entrez le nom">
            </div>
            <div class="form-group">
                <label for="prenom">Site :</label>
                <input type="text" class="form-control" name="site" id="prenom" placeholder="Entrez le prénom">
            </div>
            <div class="form-group">
                <label for="age">Date cnc :</label>
                <input type="date" class="form-control" name="datecnc" id="age" min="1" max="120" placeholder="Entrez l'âge">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
