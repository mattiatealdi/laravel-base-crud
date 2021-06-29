@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>Create Comic
    </h1>
</section>
    <div class="row col-8 offset-2 container my-4">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="title" id="title" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea type="text" id="text" name="text" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic type</label>
                <input type="title" id="type" name="type" class="form-control">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic series</label>
                <input type="title" id="series" name="series" class="form-control">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic image</label>
                <input type="title" id="image" name="image" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Comic price</label>
                <input type="title" id="price" name="price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic released</label>
                <input type="title" id="date" name="date" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">SUBMIT</button>
            <button type="reset" class="btn btn-secondary">RESET</button>
        </form>
    </div>



@endsection
