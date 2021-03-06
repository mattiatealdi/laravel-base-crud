@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>Comics</h1>
    @if (session('deleted'))
        <div class="alert alert-success" role="alert">

        </div>
    @endif
</section>

    <section class="container">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Type</th>
                <th colspan="3">Actions</th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">SHOW</a></td>
                        <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">EDIT</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section class="container">
        {{ $comics->links() }}
    </section>

@endsection
