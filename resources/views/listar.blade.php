<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Endereços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .table th {
            background-color: #f8f9fa;
        }
        .btn-delete {
            color: #dc3545;
            transition: all 0.3s;
        }
        .btn-delete:hover {
            color: #c82333;
            transform: scale(1.1);
        }
        .empty-message {
            text-align: center;
            padding: 30px;
            color: #6c757d;
        }
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Endereços</h2>
            <div>
                <a href="{{ route('buscar') }}" class="btn btn-secondary">
                <i class="bi bi-plus"></i> Adicionar
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            @if(count($enderecos) > 0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>CEP</th>
                            <th>Rua</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Data de Criação</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enderecos as $endereco)
                            <tr>
                                <td>{{ $endereco->cep }}</td>
                                <td>{{ $endereco->logradouro }}</td>
                                <td>{{ $endereco->bairro }}</td>
                                <td>{{ $endereco->cidade }}</td>
                                <td>{{ $endereco->estado }}</td>
                                <td>{{ (new DateTime($endereco->created_at))->format('d/m/Y H:i:s') }}</td>
                                <td class="text-center">
                                    <form action="{{ route('excluir', $endereco->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-link btn-delete" onclick="confirmDelete({{ $endereco->id }})">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $enderecos->links() }}
            @else
                <div class="empty-message">
                    <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                    <p class="mt-3">Nenhum endereço cadastrado.</p>
                    <a href="{{ route('buscar') }}" class="btn btn-primary mt-2">
                        <i class="bi bi-plus-circle"></i> Adicionar Endereço
                    </a>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Tem certeza?",
                text: "Essa ação não pode ser desfeita!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Sim, excluir!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
</body>
</html>
