

<main>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    

<section>

    <a href="../index.php" class="btn btn-success">Voltar</a>
</section>

    
    
<div class="container">
    <form method="POST" action="../criarprojeto.php">
        <div class="form-group">
        <label>nome</label>
        <input type = "text" class="form-control" name="nome" required>

        </div>
        <div class="form-group">
        <label>idade</label>
        <input type = "text" class="form-control" name="idade" required>

        </div>
        <div class="form-group">
        <label>peso</label>
        <input type = "text" class="form-control" name="peso" required>

        </div>
       <div class ="form-group">
        <button type = "submit" class="btn btn-success">Cadastrar</button>
       </div>




    </form>
    </div>




</main>


