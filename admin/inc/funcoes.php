<?php 
    function adicionarCategoria(){
        include("../inc/db.php");
        if(isset($_POST['add_cat'])){
            $nomeCategoria = $_POST['nomeCategoria'];

        //  echo "$nomeCategoria";

                $check = $con -> prepare("select * from categoria where nome='$nomeCategoria'");
                $check->setFetchMode(PDO:: FETCH_ASSOC);
                $check->execute();
                $count=$check->rowCount();

                if($count == 1){

              

                    echo "<script> alert('Ja existe uma categoria com esse nome') </script>";
                    echo "<script> window.open('index.php?cat', '_self')</script>";
                }else{
                    $add_cat = $con -> prepare("insert into categoria (nome) values ('$nomeCategoria')");
                    if($add_cat -> execute()){
                        /*echo "<script>
                        swal('Good job!', 'You clicked the button!', 'success');
                        </script>"; */

                        echo "<script> alert('Categoria adcionada com sucess') </script>";
                        echo "<script> window.open('index.php?cat', '_self')</script>";
                    }
                    else{
                        echo "<script> window.open('index.php?cat', '_self')</script>";
                        echo "<script> alert('categoria nao adicionada problema com BD') </script>";    
                    } 

                }

              }

    }

    function subCategoria(){

        include("../inc/db.php");
        if(isset($_POST['addSubCat'])){
            $nomeCategoria = $_POST['subCategoria'];
            $idCategoria = $_POST['id_categoria'];

 
        //  echo "$nomeCategoria";

                $check = $con -> prepare("select * from sub_categoria where nome='$nomeCategoria'");
                $check->setFetchMode(PDO:: FETCH_ASSOC);
                $check->execute();
                $count=$check->rowCount();

                

                if($count == 1){

                 

                    echo "<script> alert('Ja existe uma Subcategoria com esse nome') </script>";
                    echo "<script> window.open('index.php?subCat', '_self')</script>";
                }else{

                 
                    $add_cat = $con -> prepare("insert into sub_categoria (nome, id_categoria) values ('$nomeCategoria', '$idCategoria')");
                  
                    if($add_cat -> execute()){
                

                        echo "<script> alert('SubCategoria adcionada com sucess') </script>";
                        echo "<script> window.open('index.php?subCat', '_self')</script>";
                    }
                    else{
                     
                        echo "<script> window.open('index.php?subCat', '_self')</script>";
                        echo "<script> alert('categoria nao adicionada problema com BD') </script>";    
                    } 

                }

              }

    }

    function showCat(){
        include("../inc/db.php");
        $get_cat=$con->prepare("select * from categoria");
        $get_cat->setFetchMode(PDO :: FETCH_ASSOC);
        $get_cat->execute();
        $i = 1;
            while($row=$get_cat->fetch()):
                echo"<tr>
                    <td>".$i++."</td>
                <td>".$row['nome']. "</td>
                <td><a href='index.php?cat&edit_cat=".$row['id_categoria']."'><button  class='btn btn-success btn-sm'>Editar</button></a></td>
                <td><a href='index.php?cat&del_cat=".$row['id_categoria']."'><button  class='btn btn-danger btn-sm'>Apagar</button></a></td>
                </tr>";
            endwhile;

        if(isset($_GET['del_cat'])){
            $id= $_GET['del_cat'];

            $del=$con->prepare("delete from categoria where id_categoria = '$id'");
            if($del->execute()){
                echo "<script>alert('Categoria apagada com sucesso!')</script>";
                echo "<script>window.open('index.php?cat','_self)</script>";
            }else{
                echo "<script>alert('Falha ao apagar a categoria!')</script>";
                echo "<script>window.open('index.php?cat','_self)</script>";
            }

        }

    }

    function showSubCat(){
        include("../inc/db.php");
        $get_cat=$con->prepare("select * from sub_categoria");
        $get_cat->setFetchMode(PDO :: FETCH_ASSOC);
        $get_cat->execute();
        $i = 1;
            while($row=$get_cat->fetch()):
                $idCategoria = $row['id_categoria'];

                $get_c=$con->prepare("select * from categoria where id_categoria = $idCategoria");
                $get_c->setFetchMode(PDO :: FETCH_ASSOC);
                $get_c->execute();
                $row1=$get_c->fetch();



                echo"
                    <tr>
               <td>".$i++."</td>
                <td>".$row['nome']. "</td>
                <td>".$row1['nome']. "</td>
                <td><a href='index.php?subCat&edit_subCat=".$row['id_subcategoria']."'><button  class='btn btn-success btn-sm'>Editar</button></a></td>
                <td> <a href='index.php?subCat&del_subCat=".$row['id_subcategoria']."'><button  class='btn btn-danger btn-sm'>Apagar</button></a></td>
                    </tr>";
                   

            endwhile;

            if(isset($_GET['del_subCat'])){
                $id= $_GET['del_subCat'];
    
                $del=$con->prepare("delete from sub_categoria where id_subcategoria = '$id'");
                if($del->execute()){
                    echo "<script>alert('SubCategoria apagada com sucesso!')</script>";
                    echo "<script>window.open('index.php?cat','_self)</script>";
                }else{
                    echo "<script>alert('Falha ao apagar a SubCategoria!')</script>";
                    echo "<script>window.open('index.php?cat','_self)</script>";
                }
    
            }

    }


    function select_cat(){
        include("../inc/db.php");
        $get_cat=$con->prepare("select * from categoria");
        $get_cat->setFetchMode(PDO :: FETCH_ASSOC);
        $get_cat->execute();
            while($row=$get_cat->fetch()):
                echo"<option value='".$row['id_categoria']."'>".$row['nome']."</option>";
            endwhile;



    }


    function cart(){
        include("inc/db.php");
        echo"<div id='cart'> hello</div>";
        
    }

    

?>