<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .alert-danger {
            background-color: #fff2f2;
            border-color: #ffcdd2;
            color: #d32f2f;
        }
        .alert ul {
            margin-bottom: 0;
            padding-left: 20px;
        }
        .alert li {
            margin-bottom: 5px;
        }
        .alert li:last-child {
            margin-bottom: 0;
        }
        .alert i {
            margin-right: 8px;
        }
        .form-control.is-invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-center mb-4">Adicionar Novo Endereço</h2>
                <div>
                    <a href="{{ route('index') }}" class="btn btn-secondary">
                        <i class="bi bi-search"></i> Pesquisar
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

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <strong>Por favor, corrija os seguintes erros:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <form action="{{ route('salvar') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" 
                               class="form-control @error('cep') is-invalid @enderror" 
                               id="cep" 
                               name="cep" 
                               value="{{ $cep }}"
                               placeholder="00000-000"
                               pattern="[0-9]{5}-[0-9]{3}"
                               maxlength="9">
                        @error('cep')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" 
                               class="form-control @error('logradouro') is-invalid @enderror" 
                               id="logradouro" 
                               name="logradouro" 
                               value="{{ $logradouro }}">
                        @error('logradouro')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="numero" class="form-label">Numero</label>
                        <input type="text" 
                               class="form-control @error('numero') is-invalid @enderror" 
                               id="numero" 
                               name="numero">
                        @error('numero')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" 
                               class="form-control @error('bairro') is-invalid @enderror" 
                               id="bairro" 
                               name="bairro" 
                               value="{{ $bairro }}">
                        @error('bairro')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" 
                               class="form-control @error('cidade') is-invalid @enderror" 
                               id="cidade" 
                               name="cidade" 
                               value="{{ $cidade }}">
                        @error('cidade')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" 
                               class="form-control @error('estado') is-invalid @enderror" 
                               id="estado" 
                               name="estado" 
                               value="{{ $estado }}">
                        @error('estado')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Salvar Endereço</button>
                    <a href="{{ route('listar') }}" class="btn btn-secondary">Voltar para lista</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('cep').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 5) {
                value = value.substring(0, 5) + '-' + value.substring(5);
            }
            e.target.value = value;
        });
    </script>
</body>
</html>
