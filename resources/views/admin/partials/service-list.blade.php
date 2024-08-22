<div class="container">
    <h2>Liste des Services</h2>
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
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
<?php
