<?php

  class SelectBuscaAvancada{

    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function SelectTipoDeEstadia(){

      $sql = "select * from tbl_tipodeestadia";
      $select = mysql_query($sql);
      $cont = 0;

      while($rs=mysql_fetch_array($select)){

        $listBusca[] = new SelectBuscaAvancada();


        $listBusca[$cont]->idEstadia=$rs['idTipoEstadia'];
        $listBusca[$cont]->estadia=$rs['estadia'];

        $cont +=1;


      }

      return $listBusca;

    }

    public function SelectParceiro(){

      $sql = "select * from tbl_parceiro";
      $select = mysql_query($sql);
      $cont = 0;

      while ($rs=mysql_fetch_array($select)) {
        $listBusca [] = new SelectBuscaAvancada();

        $listBusca[$cont]->idParceiro=$rs['idParceiro'];
        $listBusca[$cont]->parceiro=$rs['nomeParceiro'];

        $cont +=1;
      }
      return $listBusca;

    }

    public function SelectComodidadeHotel(){

      $sql = "select * from tbl_comodidadeshotel";
      $select = mysql_query($sql);
      $cont = 0;

      while ($rs=mysql_fetch_array($select)) {

        $listComo[] = new SelectBuscaAvancada();

        $listComo[$cont]->idComodidadeHotel=$rs['idComodidadeHotel'];
        $listComo[$cont]->comodidadesHotel=$rs['nomeComodidade'];

        $cont +=1;

      }
      return $listComo;
    }

    public function SelectComodidadeQuarto(){

      $sql = "select * from tbl_comodidadesquarto";
      $select = mysql_query($sql);
      $cont =0;

      while ($rs=mysql_fetch_array($select)) {

        $listComo[] = new SelectBuscaAvancada();

        $listComo[$cont]->idComodidadeQuarto=$rs['idComodidade'];
        $listComo[$cont]->comodidadesQuarto=$rs['nomeComodidade'];

        $cont +=1;
      }

      return $listComo;
    }

    public function SelectDaBuscaAvancada(){

      $sqlHotel = "select * from tbl_comodidadeshotel";
      $selectHotel = mysql_query($sqlHotel);

      $listHotel = array();

      while ($rs=mysql_fetch_array($selectHotel)) {

        $itemHotel = new SelectBuscaAvancada();

        $itemHotel->id=$rs['idComodidadeHotel'];


          if(isset($_GET['chk'.$itemHotel->id])){

              $var = $itemHotel->id;
              echo ($var);

          }

        $listHotel[] = $itemHotel;

      }
      return $listHotel;




        $sql = 'select * from vw_buscaavancadahotel where idParceiro>='.$this->parceiro.' and cidade="'.$this->cidade.'" and idTipoEstadia>='.$this->estadia.' and qtdEstrelas<='.$this->qtdEstrelas.' and avaliacao >= 1 and preco>='.$this->preco.'';


        $select = mysql_query($sql);
        $cont = 0;

        $listComo = array();

        //echo ($sql);
        while ($rs=mysql_fetch_array($select)) {

          $item =  new SelectBuscaAvancada();

          //$listComo[] = new SelectBuscaAvancada();

          $item->nomeQuarto=$rs['nome'];
          $item->bairro=$rs['bairro'];
          $item->logradouro=$rs['logradouro'];
          $item->preco=$rs['preco'];
          $item->cidade=$rs['cidade'];
          $item->nomeParceiro=$rs['nomeParceiro'];
          $item->hotel=$rs['hotel'];
          $item->qtdEstrelas=$rs['qtdEstrelas'];



          $listComo[] = $item;
        }

        if (mysql_num_rows($select)>0) {
          return $listComo;
        }else{
          echo "Nenhum Hotel Encontrado";
        }



    }

  }

 ?>
