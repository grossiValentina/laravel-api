@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center p-3">Modifica un Progetto</h2>

        <div class="row pt-3">
            <div class="col-6">

                <form class="mb-3" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="titolo" name="titolo"
                            value="{{ $project->titolo }}">
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="descrizione" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizione" rows="3">{{ $project->descrizione }}</textarea>
                    </div>

                    <div>
                        <h6>Seleziona:</h6>
                        @foreach ($technologies as $technology)

                            <div class="form-check form-switch">
                                <input @checked($project->technologies->contains($technology))
                                class="form-check-input" type="checkbox" id="technology-{{ $technology->id }}"
                                    value="{{ $technology->id }}" name="technologies[]">
                                <label class="form-check-label" for="technology-{{ $technology->id }}">
                                    {{ $technology->nome }}</label>
                            </div>

                        @endforeach
                    </div>

                    <button class="btn btn-success mt-4" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
