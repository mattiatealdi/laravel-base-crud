@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>{{ $comic->title }}</h1>

</section>
<section class="container">
    <span class="badge bg-primary">
        {{ $comic->type }}
    </span>
</section>


@endsection
