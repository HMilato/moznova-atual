<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/estilo.css"/> 
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; width: 260px;" id="mySidebar" >

 <div style=" width:100%;"> 
   <button class="w3-button w3-white w3-large" style="width: 259px; text-align: left; hover: red" onclick="w3_close()">☰ MOZNOVA </button>
</div>
   
   
<div class="sidebar"  style="width:260px; background-color: #2B2B2B; z-index: -999;  padding-top: 3.3%;">
   <div class="sidebarContent">
                <h3 style="width:260px; background-color: #222222; color: white;"><i class="fa fa-fw fa-home"></i> Categorias</h3>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-fw fa-wrench"></i> Dashboard</a></li>
                        <li><a href="index.php?cat"><i class="fa fa-fw fa-wrench"></i> Categorias</a></li>
                        <li><a href="index.php?subCat"><i class="fa fa-fw fa-wrench"></i> Sub Categorias</a></li>
                    </ul>
                <h3 style="width:260px; background-color: #222222; color: white;"><i class="fa fa-fw fa-home"></i> Cursos</h3>
                    <ul>
                        <li><a href="#Dashbord"><i class="fa fa-fw fa-wrench"></i> Cursos ativos</a></li>
                        <li><a href="Categorias"><i class="fa fa-fw fa-wrench"></i> Cursos Pendentes</a></li>
                        <li><a href="SubCategorias"><i class="fa fa-fw fa-wrench"></i> Cursos nao publicados</a></li>
                    </ul>
                <h3 style="width:260px; background-color: #222222; color: white;"><i class="fa fa-fw fa-home"></i> Usuarios</h3>
                    <ul>
                        <li><a href="#Dashbord"><i class="fa fa-fw fa-wrench"></i> Todos usuarios</a></li>
                        <li><a href="Categorias"><i class="fa fa-fw fa-wrench"></i> Todos Instrutores</a></li>
                        <li><a href="SubCategorias"><i class="fa fa-fw fa-wrench"></i> Busca Avancada de Usuarios</a></li>
                    </ul>
                <h3 style="width:260px; background-color: #222222; color: white;"><i class="fa fa-fw fa-home"></i> Pagamentos</h3>
                    <ul>
                        <li><a href="#Dashbord"><i class="fa fa-fw fa-wrench"></i> Pagamentos por Instrutor</a></li>
                        <li><a href="Categorias"><i class="fa fa-fw fa-wrench"></i> Todos Pedidos</a></li>
                        <li><a href="SubCategorias"><i class="fa fa-fw fa-wrench"></i> Busca Avancada de Pedidoss</a></li>
                    </ul>
                <h3 style="width:260px; background-color: #222222; color: white;"><i class="fa fa-fw fa-home"></i> Administração </h3>
                    <ul>
                        <li><a href="index.php?termos"><i class="fa fa-fw fa-wrench"></i> Termos & Condicao</a></li>
                        <li><a href="Categorias"><i class="fa fa-fw fa-wrench"></i> Contacte-nos </a></li>
                        <li><a href="SubCategorias"><i class="fa fa-fw fa-wrench"></i> Sobre nos</a></li>
                        <li><a href="Categorias"><i class="fa fa-fw fa-wrench"></i> Perguntas frequentes </a></li>
                        <li><a href="SubCategorias"><i class="fa fa-fw fa-wrench"></i> Editar Slide</a></li>
                    </ul>
            </div>

</div>
</div>

<!-- green header-->
<div class="" style="background: white;">
  <button class="w3-button w3-blue w3-large" onclick="w3_open()">☰  </button>
   <div class="w3-container" style="height:100px">
     
        
  </div> 
  
</div>



<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>


<?php 
  include("inc/funcoes.php");
    if(isset($_GET['cat'])){
        include("cat.php");
    }

    if(isset($_GET['subCat'])){
        include("sub_cat.php");
    }

    if(isset($_GET['termos'])){
        include("termos.php");
    }

?>


 


     