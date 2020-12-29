<?php
require_once("../../classes/Sklad.php");
require_once("../../classes/Invoice.php");

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    switch ($_REQUEST['action']) {
        case 'not_obtained': {
            $invoice = new Invoice();
            echo $invoice->setStatusNotObtained($_REQUEST['id']);
        }
    }

}