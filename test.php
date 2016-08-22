
<div>
	<form method='post' action=#>
		<label>texte</label>
		<input type='text' name='text'>
		<label>taille</label>
		<input type='number' name='taille'>
		<label>type</label>
		<select name='type'>
			<option value='code128'>code128</option>
			<option value='code128a'>code128a</option>
			<option value="code39">code39</option>
			<option value="code25">code25</option>
			<option value='codabar'>codabar</option>
		</select>
		<input type='submit' value='code'>
	</form>
</div>
<?php
	if(isset($_POST['text']) and !empty($_POST['text']) )
	?>
		<img alt="<?php echo $_POST['text'];?>" src="barcode.php?text=<?php echo $_POST['text'];?>&codetype=<?php echo $_POST['type'];?>&size=<?php echo $_POST['taille'];?>" />
