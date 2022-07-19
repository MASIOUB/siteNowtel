@extends('layout.master')

@section('content')
<h1> section </h1>
{{ $section->name }}

<form action="{{ route('division@store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" name="type" class="form-control" placeholder="Type Of Division (Primary / Grid)...">
        <input type="color" name="code" class="form-control" placeholder="Color...">
        <input type="text" name="title_content" class="form-control" placeholder="Title...">
        <input type="text" name="color_content" class="form-control" placeholder="Title...">
        <input type="text" name="small_title_content" class="form-control" placeholder="Small Title...">
        <input type="text" name="paragraph_content" class="form-control" placeholder="Paragraph...">
        <input type="text" name="button_content" class="form-control" placeholder="Content Of Button...">
        <input type="text" name="button_link" class="form-control" placeholder="Link Of Button...">
        <input type="text" name="link_content" class="form-control" placeholder="Content Of link...">
        <input type="text" name="link" class="form-control" placeholder="Url Of link ...">
        <input type="file" name="image_name" class="form-control" placeholder="Image...">
        <input type="hidden" name="section_id">
        <input type="submit" value="submit" class="btn btn-secondary">
    </div>
</form>
@endsection
