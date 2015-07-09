@extends("blade.layout.index")

@section("title","My Title Changed")

@section("sidebar")
    @parent
    <h2>This is my sidebar</h2>
@endsection

@section("content")
    <h1>This is my content</h1>
    <strong>{{ $name }}</strong>
@endsection