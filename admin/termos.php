<div id="bodyright">


   <h3>Termos & Condicoes</h3> 

   <div id="add" >
       <details>
           <summary>Adicionar Sub Categoria</summary>
           <form method="post" enctype="multipart/form-data">
           <div class="form-group">
                <select name="id_categoria" id="select">
                    <option value="">Selecione a categoria</option>
                        <?php select_cat();   ?>
                </select>
                <input type="text"  class="form-control" name="subCategoria" placeholder="Digite o nome da SubCategoria">
                <button name="addSubCat" class="btn btn-primary">Adicionar SubCategoria</button>
           </div>
        
        </form>
       </details>

       <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome da Sub Categoria</th>
      <th scope="col">Categoria</th>
      <th scope="col">Edit</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
     
          <?php echo showSubCat() ?>
    </tr>
 
  </tbody>
</table>
     
   </div>
</div>

<?php echo subCategoria(); ?>