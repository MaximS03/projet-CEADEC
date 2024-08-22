<div class="container">
    <h2>@if(isset($publication)) Modifier la @else Ajouter une @endif publication</h2>
    <form action="@if(isset($publication)) {{ route('publications.update', $publication->id) }} @else {{ route('publications.store') }} @endif" method="POST">
        @csrf
        @if(isset($publication))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $publication->title ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ $publication->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">@if(isset($publication)) Mettre à jour @else Créer @endif</button>
    </form>
</div>
