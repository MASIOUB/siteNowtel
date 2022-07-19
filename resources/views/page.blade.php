@extends('layout.master')

@section('content')
    <h1>{{ $page->name }}</h1>
    <ul>
        @foreach ($sections as $section)
            {{-- <li><a href="{{ route('page@getPage') . '?page_id = ' . $page->id }}">{{ $page->name }}</a></li> --}}
            <li><a href="{{ url('section/' . $section->id) }}">{{ $section->name }}</a></li>
        @endforeach
    </ul>

    <form action="{{ route('section@store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name Of Section:</label>
            <input type="text" name="name" class="form-control" placeholder="Name ...">
            <input type="hidden" name="page_id" class="form_control" value="{{ $page->id }}">
            <input type="submit" value="submit" class="btn">
        </div>
    </form>
@endsection
