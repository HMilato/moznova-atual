<div id="header">
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index.php">
    <img src="/img/hm.png" width="30" height="30" class="d-inline-block align-top" alt="">
    MozNova
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active">
        <a class="nav-link" href="#">Home   <span class="sr-only">(current)</span></a>
      </li> 
  
    
      <div id="menu">
        <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias</a>       
             <!-- <?php include("inc/cat_menu.php"); ?> -->
          </li>
        </ul>

      </div>


      
      <li>
        <div class="input-group  ml-6">
            <input class="form-control mr-sm-2  form-inline my-2 my-lg-0 " style="min-width:400px;" type="search" placeholder="Procurar cursos">
            <button type="button" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
        </div>
      </li>
   
    </ul>

    
   

    <form id="frm-login" class="form-inline my-2 my-lg-0  ">

     
      <div id="shopcart">
        <a class="mr-sm-4" href="cart.php">  <i class="bi bi-cart4" style="font-size: 2rem; color: #4285F4"></i>0</a>
      </div>    

    </form>

    <button class="btn btn-outline-primary btn-sm mr-sm-2" data-toggle="modal" data-target="#myModal">Entrar</button>
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Cadastrar</button>

  </div>
</nav>
</div>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <!--  <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>

      <div class="form-group m-4"  >
        <label for="exampleInputEmail1">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>

      <div class="form-group ml-4 mr-4">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira a sua senha">
      </div>

     <div class="modal-body ml-2">
        <a href="#"><small id="emailHelp" class="form-text text-muted">Esqueci minha senha</small></a>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>