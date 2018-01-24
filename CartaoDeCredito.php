<?php
class CartaoDeCredito
{
  public $numero;
  public $DataDeValidade;
  public $Cliente;
}

  $cart = new CartaoDeCredito;
   $cart->numero=111111 ;
   $cart->DataDeValidade="12/12/18";

   echo "\nCartao : $cart->numero  \n \n"  ;
   echo "Validade : $cart->DataDeValidade  \n \n"  ;

?>
