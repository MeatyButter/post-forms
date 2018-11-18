<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{{ secure_asset('images/favicon.png') }}}">

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>

    <script type="text/javascript">
        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#imgPlaceholder').attr('style', 'background-image: url("' +e.target.result + '")' );
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>

    @if (count($errors))
      <script type="text/javascript">
        jQuery(document).ready(function(){
          jQuery('#profileModal').modal('show');
        });
      </script>
    @endif

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('partials.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
