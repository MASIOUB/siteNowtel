@extends('layout.master')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@endsection

@section('content')
<h1>Hello</h1>

<hr>

<section>
    <form method="POST" action="{{ route('test@store') }}">
        @csrf
        <label>title:</label>
        <input type="text" name="title">
        <br>
        <br>
        <br>
        <label>content:</label>
        <textarea name="content" id="example" cols="30" rows="10"></textarea>
        <button>submit</button>
    </form>
</section>

<hr>

{!! $page->content !!}
@endsection

@section('js')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <script>
        var editor = new FroalaEditor('#example');
    </script>
@endsection
