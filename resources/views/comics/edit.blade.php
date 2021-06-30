@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>Modifica:
        <a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a>
    </h1>
</section>
    <div class="row col-8 offset-2 container my-4">
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="title" id="title" name="title" class="form-control" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea type="text" id="text" name="text" class="form-control">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic type</label>
                <input type="title" id="type" name="type" class="form-control" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic series</label>
                <input type="title" id="series" name="series" class="form-control" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic image</label>
                <input type="title" id="image" name="image" class="form-control" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Comic price</label>
                <input type="title" id="price" name="price" class="form-control" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic released</label>
                <input type="title" id="date" name="date" class="form-control" value="{{ $comic->sale_date }}">
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <button type="reset" class="btn btn-secondary">RESET</button>
        </form>
    </div>



@endsection
