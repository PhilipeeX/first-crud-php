<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Minha App')</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-gray-100 text-gray-900">

<header>
  <h1 class="text-2xl font-bold p-4">Livros</h1>
</header>

<main class="p-4">
  @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-4">
      <strong>Erros encontrados:</strong>
      <ul class="list-disc ml-5 mt-2">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
