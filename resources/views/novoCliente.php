<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Novo Cliente</title>
</head>
<body>    
    <div id="container-criar" class="col-md-6">
        <h1>Adicionar Cliente</h1>
        <form action="/clientecadastro" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">                
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">                
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">                
            </div>

            <input type="submit" class="btn btn-primary" value="Novo Cliente">
        </form>
    </div>


    <div class="retornar">
        <a href="/">Voltar ao inicio</a>
    </div>
</body>
</html>