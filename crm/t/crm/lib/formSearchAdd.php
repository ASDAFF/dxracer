<script>
	(function ($) {
		$(function () {
			$('input').styler({});
		});
	})(jQuery);
</script>
<table width="500">
	<tr>
		<td>
			<table width="300">
				<tr>
					<td>
						<label for="WT"> KW</label><input id="WT" type="radio" name="radio" value="WT" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" placeholder="Цель обращения" id="art" onkeydown="if (event.keyCode == 13) getbyart();"
							   class="styler" style="width: 190px;">
					</td>
					<td>
						<input type="button" onclick="getbyart();" value="Найти" class="styler" style="width: 80px;">
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<div id="elements">

			</div>
		</td>
	</tr>
</table>
