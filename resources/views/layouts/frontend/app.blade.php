{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
         @yield('title')
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->

	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



   @yield('css')
    
</head>
<body>

    @include('layouts.frontend.partial.header')

    @yield('content')

    @include('layouts.frontend.partial.footer')
	

<!-- SCIPTS -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    setTimeout(function() {
        $('#alert').fadeOut('fast');
    }, 8000);
</script>

@yield('scripts')

</body>
</html> --}}

@include('../includes/compatibility')
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="description" content="">
@include('../includes/style')
<meta charset='utf-8' />
</head>

<body>

    {{-- <div class="container-fluid"> --}}
    <!-- Begin page -->
    {{-- <div id="layout-wrapper"> --}}

    @include('../includes/header')
    {{-- @include('../includes/sidebar') --}}

    @yield('content')
    @include('../includes/testimonials')
    @include('../includes/footer')

    {{-- </div> --}}
    <!-- END layout-wrapper -->

    {{-- </div> --}}
    @include('../includes/scripts')
    @stack('custom_script')

    <script>
        // Add record
        $('#subscribe_form').submit(function(e) {
            document.getElementById('success_alert').style.display = "none";
            e.preventDefault();
            var form = new FormData(document.getElementById('subscribe_form'));
            var token = $('#token').val();
            form.append('_token', token);
            $.ajax({
                url: '/subscribe',
                type: 'post',
                data: form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false,

                success: function(response) {
                    $('#subscribe_form').get(0).reset();
                    document.getElementById('success_alert').style.display = "block";
                }
            });


        });
    </script>

</body>

</html>
