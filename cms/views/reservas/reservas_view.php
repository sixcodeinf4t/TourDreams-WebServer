<div id="selectgpp">
    <div id="reservaConteudo">
        <p id ="titulogpp"> Gerenciamento de Reservas</p>

       <div class="container">
       <table class="table11 sortable">
           <tr>
                   <td class="titulo22">
                       N da Reserva
                   </td>
                   <td class="titulo22">
                           Nome
                   </td>
                   <td class="titulo22" >
                           CPF
                   </td>
                   <td class="titulo22" >
                           Situação
                   </td>
                   <td class="titulo22" >
                           Diária
                   </td>
                   <td class="titulo22" >
                           Estadia
                   </td>
                   <td class="titulo22" >
                          Opções
                   </td>

           </tr>

           <?php
               $i = 0;

               while($i < 10){
           ?>
           <tr>
               <td class="tdnumeros">
                   01
               </td>
                <td class="tdnumeros">
                   Marizinha
               </td>
                <td class="tdnumeros">
                   484.332.598/81
               </td>
                <td class="tdnumeros">
                  Pendente
               </td>
               <td class="tdnumeros">
                  R$ 135,00
               </td>
               <td class="tdnumeros">
                  Pousada
               </td>
                <td class="tdnumeros">
                  <a href="#"><img src="imagens/edit.png"></a>
                  <a href="#"><img src="imagens/delete.png"></a>
              </td>
           </tr>
           <tr>
               <td class="tdnumeros">
                   02
               </td>
                <td class="tdnumeros">
                   Laysa
               </td>
                <td class="tdnumeros">
                   685.588.335/51
               </td>
                <td class="tdnumeros">
                  Reservado
               </td>
               <td class="tdnumeros">
                  R$ 205,00
               </td>
               <td class="tdnumeros">
                  Hotel
               </td>
               <td class="tdnumeros">
                  <a href="#"><img src="imagens/edit.png"></a>
                  <a href="#"><img src="imagens/delete.png"></a>
              </td>
           </tr>
           <tr>
               <td class="tdnumeros">
                   03
               </td>
                <td class="tdnumeros">
                   Barbara
               </td>
                <td class="tdnumeros">
                  685.362.488/87
               </td>
                <td class="tdnumeros">
                  Pendente
               </td>
               <td class="tdnumeros">
                  R$ 450,00
               </td>
               <td class="tdnumeros">
                  Resort
               </td>
                <td class="tdnumeros">
                  <a href="#"><img src="imagens/edit.png"></a>
                  <a href="#"><img src="imagens/delete.png"></a>
              </td>
           </tr>
           <?php
                   $i++;
               }
           ?>

       </table>
           </div>
       <div class="container">
        <table class="formulariozinho">
           <tr>
                   <td class="titulo22">
                       Transação
                   </td>
                   <td class="titulo22">
                           Quantidade de Quartos
                   </td>
                   <td class="titulo22" >
                           Entrada
                   </td>
                   <td class="titulo22" >
                           Saída
                   </td>
                   <td class="titulo22" >
                           Desconto
                   </td>
                   <td class="titulo22" >
                           Valor Total
                   </td>
                   <td class="titulo22" >
                          Data da Transação
                   </td>
                     <td class="titulo22" >
                          Cartão
                   </td>
                   <td class="titulo22" >
                          Quarto
                   </td>
                   <td class="titulo22" >
                          Cliente
                   </td>


           </tr>

            <?php
                $i = 0;

               while($i < 10){
            ?>

            <tr>
                   <td class="tdnumeros">
                      1234
                   </td>
                   <td class="tdnumeros">
                        2
                   </td>
                   <td class="tdnumeros" >
                        25/09/2017
                   </td>
                   <td class="tdnumeros" >
                          28/09/2017
                   </td>
                   <td class="tdnumeros" >
                          20%
                   </td>
                   <td class="tdnumeros" >
                           R$ 900,00
                   </td>
                   <td class="tdnumeros" >
                          15/09/2017
                   </td>
                   <td class="tdnumeros" >
                         00009683
                   </td>
                   <td class="tdnumeros" >

                   </td>
                   <td class="tdnumeros" >
                          000011250
                   </td>


           </tr>

            <tr>
                   <td class="tdnumeros">
                      1008
                   </td>
                   <td class="tdnumeros">
                        3
                   </td>
                   <td class="tdnumeros" >
                        20/08/2017
                   </td>
                   <td class="tdnumeros" >
                          27/08/2017
                   </td>
                   <td class="tdnumeros" >
                          80%
                   </td>
                   <td class="tdnumeros" >
                           R$ 1600,00
                   </td>
                   <td class="tdnumeros" >
                          02/08/2017
                   </td>
                   <td class="tdnumeros" >
                         00009421
                   </td>
                   <td class="tdnumeros" >

                   </td>
                   <td class="tdnumeros" >
                          000011050
                   </td>


           </tr>


            <tr>
                   <td class="tdnumeros">
                      1630
                   </td>
                   <td class="tdnumeros">
                        1
                   </td>
                   <td class="tdnumeros" >
                        30/09/2017
                   </td>
                   <td class="tdnumeros" >
                          03/10/2017
                   </td>
                   <td class="tdnumeros" >
                          15%
                   </td>
                   <td class="tdnumeros" >
                           R$ 450,00
                   </td>
                   <td class="tdnumeros" >
                          24/09/2017
                   </td>
                   <td class="tdnumeros" >
                         00012350
                   </td>
                   <td class="tdnumeros" >

                   </td>
                   <td class="tdnumeros" >
                          000015889
                   </td>


           </tr>


            <?php
                  $i++;
               }
            ?>
       </table>

       </div>
    </div>
</div>
