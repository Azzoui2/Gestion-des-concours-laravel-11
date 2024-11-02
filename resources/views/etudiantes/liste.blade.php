<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Liste des CNC hhu</h1>
        <a href="/ajouter" class="btn btn-primary mb-3">Ajouter</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ADMINISTRATION</th>
                    <th>Site</th>
                    <th>Date Cnc</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cnc as $cnc)
                    <tr>
                        <td>{{ $cnc->administration }}</td>
                        <td><a href="{{ strtolower($cnc->site) }}" target="_blank">lien</a></td>

                        <td>{{ $cnc->datecnc }}</td>
                        <td>
                            <a href="/etudiante/modifier/{{ $cnc->id }}" class="btn btn-warning btn-sm">Modifier</a>

                            <form action="/etudiante/supprimer/{{ $cnc->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
