@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('partials.sidebar')
        <main class="col-md-6">
            <header>
                <h1>Create a Post</h1>
            </header>
            <section class="user-posts mt-5">
                @include ('partials.errors')
                <form method="POST" action="{{ URL::to('/create') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Body (Max characters 500)</label>
                        <textarea class="form-control" name="body" maxlength="500">{{ old('body') }}</textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <!-- Rounded switch -->
                        <p>Make Public</p>
                        <label class="switch">
                          <input type="checkbox" name="public">
                          <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-primary d-block" type="submit" >
                    </div>
                </form>
            </section>
        </main>
        <div class="col-md-3">
            <h4>Current Posts</h4>
            <ul class="list-inline">
                @foreach ($posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
