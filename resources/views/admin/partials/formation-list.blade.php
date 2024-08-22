<div class="container">
    <h2>Liste des Formations</h2>
    <table class="table">
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
                    <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline-block;">
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
