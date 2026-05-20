<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Discografia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>
    <div class="d-flex flex-column align-items-center">
    <div class="text-center mt-5" >
    <div class="card shadow-sm p-4">
        
    <form action="discografia-salvar.php" method="post">
     <label>Artista</label> <br>
     <input type="text" name="artista"> <br>
     <label>Nome do Álbum</label><br>
     <input type="text" name="nomealbum"><br>
     <label>Ano de lançamento</label><br> 
     <input type="number" name="ano"><br>
     <label>Tipo</label><br>
     <select name="tipo"><br>
        <option value="album">Álbum</option>
        <option value="Single">Single</option>
     </select><br>
     <label>Foto</label><br>
     <input type="text" name="foto"><br>
     <button type="submit" class="btn btn-primary mt-2">Salvar</button>    
     <button type="reset" class="btn btn-success mt-2">Limpar</button>
    </form>
    </div>
    </div>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>   
</body>
</html>