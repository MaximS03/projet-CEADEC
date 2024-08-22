@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Ajouter un nouveau service</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
