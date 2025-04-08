@extends('layouts.layout')

@section('title', 'Exibição do livro')

@section('content')
  {{ $book->title }}
@endsection
