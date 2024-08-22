<div class="container">
    <h2>@if(isset($formation)) Modifier la @else Ajouter une @endif formation</h2>
    <form action="@if(isset($formation)) {{ route('formations.update', $formation->id) }} @else {{ route('formations.store') }} @endif" method="POST">
        @csrf
        @if(isset($formation))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $formation->title ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ $formation->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">@if(isset($formation)) Mettre à jour @else Créer @endif</button>
    </form>
</div>
