@extends('layout.master')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
@endsection

@section('content')
    <h1>welcome to home page</h1>
    <br>
    {{-- <a href="{{$page->url}}">Click to redirect to main page</a> --}}
    {{-- <a href="{{ route('main@index') }}">Click to redirect to main page</a>
<br>
<a href="{{ route('service@index') }}">Click to redirect to service page</a> --}}

    {{-- <h1>page content</h1>
<form method="POST" action="">
    @csrf --}}
    {{-- <input type="text" name="content">
    <select name="color_id">
        @foreach ($colors as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach
    </select>
    <input type="color" name="name"> --}}
    {{-- <label>title:</label>
    <input type="text" name="title">
    <br>
    <br>
    <br>
    <label>content:</label>
    <textarea name="content" id="example" cols="30" rows="10"></textarea>
    <button>submit</button>
</form> --}}

    <br>

    {{-- {{ $title }}
{!! $content !!} --}}

    <ul>
        @foreach ($pages as $page)
            {{-- <li><a href="{{ route('page@getPage') . '?page_id = ' . $page->id }}">{{ $page->name }}</a></li> --}}
            <li><a href="{{ url('page/' . $page->id) }}">{{ $page->name }}</a></li>
        @endforeach
    </ul>

    <form action="{{ route('page@store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name Of Page:</label>
            <input type="text" name="name" class="form-control" placeholder="Name ...">
        </div>
        <div class="mb-3">
            <label class="form-label">Link Of Page</label>
            <input type="text" name="url" class="form-control" placeholder="Link ...">
        </div>
        <input type="submit" class="btn btn-secondary" value="submit">
    </form>
@endsection



@section('js')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <script>
        var editor = new FroalaEditor('#example');
    </script>
@endsection
