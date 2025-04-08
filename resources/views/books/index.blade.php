@extends('layouts.layout')

@section('title', 'Lista de Livros')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Lista de Livros</h3>
            <a href="{{ route('books.create') }}" class="btn btn-primary">Adicionar Livro</a>
          </div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            @if ($books->count() > 0)
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Classificação</th>
                    <th>Preço</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($books as $book)
                    <tr>
                      <td>{{ $book->id }}</td>
                      <td>{{ $book->title }}</td>
                      <td>{{ Str::limit($book->description, 100) }}</td>
                      <td>
                        @for ($i = 1; $i <= 5; $i++)
                          @if ($i <= $book->rank)
                            <i class="fas fa-star text-warning"></i>
                          @else
                            <i class="far fa-star"></i>
                          @endif
                        @endfor
                      </td>
                      <td>R$ {{ number_format($book->price, 2, ',', '.') }}</td>
                      <td>
                        {{-- Botões de ação (editar, excluir, etc.) --}}
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>

              @if ($books instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="mt-4">
                  {{ $books->links() }}
                </div>
              @endif
            @else
              <div class="alert alert-info">
                Nenhum livro encontrado.
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
