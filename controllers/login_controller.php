<?php
class ControllerLogin
{
    public function Autenticar()
    {
        /*  Verifica se o método foi acionado por uma requisição de formulário
        POST.
        */
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $login = $_POST['txtLogin'];
            $senha = $_POST['txtSenha'];

            $login_class = new Login();

            $login_class->login=$login;
            $login_class->senha=$senha;

            $login = $login_class->Auth($login_class);
            if ($login == 'null')
            {
                header('Location:'.$_SERVER['HTTP_REFERER'].'?erroLogin');
            }
            else if($login == 'db')
            {
                header('Location:'.$_SERVER['HTTP_REFERER'].'?dbLogin');
            }
            else
            {
                session_start();
                $_SESSION['nome'] = $login->nome;
                $_SESSION['idLogin'] = $login->idLogin;
                $_SESSION['idParceiro'] = $login->idParceiro;
                $_SESSION['tipoLogin'] = $login->tipoLogin;
                $_SESSION['login'] = 'true';

                if($login->tipoLogin == 'usuario')
                {
                    header('location: perfilUsuario.php');
                }
                else if($login->tipoLogin == 'parceiro')
                {
                    header('location: perfilParceiro.php?idParceiro='.$_SESSION['idParceiro']);
                }

            }
        }
    }
}
 ?>
