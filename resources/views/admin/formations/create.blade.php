@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Ajouter une Formation</h1>
        <form action="{{ route('formations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="duree">Durée (en mois)</label>
                <input type="number" name="duree" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_debut">Date de début</label>
                <input type="date" name="date_debut" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_fin">Date de fin</label>
                <input type="date" name="date_fin" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lieu">Lieu</label>
                <input type="text" name="lieu" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
@endsection
