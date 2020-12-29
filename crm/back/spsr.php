<?
$head ='<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">';
?>
<?$footer='
	</div>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>';?>
<?

	foreach (glob("*.html") as $filename) {
		$files[] = $filename;
	}

	rsort($files);


	$r = 5;
	foreach ($files as $key => $value) {
		if ($key >= $r)
			unlink($value);
		else {
			$post_requests .= '<a href="' . $value . '">' . date("H:i:s d.m.Y", preg_replace("#[^0-9]#", "", $value)) . '</a> / ';
			continue;
		}


	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<?=$post_requests?>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<form role="form" action="" method="post">
				<div class="form-group">
					<label for="codesSpsr">Номера отправки</label>
					<textarea class="form-control" rows="5" id="codesSpsr" name="codesSpsr"><?= $_POST['codesSpsr'] ?></textarea>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-12">
						<button type="submit" class="btn btn-info" name="start" value="start">Проверить</button>
					</div>
				</div>
			</form>
			<br>
		</div>

<?
if (isset($_POST['start'])) {

	$arr_codes = explode("\n", $_POST['codesSpsr']);
	foreach ($arr_codes as $value) {
//		$context = stream_context_create($opts);
		$value = preg_replace('#[^0-9]#', '', $value);
		if (empty($value))
			continue;

		$i = 1;
		while (true) {
			try {
				$xml = new SimpleXMLElement('http://www.spsr.ru/sites/default/modules/spsr/publicapi/monitoring.php?number=' . $value . '&lang=ru', NULL, TRUE);
				$xml->asXML();
				break;
			} catch (Exception $e) {
				sleep($i);
				$i++;
			}
		}

		$cnt_events = count($xml->event->value);

		$out.= '<br><table class="table table-bordered table-hover col-xs-5 col-sm-5">';
		$out.= '<tr>
				<td rowspan="2" class="col-xs-1" style="vertical-align: middle;">' . $value . '</td>
								<td class="col-xs-1" style="vertical-align: middle;">' . date("d.m.Y H:i", strtotime($xml->event->value[$cnt_events - 2]['Date'])) . ' </td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 2]['EventName'] . '</td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 2]['City'] . '</td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 2]['Comment'] . '</td>

			</tr>
			<tr>
				<td class="col-xs-1" style="vertical-align: middle;">' . date("d.m.Y H:i", strtotime($xml->event->value[$cnt_events - 1]['Date'])) . ' </td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 1]['EventName'] . '</td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 1]['City'] . '</td>
				<td class="col-xs-1" style="vertical-align: middle;">' . $xml->event->value[$cnt_events - 1]['Comment'] . '</td>
			</tr>';


	}
	$out.= '</table>';

}

echo $out;
if (isset($_POST['start'])) {
	$file = time() . '.html';
	$current = file_get_contents($file);
	file_put_contents($file, $head . $out . $footer);
}
?>

	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


