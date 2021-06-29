@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>{{ $comic->title }}</h1>

</section>
<section class="container">
    <span class="badge bg-primary my-5">
        {{ $comic->type }}
    </span>
    <span>
        Price: $ {{ $comic->price }}
        Availible form: {{ $comic->sale_date }}
    </span>
</section>
<section class="container">
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}"> << Back </a>
</section>



@endsection
