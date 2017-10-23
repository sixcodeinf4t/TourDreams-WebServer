<?php

  class Usuario{

    public $login;
    public $senha;
    public $nome;
    public $email;
    public $cpf;
    public $rg;
    public $telefone;
    public $tipoLocal;

    //Método construtor da classe
    public function __construct()
    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function Insert($usuario){

        $sql = "INSERT INTO tbl_login(login, senha, idTipoLogin) VALUES(
        '".$usuario->login."','".$usuario->senha."','1')";
          if(mysql_query($sql)){
            $sql = "SELECT LAST_INSERT_ID() AS idLogin";
              if($select = mysql_query($sql)){
                if($rows = mysql_fetch_array($select)){
                  $idLogin = $rows['idLogin'];
                  $sql = "INSERT INTO tbl_telefone(telefone, idTipoTelefone) VALUES(
                    '".$usuario->telefone."','2')";
                    if(mysql_query($sql)){
                      $sql = "SELECT LAST_INSERT_ID() AS idTelefone";
                      if($select = mysql_query($sql)){
                        if($rows = mysql_fetch_array($select)){
                          $idTelefone = $rows['idTelefone'];

                          $sql = "INSERT INTO tbl_imagem(caminhoImagem) VALUES('imagens/usuario/padrao.png')";
                          if(mysql_query($sql))
                          {
                              $sql = "SELECT LAST_INSERT_ID() AS idImagem";
                              if($select = mysql_query($sql))
                              {
                                  if($rows=mysql_fetch_array($select))
                                  {
                                      $idImagem = $rows['idImagem'];
                                      $sql = "INSERT INTO tbl_cliente(cpf, rg, nomeCliente, idImagem, idLogin, emailCliente, idTipoDeLocal, idTelefone)
                                      VALUES('".$usuario->cpf."', '".$usuario->rg."', '".$usuario->nome."', '".$idImagem."', '".$idLogin."','".$usuario->email."', '".$usuario->tipoLocal."', '".$idTelefone."')";
                                      if(mysql_query($sql)){
                                        return 'ok';
                                      }else {
                                        return 'erro';
                                      }
                                  }
                              }
                          }
                        }
                      }
                    }
                }
              }
          }

    }

    public function SelectById($usuario){
      $sql = "SELECT * FROM vw_loginusuario WHERE idLogin=".$usuario->idLogin;
      $select = mysql_query($sql);

      if($rs=mysql_fetch_array($select)){

        $listar = new Usuario();

        $listar->nome=$rs['nomeCliente'];
        $listar->email=$rs['emailCliente'];
        $listar->tipoLocal=$rs['tipoLocal'];
        $listar->milhasPontuacao=$rs['milhasPontuacao'];
        $listar->rg=$rs['rg'];
        $listar->cpf=$rs['cpf'];
        $listar->telefone=$rs['telefone'];
        $listar->idCliente=$rs['idCliente'];
        $listar->idTelefone=$rs['idTelefone'];
        $listar->idLogin=$rs['idLogin'];
        $listar->caminhoImg=$rs['caminhoImagem'];
        return  $listar;
      }
  }

      public function Delete($usuario)
      {
          $sql = "SELECT idTelefone FROM tbl_cliente WHERE idLogin=".$usuario->idLogin;
          $select = mysql_query($sql);
          if ($rows=mysql_fetch_array($select))
          {
              $idTelefone = $rows['idTelefone'];

              $sql = "DELETE FROM tbl_cliente WHERE idLogin=".$usuario->idLogin;
              if(!mysql_query($sql))
              {
                  return 'erro';
              }

              $sql = "DELETE FROM tbl_login WHERE idlogin=".$usuario->idLogin;
              if(!mysql_query($sql))
              {
                  return 'erro';
              }

              $sql = "DELETE FROM tbl_telefone WHERE idTelefone=".$idTelefone;
              if(!mysql_query($sql))
              {
                  return 'erro';
              }


          }
          return 'ok';
      }

      public function Update($usuario)
      {
          $sql = "UPDATE tbl_cliente SET nomeCliente='".$usuario->nome."', emailCliente='".$usuario->email."', cpf='".$usuario->cpf."', rg='".$usuario->rg."', idTipoDeLocal='".$usuario->tipoLocal."' WHERE idCliente='".$usuario->idCliente."'";
          if(!mysql_query($sql))
          {
              return 'erro';
          }

          $sql = "UPDATE tbl_telefone SET telefone='".$usuario->telefone."' WHERE idTelefone='".$usuario->idTelefone."'";
          if(!mysql_query($sql))
          {
              return 'erro';
          }

          return 'ok';
      }

      public function UpdateImage($usuario)
      {
          $sql = "SELECT idImagem FROM tbl_cliente WHERE idCliente='".$usuario->idCliente."'";
          if($select = mysql_query($sql))
          {
              if($rows=mysql_fetch_array($select))
              {
                  $idImagem = $rows['idImagem'];
                  $sql = "UPDATE tbl_imagem SET caminhoImagem='".$usuario->caminhoImg."' WHERE idImagem=".$idImagem;
                  mysql_query($sql);
              }
          }
      }

}

 ?>
