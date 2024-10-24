<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!--header-->
<?php include 'header.php'; ?>

    <div class="container-fluid">
    <div class="row">
       <!--menu-->   
       <?php include 'menu.php'; ?>
     
      
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
           <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h2>Nueva Tarea</h2>
           </div>
          <form class="mb-5" action="nueva.php" method="post">
           <div class="mb-3">
               <label for="descripcion" class="form-label">Descripcion </label>
               <input type="text" name="descripcion" id="descripcion" class="form-manejo" required>
           </div>
           <div class="mb-3">
                   <label for="estado" class="form-label">Estado</label>
                   <select class="form-select" id="estado" name="estado">
                       <option value="Pendiente">Pendiente</option>
                       <option value="En progreso">En progreso</option>
                       <option value="Completada">Completada</option>
                   </select>
               </div>

               <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
       </main>
   </div>
</div>


 <!--footer-->
 <?php include 'footer.php'; ?> 


</body>
</html>