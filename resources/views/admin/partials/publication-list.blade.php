<div class="container">
    <h2>Liste des Publications</h2>
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
        @foreach($publications as $publication)
            <tr>
                <td>{{ $publication->id }}</td>
                <td>{{ $publication->title }}</td>
                <td>{{ $publication->description }}</td>
                <td>
                    <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" style="display:inline-block;">
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
