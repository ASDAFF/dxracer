<?php
require_once("../classes/Courier.php");
if (isset($_REQUEST["text"])) {
    require_once 'print.php';
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href=favicon.ico"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=400, initial-scale=0.9,maximum-scale=1.0, user-scalable=no"/>
    <meta name="MobileOptimized" content="400"/>
    <meta name="HandheldFriendly" content="true"/>
    <link href="../css/jquery.formstyler.css?<?= md5_file('../css/jquery.formstyler.css'); ?>" rel="stylesheet">
    <link href="../css/jquery.fancybox.css?<?= md5_file('../css/jquery.fancybox.css'); ?>" rel="stylesheet">
    <link href="../css/jquery-ui.css?<?= md5_file('../css/jquery-ui.css'); ?>" rel="stylesheet">
    <script src="../js/jquery-1.11.1.min.js?<?= md5_file('../js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="../js/jquery.formstyler.min.js?<?= md5_file('../js/jquery.formstyler.min.js'); ?>"></script>
    <script src="../js/jquery-ui.min.js?<?= md5_file('../js/jquery-ui.min.js'); ?>"></script>
    <script src="../js/jquery.fancybox.pack.js?<?= md5_file('../js/jquery.fancybox.pack.js'); ?>"></script>
    <script src="../js/makeinput.js?<?= md5_file('../js/makeinput.js'); ?>"></script>
    <style>
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
<form action="../courier/" method="post">
    <table style="margin: 0 auto;width: 635px;">
        <tr>
            <td>

                <div>
                    <textarea id="text" cols="100" rows="20" class="styler" name="text"></textarea>
                </div>
                <input type="submit" class="styler">

            </td>
        </tr>
        <tr>
            <td>
                <?
                $courier = new Courier();
                $arr = $courier->getAllCourier();
                $org  =$courier->getOrg();
                ?>

                <ul>

                    <?
                    foreach ($arr as $value) {
                        ?>
                        <li>
                            <input type="radio" name="id" value="<?= $value["id"] ?>"><?= $value["name"] ?>
                        </li>
                    <? } ?>

                </ul>
            </td>
        </tr>
        <tr>
            <td>

              <input type="text" name="org" value="<?=$org?>" class="styler" style="width: 100%">

            </td>
        </tr>
    </table>
</form>

</body>
</html>