<? require_once("../classes/Courier.php"); ?>


<? if (isset($_REQUEST["action"])) {
    $courier = new Courier();


    $action = $_REQUEST["action"];
    $name = trim($_REQUEST["name"]);
    $id = (int)$_REQUEST["id"];
    $pass_seriya = $_REQUEST["pass_seriya"];
    $pass_nomer = $_REQUEST["pass_nomer"];
    $pass_vidan = $_REQUEST["pass_vidan"];
    $adress = $_REQUEST["adress"];

    if ($action = "addEdit") {
        echo  $courier->addEditCourier($name, $id,$pass_seriya,$pass_nomer,$pass_vidan,$adress);
    }


} ?>
