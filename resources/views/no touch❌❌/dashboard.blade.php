@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Gestion des Sections</h1>

        <ul class="nav nav-tabs" id="adminTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="formation-tab" data-toggle="tab" href="#formation" role="tab" aria-controls="formation" aria-selected="false">Formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="publication-tab" data-toggle="tab" href="#publication" role="tab" aria-controls="publication" aria-selected="false">Publications</a>
            </li>
        </ul>

        <div class="tab-content" id="adminTabContent">
            <div class="tab-pane fade" id="formation" role="tabpanel" aria-labelledby="formation-tab">
                @include('admin.partials.formations')
            </div>
            <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
                @include('admin.partials.services')
            </div>
            <div class="tab-pane fade" id="publication" role="tabpanel" aria-labelledby="publication-tab">
                @include('admin.partials.publications')
            </div>
        </div>
    </div>
@endsection
