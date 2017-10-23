<?php




 ?>

<div class="selectgpp">
    <div id="titulogpp">
        Gerenciamento de Informações
    </div>
    <div id="containerTable">
        <table class="table11 sortable">
            <tr>
                <td class ="titulo22">
                   Identificação
                </td>
                <td class ="titulo22">
                    Email da TourDreams
                </td>
                 <td class ="titulo22">
                   Logradouro
                </td>
                <td class ="titulo22">
                  Telefone
                </td>
                <td class ="titulo22">

                    Opções
                </td>   
            </tr>

        <?php

            require_once('controllers/informacoes_controller.php');

            $controller_informacoes = new ControllerInformacoes();
            $rows = $controller_informacoes -> Listar();

            $cont = 0;

            while ($cont < count($rows)) {

        ?>
            <tr> 
                <td class="tdnumeros">
                    <?php echo($rows[$cont]->idInformacao); ?>
                </td>
                <td class="tdnumeros">
                    <?php echo($rows[$cont]->emailTourdreams); ?>
                </td>
                 <td class="tdnumeros">
                    <?php echo($rows[$cont]->idLogradouro); ?>
                </td>
                 <td class="tdnumeros">
                   <?php echo($rows[$cont]->idTelefone); ?>
                </td>

                <td class="tdnumeros">
                   <a href=<?php echo("router.php?controller=informacoes&modo=excluir&idInformacao=".$rows[$cont]->idInformacao);?>>
                     <img src="imagens/delete.png" alt="delete">
                   </a>
                   <a href=<?php echo("router.php?controller=informacoes&modo=visualizar&idInformacao=".$rows[$cont]->idInformacao);?>>
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
                     Email 
              </td>
              <td class="titulo22">
                     Logradouro
              </td>
                <td class="titulo22">
                      Telefone
              </td>
              
      </tr>

      <?php
      $emailTourdreams = null;
      $idLogradouro = null;
      $idTelefone= null;
      $action = "inserir";

      if(isset($_GET['modo'])){
        if ($_GET['modo']=='visualizar') {
          $emailTourdreams=$result->emailTourdreams;
          $idLogradouro=$result->idLogradouro;
          $idTelefone=$result->idTelefone;

          $action="editar&idInformacao=".$_GET['idInformacao'];
        }
      }


      ?>
      <form class="" action="router.php?controller=informacoes&modo=<?php echo($action)?>" method="post">


      <tr>
          <td class="tdnumeros">
            <input class="inputFormulario" name="txtemail" value="<?php echo($emailTourdreams);?>" placeholder="" >
          </td>
           <td class="tdnumeros">
               
               <select  class="inputFormulario" name="txtlogradouro" value="<?php echo($idLogradouro);?>" placeholder="">
                  <?php
            	$sql="select * from tbl_logradouro";
				$select = mysql_query($sql);
											
				while($rs = mysql_fetch_array($select))
											
                {
				?>
				<option value="<?php echo($rs['idLogradouro']);?>"><?php echo($rs['logradouro']);?></option>
											
				<?php
				}
				?>
               
               
               </select>
          </td>
           <td class="tdnumeros">
               <select   class="inputFormulario" name="txttelefone" value="<?php echo($idTelefone);?>" placeholder="" >
                  <?php
            	$sql="select * from tbl_telefone";
				$select = mysql_query($sql);
											
				while($rs = mysql_fetch_array($select))
											
                {
				?>
				<option value="<?php echo($rs['idTelefone']);?>"><?php echo($rs['telefone']);?></option>
											
				<?php
				}
				?>
               
               
               </select>
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