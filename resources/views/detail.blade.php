@extends('layouts.main')

@section('content')
<div class="d-flex flex-column mx-5">
    <article class="card p-4 flex-grow-1 mb-5">
        <h1>{{ $data['title'] }}</h1>
        <i class="text-secondary">{{ $data['author'] }}</i>
        {!! $data['body'] !!}
    </article>
    <p><a href="/" class="link-primary link-offset-1">Back</a></p>
</div>
@endsection

