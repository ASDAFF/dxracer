<?php
require_once("../../classes/Sklad.php");
require_once("../../classes/Invoice.php");


    $invoice = new Invoice();
    $invoice->export($_REQUEST['id_invoice'], $_REQUEST['tip'],$_REQUEST['two']);
