@extends('layouts.main')

@section('content')
<div class="row row-cols-lg-2 row-cols-md-3 mx-4 g-3">
    @foreach ($blogs as $blog)
    <div class="col">
        <div class="card p-4 shadow-sm">
            <h3>{{ $blog['title'] }}</h3>
            <i class="text-secondary">{{ $blog['author'] }}</i>
            <p class="card-text flex-grow-1 mb-4">{{ $blog['excerpt'] }}</p>
            <i class="position-absolute bottom-0 end-0 m-3">
                <a href="detail/{{ $blog['id'] }}" class="link-primary link-offset-1">Show more</a>
            </i>
        </div>
    </div>
    @endforeach
</div>
@endsection