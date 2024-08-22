<div class="container">
    <h2>@if(isset($service)) Modifier le @else Ajouter un @endif service</h2>
    <form action="@if(isset($service)) {{ route('services.update', $service->id) }} @else {{ route('services.store') }} @endif" method="POST">
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $service->title ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" required>{{ $service->description ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">@if(isset($service)) Mettre à jour @else Créer @endif</button>
    </form>
</div>
