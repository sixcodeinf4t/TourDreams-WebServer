<?php


  class BuscaRapida{

    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }


    public function SelectByDestino($buscaRapida){

      $sql="Select * from vw_buscarapida where cidade like '%".$buscaRapida->destino."%'";

      $cont = 0;

      $select = mysql_query($sql);

      while($rs=mysql_fetch_array($select)){

        $listar[] = new BuscaRapida();

        $listar[$cont]->nomeParceiro = $rs['nomeParceiro'];
        $listar[$cont]->idHotel = $rs['idHotel'];
        $listar[$cont]->hotel = $rs['hotel'];
        $listar[$cont]->cidade= $rs['cidade'];
        $listar[$cont]->uf= $rs['uf'];
        $listar[$cont]->qtdEstrelas= $rs['qtdEstrelas'];
        $listar[$cont]->rua = $rs['logradouro'];
        $listar[$cont]->bairro = $rs['bairro'];

        $cont++;
      }

      if (mysql_num_rows($select)>0) {
        return $listar;
      }else {
        echo "erro";
      }

    }

  }


 ?>
