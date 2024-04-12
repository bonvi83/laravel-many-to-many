@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Dettaglio progetto</h1>

            <p><strong>Titolo: </strong>{{ $project->title }}</p>
            <p><strong>Tipo di progetto: </strong>{{ $project->type->label }}</p>
            <p><strong>Descrizione: </strong>{{ $project->content }}</p>
            <p><strong>Categoria: </strong>{!! $project->type->getBadge() !!}</p>
            <p><strong>Link al progetto: </strong>{{ $project->link }}</p>

            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning my-3">Modifica</a>

            @if (!empty($project->image))
                <img src="{{ asset('storage/' . $project->image) }}" alt="">
            @endif
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection