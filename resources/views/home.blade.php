@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('partials.sidebar')
        <main class="col-md-9">
            <header>
                <img class="profile" src="{{ $profile->img }}">
                <h1>{{ Auth::user()->name }}</h1>
            </header>
            <section class="user-posts mt-5">
                @foreach($posts as $post) {{-- Loop through each post --}}
                    <article class="card mb-3">
                        <header class="card-header">
                            <h3>{{ $post->title }}</h3>
                        </header>
                        <section class="card-body">
                            <p class="card-text">{{ $post->body }}</p>
                        </section>
                    </article>
                @endforeach
            </section>
        </main>
    </div>
</div>
@endsection
