@extends('layouts.layout')

@section('title', 'Cadastro de livro')

@section('content')
  <div>
    <form action="{{ route('books.store') }}" method="POST">
      @csrf
      <label for="title">Título:
        <input id="title" name="title" type="text" placeholder="escreva o titulo aqui">
      </label>
      <label for="description">Descrição:
        <input id="description" name="description" type="text" placeholder="descreva as características do livro">
      </label>
      <label for="rate">Nota:
        <input id="rate" name="rate" type="number" min="0" max="10" step="1">
      </label>
      <button type="submit" id="submit">Cadastrar</button>
    </form>
  </div>

@endsection
