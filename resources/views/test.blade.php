<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
@include('partials.header')
<div class="container" id="app">
    <calculator-component inline-template>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <h1> Word Counter and Calculator </h1>
                    <p class="h2 indigo font-weight-bold">Easily calculate the number of the words and your rate.</p>
                    <hr class="shadow">
                </div>
                <div class="col-md-12">
                    <div class="alert alert-primary shadow-sm mb-3 h3 font" role="alert">
                        Words: <span class="font-weight-bold" v-text="wcount"></span> | Characters: <span class="font-weight-bold" v-text="ccount"> </span> | Sentences: <span class="font-weight-bold" v-text="scount"></span>
                    </div>
                    <div class="form-group">
                        <label for="rate">Enter your rate per 1000 words <small class="text-secondary">EUR / USD</small></label>
                        <input class="form-control shadow-sm mb-3" id="rate" type="number" @input="charCount()" v-model="rate">
                        <p class="h4">Total amount: <span v-text="price"></span> <small class="text-muted">EUR / USD</small></p>
                    </div>
                    <div class="form-group">
                        <label for="input"></label>
                        <textarea v-model="userinput" @keyup='charCount' class="form-control shadow" name="" id="input"
                                  cols="30" rows="15"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </calculator-component>
</div>
@include('partials.footer')
</body>
</html>
