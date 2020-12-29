<?
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require_once("../classes/Sklad.php");
    require_once("../classes/Search.php");


    $search = new Search();

    echo $search->globalSearch($_POST["search"]);
}

?>