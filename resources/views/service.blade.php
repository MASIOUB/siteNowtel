@extends('layout.master')

<h1>this is service page</h1>
<br>
<a href="{{ route('main@index') }}">Click to redirect to main page</a>
<br>
<a href="{{ route('service@index') }}">Click to redirect to service page</a>
