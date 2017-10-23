<?php
class ControllerConhecaseuDestino
{

    public function Listar(){

      require_once('models/conhecaseudestino_class.php');

      $conhecaseudestino = new ConhecaseuDestino();
      return $conhecaseudestino->Select();
    }
}

 ?>
