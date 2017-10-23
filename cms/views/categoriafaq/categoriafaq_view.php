<?php




 ?>

<div class="selectgpp">
    <div id="titulogpp">
        Gerenciamento de Categoria FAQ
    </div>
    
    <div id="containerTable">
        
        <table class="table11 sortable">
            <tr>
                <td class ="titulo22">
                   Identificação
                </td>
                <td class ="titulo22">
                Categoria do FAQ
                </td>
               
                <td class ="titulo22">

                    Opções
                </td>   
            </tr>

        <?php

            require_once('controllers/categoriafaq_controller.php');

            $controller_categoriafaq = new ControllerCategoriaFaq();
            $rows = $controller_categoriafaq -> Listar();

            $cont = 0;

            while ($cont < count($rows)) {

        ?>
            <tr> 
                  
                <td class="tdnumeros">
                   <?php echo($rows[$cont]->idCategoriaFaq); ?>
                </td>
                <td class="tdnumeros">
                   <?php echo($rows[$cont]->categoriaFaq); ?>
                </td>

                <td class="tdnumeros">
                   <a href=<?php echo("router.php?controller=categoriafaq&modo=excluir&idCategoriaFaq=".$rows[$cont]->idCategoriaFaq);?>>
                     <img src="imagens/delete.png" alt="delete">
                   </a>
                   <a href=<?php echo("router.php?controller=categoriafaq&modo=visualizar&idCategoriaFaq=".$rows[$cont]->idCategoriaFaq);?>>
                     <img src="imagens/edit.png" alt="edit">
                  </a>
               </td>
            </tr>
             <?php
        $cont +=1;
           }
        ?>
        </table>
    </div>
    
    <table class="formulariozinho">
      <tr>
              <td class="titulo22">
                  Categoria FAQ
              </td>
            
      </tr>

      <?php
      $categoriaFaq = null;
      $action = "inserir";

      if(isset($_GET['modo'])){
        if ($_GET['modo']=='visualizar') {
          $categoriaFaq=$result->categoriaFaq;

          $action="editar&idCategoriaFaq=".$_GET['idCategoriaFaq'];
        }
      }


      ?>
      <form class="" action="router.php?controller=categoriafaq&modo=<?php echo($action)?>" method="post">


      <tr>
          <td class="tdnumeros">
            <input class="inputFormulario" name="txtcategoriafaq" value="<?php echo($categoriaFaq);?>" placeholder="" >
          </td>
           <td  class="tdnumeros">
          <input type="submit" name="btnAlterar" value="" class="btnAlterar">
        </td>
         </tr>
      <?php


       ?>
      <tr>
        <td class="tdnumeros">

        </td>
      </tr>
    
        </form>
        
        
    </table>
        
</div>