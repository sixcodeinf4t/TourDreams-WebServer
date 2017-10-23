<?php
    //Página faz o controle entre views e models segundo padrão MVC
    $controller = $_GET['controller'];
    if(isset($_GET['modo']))
    {
        $modo = $_GET['modo'];
    }

    switch ($controller)                                                        //Verifica a variável de controle
    {
        case 'login':
            require_once('controllers/login_controller.php');
            require_once('models/login_class.php');
            if(isset($_POST['btnLoginCMS']))                                       //Verifica se o botão de login foi acionado
            {
                $controller_login = new ControllerLogin;
                $controller_login->Autenticar();
            }
            break;
        case 'deslogar':
            session_start();
            session_unset();
            session_destroy();
            session_write_close();
            header('location:index.php');
            break;
        case 'faleconosco':
            require_once('controllers/faleconosco_controller.php');
            require_once('models/faleconosco_class.php');
            $controller_faleconosco = new ControllerFaleConosco();
            switch($modo)
            {
                case 'excluir':
                    $controller_faleconosco->Excluir();
                    break;
            }
          case 'parceiro':
            require_once ('controllers/parceiros_controller.php');
            require_once ('models/parceiro_class.php');
            $controller_parceiro = new ControllerParceiro();
            switch ($modo) {

              case 'excluir':
                    $controller_parceiro->Excluir();
                break;
                case 'alterar':
                    $controller_parceiro->Visualizar();
                break;
                case 'editar':
                    $controller_parceiro->AtualizarRegistrar();
                  break;

            }
            break;

            case 'promocoes':
                require_once('controllers/promocoes_controller.php');
                require_once('models/promocoes_class.php');

                $controller_promocoes = new ControllerPromocoes();
                switch ($modo) {
                  case 'excluir':
                    $controller_promocoes->Excluir();
                    break;
                    case 'alterar':
                      $controller_promocoes->Visualizar();
                      break;
                      case 'editar':
                        $controller_promocoes->AtualizarRegistrar();
                        break;
                }
              break;

             case 'funcionario':
                require_once('controllers/funcionario_controller.php');
                require_once('models/funcionario_class.php');

                $controller_funcionario = new ControllerFuncionario();
                switch($modo){
					case 'inserir':
						$controller_funcionario->Adicionar();
						break;
                    case "excluir":
						$controller_funcionario->ExcluirFuncionario();
						break;
                    case "visualizar":
                        $controller_funcionario->Visualizar();
                        break;
                   case 'editar':
                        $controller_funcionario->Atualizar();
                        break;
                    }
            break;

            case 'moeda':
                require_once('controllers/moedas_controller.php');
                require_once('models/moeda_class.php');

                $controller_moeda = new ControllerMoeda();
                switch($modo)
                {
                    case 'inserir':
                        $controller_moeda->Inserir();
                        break;
                    case 'visualizar':
                        $controller_moeda->Visualizar();
                        break;
                    case 'excluir':
                        $controller_moeda->Excluir();
                        break;
                    case 'editar':
                        $controller_moeda->Editar();
                        break;
                }
                break;

            case 'milhas':
                require_once('controllers/milhas_controller.php');
                require_once('models/milhas_class.php');

                $controller_milhas = new ControllerMilhas();
                switch($modo)
                {
                    case 'inserir':
                        $controller_milhas->Inserir();
                        break;
                    case 'visualizar':
                        $controller_milhas->Visualizar();
                        break;
                    case 'excluir':
                        $controller_milhas->Excluir();
                        break;
                    case 'editar':
                        $controller_milhas->Editar();
                        break;
                }
                break;

        case 'comodidadesquarto':
             require_once('controllers/comodidadesquarto_controller.php');
                require_once('models/comodidadesquarto_class.php');

                $controller_comodidadesquarto = new ControllerComodidadesQuarto();
                switch($modo)
                {
                    case 'inserir':
                        $controller_comodidadesquarto->Inserir();
                        break;
                    case 'visualizar':
                        $controller_comodidadesquarto->Visualizar();
                        break;
                    case 'excluir':
                        $controller_comodidadesquarto->Excluir();
                        break;
                    case 'editar':
                        $controller_comodidadesquarto->Editar();
                        break;
                }
                break;

            case 'comodidadeshotel':
             require_once('controllers/comodidadeshotel_controller.php');
                require_once('models/comodidadeshotel_class.php');

                $controller_comodidadeshotel = new ControllerComodidadesHotel();
                switch($modo)
                {
                    case 'inserir':
                        $controller_comodidadeshotel->Inserir();
                        break;
                    case 'visualizar':
                        $controller_comodidadeshotel->Visualizar();
                        break;
                    case 'excluir':
                        $controller_comodidadeshotel->Excluir();
                        break;
                    case 'editar':
                        $controller_comodidadeshotel->Editar();
                        break;
                }
                break;

             case 'informacoes':
             require_once('controllers/informacoes_controller.php');
                require_once('models/informacoes_class.php');

                $controller_informacoes = new ControllerInformacoes();
                switch($modo)
                {
                    case 'inserir':
                        $controller_informacoes->Inserir();
                        break;
                    case 'visualizar':
                        $controller_informacoes->Visualizar();
                        break;
                    case 'excluir':
                        $controller_informacoes->Excluir();
                        break;
                    case 'editar':
                        $controller_informacoes->Editar();
                        break;
                }
                break;


             case 'faq':
             require_once('controllers/faq_controller.php');
                require_once('models/faq_class.php');

                $controller_faq = new ControllerFaq();
                switch($modo)
                {
                    case 'inserir':
                        $controller_faq->Inserir();
                        break;
                    case 'visualizar':
                        $controller_faq->Visualizar();
                        break;
                    case 'excluir':
                        $controller_faq->Excluir();
                        break;
                    case 'editar':
                        $controller_faq->Editar();
                        break;
                }
                break;


               case 'categoriafaq':
                require_once('controllers/categoriafaq_controller.php');
                require_once('models/categoriafaq_class.php');

                $controller_categoriafaq = new ControllerCategoriaFaq();
                switch($modo)
                {
                    case 'inserir':
                        $controller_categoriafaq->Inserir();
                        break;
                    case 'visualizar':
                        $controller_categoriafaq->Visualizar();
                        break;
                    case 'excluir':
                        $controller_categoriafaq->Excluir();
                        break;
                    case 'editar':
                        $controller_categoriafaq->Editar();
                        break;
                }
                break;

                case 'tipoestadia':
                require_once('controllers/tipoestadia_controller.php');
                require_once('models/tipoestadia_class.php');

                   $controller_tipoestadia = new ControllerTipoEstadia();
                   switch($modo)
                   {
                       case 'inserir':
                           $controller_tipoestadia->Inserir();
                           break;
                       case 'visualizar':
                           $controller_tipoestadia->Visualizar();
                           break;
                       case 'excluir':
                           $controller_tipoestadia->Excluir();
                           break;
                       case 'editar':
                           $controller_tipoestadia->Editar();
                           break;
                   }
                   break;
				   
				   case 'nivel':
					require_once('controllers/nivel_controller.php');
					require_once('models/nivel_class.php');

                   $controller_nivel = new ControllerNivel();
                   switch($modo)
                   {
                       case 'inserir':
                           $controller_nivel->Inserir();
                           break;
                       case 'visualizar':
                           $controller_nivel->Visualizar();
                           break;
                       case 'excluir':
                           $controller_nivel->Excluir();
                           break;
                       case 'editar':
                           $controller_nivel->Editar();
                           break;
                   }
                   break;




    }
?>
