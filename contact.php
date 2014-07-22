<!DOCTYPE html>
<html>
<head>
	<title>Contact - Powerbrosse</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
<?php include("icone.php");?>
</head>

<body>
<div id="bloc_page">

<?php include("header.php");?>

	<h2>Formulaire de contact</h2>

	<p>Envoyez-nous un petit message&nbsp;! On aime croire qu'on a des amis, de temps en temps&nbsp;!</p>

	<form method="post" action="index.php">
	<p>
		<table>
			<tr>
				<td class="droite"><label for="mail">Votre Email <span class="rouge">*</span>&nbsp;: </label></td>
				<td><input required class="champ" name="mail" id="mail" type="mail" /></td>
			</tr>
			<tr>
				<td class="droite"><label for="pseudo">Votre pseudo <span class="rouge">*</span>&nbsp;: </label></td>
				<td><input required class="champ" name="pseudo" id="pseudo" type="text" /></td>
			</tr>
			<tr>
				<td class="droite"><label for="message">Votre message <span class="rouge">*</span>&nbsp;: </label></td>
				<td><textarea required class="champ" name="message" id="message"></textarea></td>
			</tr>
			<tr class="petit">
				<td colspan="2">Les champs marqués d'un <span class="rouge">*</span> sont obligatoires.</td>
			</tr>
		</table>
			<input type="submit" />
	</p>
	</form>

<?php include("footer.php");?>

</div>
</body>
</html>
