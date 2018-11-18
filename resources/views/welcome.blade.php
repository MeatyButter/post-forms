@extends('layouts.unauth')

@section('content')

    <div class="content left">
        <article class="table inverted">
            <header class="px-5 pb-3 background-inverted">
                <img class="img-fluid logo mb-5" src="{{ asset('images/logo.png') }}">
                <h1>Build your own posts that only you can see!</h1>
                <p class="supporting-text">Over 2 people have used this platform to secure their thoughts.</p>
            </header>
            <section class="overflow-auto px-5 pt-3">
                <p>Our highly secure application allows you to not only make notes but keep them to youself. If you have an idea on the go, this platform probably isn't for you. But it is kind of cool and uses Laravel.</p>
                <div class="mt-3">
                    <a class="btn btn-dark btn-half" href="{{ route('register') }}">Register</a>
                    <a class="btn btn-transparent btn-half" href="{{ route('login') }}">Login</a>
                </div>
            </section>
            <footer class=" text-center px-5 bottom">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">Terms of Use</li>
                    <li class="list-inline-item">Privacy Policy</li>
                </ul>
                <p class="small">Copyright &copy; 2018 by Chickerman</p>
            </footer>
        </article>

    </div>

    <div class="content right">
        <div class="content-image" style="background-image: url({{ asset('images/login.jpg') }})"></div>
    </div>

@endsection
