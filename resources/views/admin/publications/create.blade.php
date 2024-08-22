@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Gestion des Publications</h1>
        <a href="{{ route('publications.create') }}" class="btn btn-primary">Ajouter une nouvelle publication</a>
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
            @foreach($publications as $publication)
                <tr>
                    <td>{{ $publication->id }}</td>
                    <td>{{ $publication->title }}</td>
                    <td>{{ $publication->description }}</td>
                    <td>
                        <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" style="display:inline;">
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
