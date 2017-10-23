<section>
    <!--Caixa de filtros-->
    <div id="filtrosBox">
        <h3 id="filtrosBoxTitulo"><span>Filtros de busca</span></h3>
        <form action="busca.php" method="GET">
        <div id="filtros">
            <h3>Preço</h3>
            <ul>
                <li><input type="radio" name="radPreco" value="<100">R$ 0,00 - R$ 99,99</li>
                <li><input type="radio" name="radPreco" value="<300">R$ 100,00 - R$ 299,99</li>
                <li><input type="radio" name="radPreco" value="<500">R$ 300,00 - R$ 499,99</li>
                <li><input type="radio" name="radPreco" value="<1000">R$ 500,00 - R$ 999,99</li>
                <li><input type="radio" name="radPreco" value=">1000">Acima de R$ 1000,00</li>
            </ul>
            <h3>Tipo</h3>
            <ul>

                <li><input type="radio" name="radTipo" value="hotel">Hotel</li>
                <li><input type="radio" name="radTipo" value="pousada">Pousada</li>
                <li><input type="radio" name="radTipo" value="resort">Resort</li>
                <li><input type="radio" name="radTipo" value="chale">Chalé</li>
            </ul>
            <h3>Parceiros</h3>
            <ul>
                <li><input type="radio" name="radParceiro" value="Hilton">Hilton</li>
            </ul>
            <h3>Estrelas</h3>
            <ul>
                <li><input type="radio" name="radEstrelas" value="1">1 Estrela</li>
                <li><input type="radio" name="radEstrelas" value="2">2 Estrelas</li>
                <li><input type="radio" name="radEstrelas" value="3">3 Estrelas</li>
                <li><input type="radio" name="radEstrelas" value="4">4 Estrelas</li>
                <li><input type="radio" name="radEstrelas" value="5">5 Estrelas</li>
            </ul>
            <h3>Avaliação</h3>
            <ul>
                <li><input type="radio" name="radAvaliacao" value="<25">Menor que 25</li>
                <li><input type="radio" name="radAvaliacao" value="<50">Menor que 50</li>
                <li><input type="radio" name="radAvaliacao" value="<75">Menor que 75</li>
                <li><input type="radio" name="radAvaliacao" value=">75">Acima de 75</li>
            </ul>
            <h3>Comodidades do Hotel</h3>
            <ul>
                <li><input type="checkbox" name="chkAcademia" value="1"><label for="chkAcademia">Academia</label></li>
                <li><input type="checkbox" name="chkAnimais" value="1"><label for="chkAnimais">Animais permitidos</label></li>
                <li><input type="checkbox" name="chkBar" value="1"><label for="chkBar">Bar</label></li>
                <li><input type="checkbox" name="chkConcierge" value="1"><label for="chkConcierge">Concierge</label></li>
                <li><input type="checkbox" name="chkConveniencia" value="1"><label for="chkConveniencia">Loja de conveniência</label></li>
                <li><input type="checkbox" name="chkElevador" value="1"><label for="chkElevador">Elevador</label></li>
                <li><input type="checkbox" name="chkEstacionamento" value="1"><label for="chkEstacionamento">Estacionamento</label></li>
                <li><input type="checkbox" name="chkLavanderia" value="1"><label for="chkLavanderia">Lavanderia</label></li>
                <li><input type="checkbox" name="chkPiscina" value="1"><label for="chkPiscina">Piscina</label></li>
                <li><input type="checkbox" name="chkRestaurante" value="1"><label for="chkRestaurante">Restaurante</label></li>
                <li><input type="checkbox" name="chkSpa" value="1"><label for="chkSpa">Spa</label></li>
                <li><input type="checkbox" name="chkTransfer" value="1"><label for="chkTransfer">Transfer para aeroporto</label></li>
                <li><input type="checkbox" name="chkWifi" value="1"><label for="chkWifi">Wi-fi gratuito</label></li>
            </ul>
            <h3>Comodidades do Quarto</h3>
            <ul>
                <li><input type="checkbox" name="chkAr" value="1"><label for="chkAr">Ar condicionado</label></li>
                <li><input type="checkbox" name="chkBanheira" value="1"><label for="chkBanheira">Banheira</label></li>
                <li><input type="checkbox" name="chkCofre" value="1"><label for="chkCofre">Cofre no quarto</label></li>
                <li><input type="checkbox" name="chkCozinha" value="1"><label for="chkCozinha">Cozinha</label></li>
                <li><input type="checkbox" name="chkGeladeira" value="1"><label for="chkGeladeira">Geladeira</label></li>
                <li><input type="checkbox" name="chkInternet" value="1"><label for="chkInternet">Internet</label></li>
                <li><input type="checkbox" name="chkMicroondas" value="1"><label for="chkMicroondas">Microondas</label></li>
                <li><input type="checkbox" name="chkSecador" value="1"><label for="chkSecador">Secador</label></li>
                <li><input type="checkbox" name="chkTelefone" value="1"><label for="chkTelefone">Telefone</label></li>
                <li><input type="checkbox" name="chkCabo" value="1"><label for="chkCabo">TV a cabo</label></li>
                <li><input type="checkbox" name="chkSatelite" value="1"><label for="chkSatelite">TV via satélite</label></li>
                <li><input type="checkbox" name="chkVentilador" value="1"><label for="chkVentilador">Ventilador</label></li>
                <li><input type="checkbox" name="chkWifi" value="1"><label for="chkWifi">Wi-fi gratuito</label></li>
            </ul>
        </div>
        <input type="submit" name="btnBusca" value="PESQUISAR">
        </form>
    </div>
    <!---->
    <!--Caixa de resulttados-->
    <div id="resultadosBox">
        <div class="infoBuscaBox">
            <span class="qtdResultados">12/150 Hotéis</span>
            <div class="paginacao">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#">&raquo;</a>
            </div>
            <div class="ordenacao">
                <select name="slcOrdenacao">
                    <option value="relevancia" selected>Ordenar por: Relevância</option>
                    <option value="menorpreco">Ordenar por: Menor preço</option>
                    <option value="maiorpreco">Ordenar por: Maior preço</option>
                    <option value="avaliacao">Ordenar por: Avaliação</option>
                </select>
            </div>
        </div>
        <?php


            require_once('controllers/buscaRapida_controller.php');
            require_once('models/buscaRapida_class.php');

            if (isset($_GET['btn_pesquisar'])) {
              if($_GET['btn_pesquisar']  == 'PESQUISAR'){


              $controllerSelectBuscaAvancada = new ControllerSelectBuscaAvancada();
              $rows = $controllerSelectBuscaAvancada->BuscaAcancada();
            }elseif($_GET['btn_pesquisar'] == 'buscaRapida') {


              $controllerBuscaRapida = new ControllerBuscaRapida();
              $rows = $controllerBuscaRapida->Buscar();
            }
          }

            $cont = 0;

            while ($cont < count ($rows)) {


                ?>
                <div class="resultado">
                    <div class="resultadoImg">
                        <div class="parceiroDestaque">
                           <div class="ribbon"><span>DESTAQUE</span></div>
                        </div>
                        <img src="imagens/busca/hotel.jpg" alt="" id="hotelImg">
                    </div>

                    <div class="resultadoInfo">
                        <table>
                            <tr>
                                <td><h3><?php echo ($rows[$cont]->hotel); ?></h3></td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                        $qtd = rand(1, 5);
                                        $contestrelas = 1;
                                        while ($contestrelas <= $rows[$cont]->qtdEstrelas)
                                        {
                                            ?>
                                                <img src="imagens/busca/estrela.png" alt="">
                                            <?php
                                            $contestrelas += 1;
                                        }
                                     ?>
                                 </td>
                            </tr>
                            <tr>
                                <td><?php echo ($rows[$cont]->bairro); ?>, <?php echo ($rows[$cont]->cidade); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ($rows[$cont]->nomeParceiro); ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <table id="tblComodidades">
                                        <tr>
                                            <td>Wi-fi grátis</td>
                                            <td>Academia</td>
                                        </tr>
                                        <tr>
                                            <td>Bar</td>
                                            <td>Estacionamento</td>
                                        </tr>
                                        <tr>
                                            <td>Teste</td>
                                            <td>dsghsdfui</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="resultadoReservar">
                        <table>
                            <tr>
                                <td>
                                    <h3><?=rand(0,10);?></h3>
                                    <h5>123 avaliações</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 class="desconto">R$ 200,00</h3>
                                    <h2>R$ 150,00</h2>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="hotelQuarto.php?idHotel=<?php echo($rows[$cont]->idHotel) ?>"><div class="btnReservar">RESERVAR</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <?php
                $cont++;
            }

         ?>



        <div class="infoBuscaBox" style="margin-top: 25px; padding-bottom: 10px;">
            <span class="qtdResultados">12/150 Hotéis</span>
            <div class="paginacao">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#">&raquo;</a>
            </div>
            <div class="ordenacao">
                <select name="slcOrdenacao">
                    <option value="relevancia" selected>Ordenar por: Relevância</option>
                    <option value="menorpreco">Ordenar por: Menor preço</option>
                    <option value="maiorpreco">Ordenar por: Maior preço</option>
                    <option value="avaliacao">Ordenar por: Avaliação</option>
                </select>
            </div>
        </div>

    </div>
</section>
