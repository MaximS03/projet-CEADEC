@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Gestion des Formations</h1>
        <a href="{{ route('formations.create') }}" class="btn btn-primary">Ajouter une nouvelle formation</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table mt-4">
            <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->id }}</td>
                    <td>{{ $formation->title }}</td>
                    <td>{{ $formation->description }}</td>
                    <td>
                        <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
