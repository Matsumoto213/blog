@extends('layouts.app')

@section('title', 'Blog')

@include('layouts.header')

@section('content')
<ul>
<!-- 配列の中身を精査しながら繰り返していくためにforeachを使う-->
@foreach($entries as $entry)
<li>
<a href="{{action("EntriesController@view", $entry->id) }}">
{{$entry->title}}
@endforeach
</li>
@endsection
</ul>