<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Inicio</title>
</head>
<body>
    
    <div class="container">
        <div class="menu">
            <img src="/img/pngegg.png" alt="logo">
            <h1>Menu</h1>            
            <a href="/">Inicio</a>
            <br>
            <a href="/cliente">Novo Cliente</a>
            <br>            
            <a href="/sobre">Sobre</a>
        </div>

        <div class="informacoes">
            <p>Lista de barbearias cadastradas</p>        
        </div>
        
        @foreach($clientes as $cliente)  
            <div class="row">
                <div class="col">
                    <p>{{$cliente->nome}}</p>                
                </div>
                <div class="col">
                    <p>{{$cliente->endereco}}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    <div class="fotos">
        <div class="row">
            <div class="col">
                <img src="/img/barbearia_abstrata.png" alt="logo">
            </div>
        </div>   

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

