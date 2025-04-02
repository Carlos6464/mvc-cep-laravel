<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .search-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .result-container {
            display: none;
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .loading {
            display: none;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="search-container">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-center mb-4">Busca de CEP</h2>
                <div>
                    <a href="{{ route('buscar') }}" class="btn btn-secondary">
                        <i class="bi bi-plus"></i> Adicionar
                    </a>
                </div>
            </div>
            
            <form action="{{ route('buscar') }}" method="GET">
                <div class="mb-3">
                    <label for="cep" class="form-label">Digite o CEP:</label>
                    <input type="text" 
                           class="form-control" 
                           id="cep" 
                           name="cep" 
                           placeholder="00000-000"
                           required
                           pattern="[0-9]{5}-[0-9]{3}"
                           maxlength="9">
                    <div class="form-text">Digite o CEP no formato: 00000-000</div>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>

            <div class="loading">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Carregando...</span>
                </div>
            </div>

            <div class="result-container" id="resultContainer">
                <h4 class="mb-3">Resultado da Busca:</h4>
                <div id="resultContent"></div>
            </div>
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

        // document.getElementById('cepForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
            
        //     const cep = document.getElementById('cep').value;
        //     const loading = document.querySelector('.loading');
        //     const resultContainer = document.getElementById('resultContainer');
        //     const resultContent = document.getElementById('resultContent');

        //     loading.style.display = 'block';
        //     resultContainer.style.display = 'none';

        //     fetch(`https://viacep.com.br/ws/${cep.replace('-', '')}/json/`)
        //         .then(response => response.json())
        //         .then(data => {
        //             if (data.erro) {
        //                 resultContent.innerHTML = '<div class="alert alert-danger">CEP não encontrado!</div>';
        //             } else {
        //                 resultContent.innerHTML = `
        //                     <div class="alert alert-success">
        //                         <p><strong>CEP:</strong> ${data.cep}</p>
        //                         <p><strong>Logradouro:</strong> ${data.logradouro}</p>
        //                         <p><strong>Complemento:</strong> ${data.complemento}</p>
        //                         <p><strong>Bairro:</strong> ${data.bairro}</p>
        //                         <p><strong>Localidade:</strong> ${data.localidade}</p>
        //                         <p><strong>UF:</strong> ${data.uf}</p>
        //                         <p><strong>IBGE:</strong> ${data.ibge}</p>
        //                         <p><strong>GIA:</strong> ${data.gia}</p>
        //                         <p><strong>DDD:</strong> ${data.ddd}</p>
        //                         <p><strong>SIAFI:</strong> ${data.siafi}</p>
        //                     </div>
        //                 `;
        //             }
        //             resultContainer.style.display = 'block';
        //         })
        //         .catch(error => {
        //             resultContent.innerHTML = '<div class="alert alert-danger">Erro ao buscar CEP. Tente novamente.</div>';
        //             resultContainer.style.display = 'block';
        //         })
        //         .finally(() => {
        //             loading.style.display = 'none';
        //         });
        // });
    </script>
</body>
</html>
