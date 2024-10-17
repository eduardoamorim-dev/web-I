<?php
include_once("modeo/ContatoDAO_class.php");

class ListarContato
{

    public function __construct()
    {
        $dao = new ContatoDAO();
        $lista = $dao->listar();

        include_once("../visao/listaContato.php");
    }
}
