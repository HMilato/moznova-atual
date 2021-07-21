<div id="bodyright1">


   <div id="add" style="width:90%;" >
        <details>
            <summary>Adicionar Categoria</summary>
                    <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text"  class="form-control" name="nomeCategoria" placeholder="Digite o nome da Categoria">
                                <button name="add_cat" class="btn btn-primary mt-2" style="margin-left:80%">Salvar</button>
                            </div>       
                    </form>
        </details>

       <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome da Categoria</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo showCat() ?>
                </tr>
            </tbody>
       </table>
     
   </div>
</div>

<?php echo adicionarCategoria(); ?>