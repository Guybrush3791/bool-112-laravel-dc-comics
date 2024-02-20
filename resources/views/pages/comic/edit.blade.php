@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Edit comic: [{{ $comic -> id}}]</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form
        action="{{ route('comic.update', $comic -> id) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic -> title }}">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $comic -> description }}">
        <br>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" value="{{ $comic -> price }}">
        <br>
        <input type="submit" value="UPDATE">

    </form>
@endsection
