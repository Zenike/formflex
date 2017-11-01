<?php
$pathLinkFile="./assets/";
?>
<?php
function generateRandomString() {
	$length = rand(5, 20);
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>
<!doctype html>
<html lang="fr">
<head>
	<title>formflex</title>
	<meta name="description" content="Description courte de la page" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<link href="<?php echo $pathLinkFile; ?>css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php echo $pathLinkFile; ?>img/favicon.png" rel="shortcut icon" type="image/png" />
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
</form>

<div id="wrapper">

<form action="">

<ul id="buttons_dl">
	<li>
		<a href="./assets/js/formflex.js" target="_blank" download="formflex.js">
		télécharger le <strong>js</strong>
		</a>
	</li>
	<li>
		<a href="./assets/less/formflex.less" target="_blank" download="formflex.less">
		télécharger le <strong>less</strong>
		</a>
	</li>
</ul>

<h1><i class="fa fa-superpowers"></i> Formflex v2.0</h1>

<!-- /FIN DU HEADER ------------------------------------------------------------------------------->
<!-- /FIN DU HEADER ------------------------------------------------------------------------------->

<div class="formflex_section_title">
	Éléments de base
</div>

<div class="formflex_title">
	input text
</div>

<div class="form">

<label>
	<span class="name">horizontal simple</span>
	<input type="text" size="30" placeholder="mon test 1">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label class="to_the_right">
	<span class="name">horizontal extensible (script)</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">à la ligne simple</span>
	<span class="clear"></span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">à la ligne extensible (css uniquement)</span>
	<span class="clear"></span>
	<input class="formflex_full_width" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<pre>
&lt;label>
	&lt;span class="name">horizontal simple&lt;/span>
	&lt;input type="text" size="30" placeholder="mon test 1">

	&lt;span class="customErrorValidation">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label class="to_the_right">
	&lt;span class="name">horizontal extensible (script)&lt;/span>
	&lt;input type="text" size="30">

	&lt;span class="customErrorValidation">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label>
	&lt;span class="name">à la ligne simple&lt;/span>
	&lt;span class="clear">&lt;/span>
	&lt;input type="text" size="30">

	&lt;span class="customErrorValidation">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label>
	&lt;span class="name">à la ligne extensible (css uniquement)&lt;/span>
	&lt;span class="clear">&lt;/span>
	&lt;input class="formflex_full_width" type="text" size="30">

	&lt;span class="customErrorValidation">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>
</pre>





























<div class="formflex_title">
	Exclusion de l'alignement automatique
</div>

<div class="form">

<div class="bloc_intermediaire_embetant relay">
<?php for($i=1;$i<=3;$i++){ ?>
	<label>
		<span class="name"><?php echo generateRandomString(); ?></span>
		<input type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
<?php } ?>
	<label>
		<span class="name no_size">label non aligné aux autres grace à la class no_size (voir infos)</span>
		<input type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</div>

</div><!-- /form -->
<pre>
&ltlabel>
	&ltspan class="name no_size">label non aligné aux autres grace à la class no_size (voir infos)&lt/span>
	&ltinput type="text" size="30">

	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>
</pre>
<blockquote>
- les blocs alignent la taille de leurs intitulés automatiquement grace à la fonction align_name (rien à ajouter).<br />
<br />
- par defaut, les names dans les fieldsets ne sont pas formatés. Il est possible de forcer le formatage (de n'importe quel name) en ajoutant la class "forced_align" sur le name en question.<br />
<br />
- il est possible d'exclure un name de ce systeme en lui mettant la class "no_size".<br />
<br />
- les labels à la racine du formulaire recoivent du css particulier en tant qu'élément racine (marge, alignement etc).<br />
Si un bloc décoratif se trouve en parent de ces éléments, il peut casser le css par defaut.<br />
Placer la classe "relay" sur ce div (ou autre balise) dit au css et au script de ne pas en tenir compte.
</blockquote>


















































<div class="formflex_title">
	Barre de recherche (search bar)
</div>

<div class="form">

<fieldset class="search">
	<button type="submit">
		<i class="fa fa-search"></i>
	</button>
	<label>
		<input type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
</fieldset>

<fieldset class="search under_style">
	<button type="submit">
		<i class="fa fa-search"></i>
	</button>
	<label>
		<input type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
</fieldset>

</div><!-- /form -->
<pre>
&ltfieldset class="search">
	&ltbutton type="submit">
		&lti class="fa fa-search">&lt/i>
	&lt/button>
	&ltlabel>
		&ltinput type="text" size="30" name="street">

		&ltspan class="customErrorValidation" data-name="street">&lt/span>
		&ltspan class="clear">&lt/span>
	&lt/label>
&lt/fieldset>

&ltfieldset class="search under_style">
	&ltbutton type="submit">
		&lti class="fa fa-search">&lt/i>
	&lt/button>
	&ltlabel>
		&ltinput type="text" size="30" name="street">

		&ltspan class="customErrorValidation" data-name="street">&lt/span>
		&ltspan class="clear">&lt/span>
	&lt/label>
&lt/fieldset>
</pre>















<div class="formflex_title">
	Select
</div>

<div class="form">

<label>
	<span class="name">select inline</span>
	<select name="" id="" class="ffx-select">
		<option value="">option1</option>
		<option value="">option2</option>
		<option value="">option3</option>
	</select>

	<span class="customErrorValidation" data-name="street_nbr"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">select full</span>
	<span class="clear"></span>
	<select name="" id="" class="ffx-select ffx-select--maximize">
		<option value="">option1</option>
		<option value="">option2</option>
		<option value="">option3</option>
	</select>

	<span class="customErrorValidation" data-name="street_nbr"></span>
	<span class="clear"></span>
</label>

<label class="to_the_right">
	<span class="name">select to the right</span>
	<select name="" id="" class="ffx-select">
		<option value="">option1</option>
		<option value="">option2</option>
		<option value="">option3</option>
	</select>
	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<pre>
&lt;label>
	&lt;span class="name">select inline&lt;/span>
	&lt;span class="classic_select">
		&lt;select name="" id="">
			&lt;option value="">option1&lt;/option>
			&lt;option value="">option2&lt;/option>
			&lt;option value="">option3&lt;/option>
		&lt;/select>
	&lt;/span>

	&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label>
	&lt;span class="name">select full&lt;/span>
	&lt;span class="clear">&lt;/span>
	&lt;span class="classic_select formflex_full_width">
		&lt;select name="" id="">
			&lt;option value="">option1&lt;/option>
			&lt;option value="">option2&lt;/option>
			&lt;option value="">option3&lt;/option>
		&lt;/select>
	&lt;/span>

	&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label class="to_the_right">
	&lt;span class="name">select to the right&lt;/span>
	&lt;div class="classic_select">
		&lt;select name="" id="">
			&lt;option value="">Homme&lt;/option>
		&lt;/select>
	&lt;/div>
	&lt;span class="customErrorValidation" data-name="street">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>
</pre>



































<div class="formflex_title">
	Checkskin (radio and checkbox)
</div>

<div class="form">

<label class="formflex-checkbox checkskin">
	<span class="input">
		<i class="fa fa-check"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="name">Mercredi 19 fé fg sdfgdfg dfg dfgdf gd gdfg dfgd fsdfsdf sdfsdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfsdfsd fsdfs fsdfsdfsdfdgdfgdfgdfgdfg dfg dfgdfg dfg dfg dgdgdfgdgdfgdfg dfg dfg dgdfgd dfg dfgdf gdg dfg</span>

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<fieldset>
	<legend>Enchainement horizontal classique de checkskins</legend>
	<spoan class="clear"></spoan>
	<label class="formflex-radio checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">radio1</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label class="formflex-radio checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">radio2</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</fieldset>

<fieldset class="no_float">
	<legend>Enchainement vertical utilisant la class no_float</legend>
	<span class="clear"></span>
	<label class="formflex-radio checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">radio1</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label class="formflex-radio checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">radio2</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</fieldset>

<fieldset>
	<legend>Enchainement horizontal d'un checkskin sans name et d'un input text</legend>
	<span class="clear"></span>
	<label class="formflex-checkbox checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="checkbox" name="test3">
		</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label>
		<input type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</fieldset>

</div><!-- /form -->
<pre>
&lt;label class="formflex-checkbox checkskin">
	&lt;span class="input">
		&lt;i class="fa fa-check">&lt;/i>
		&lt;input type="checkbox" name="test3">
	&lt;/span>
	&lt;span class="name">Mercredi 19 fé fg sdfgdfg dfg dfgdf gd gdfg dfgd fsdfsdf sdfsdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfsdfsd fsdfs fsdfsdfsdfdgdfgdfgdfgdfg dfg dfgdfg dfg dfg dgdgdfgdgdfgdfg dfg dfg dgdfgd dfg dfgdf gdg dfg&lt;/span>

	&lt;span class="customErrorValidation">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;fieldset>
	&lt;legend>Enchainement horizontal classique de checkskins&lt;/legend>
	&lt;spoan class="clear">&lt;/spoan>
	&lt;label class="formflex-radio checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="name">radio1&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label class="formflex-radio checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="name">radio2&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
&lt;/fieldset>

&lt;fieldset class="no_float">
	&lt;legend>Enchainement vertical utilisant la class no_float&lt;/legend>
	&lt;span class="clear">&lt;/span>
	&lt;label class="formflex-radio checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="name">radio1&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label class="formflex-radio checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="name">radio2&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
&lt;/fieldset>

&lt;fieldset>
	&lt;legend>Enchainement horizontal d'un checkskin sans name et d'un input text&lt;/legend>
	&lt;span class="clear">&lt;/span>
	&lt;label class="formflex-checkbox checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="checkbox" name="test3">
		&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;input type="text" size="30">

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
&lt;/fieldset>
</pre>























<div class="formflex_title">
	Checkskins en mode equalize
</div>

<div class="form">

<fieldset class="bd_sep equalize">
	<legend>class equalize utilisée, ainsi que bd_sep (utilisation non liée)</legend>
	<span class="clear"></span>

	<?php for($i=1;$i<=10;$i++){ ?>
	<label class="formflex-radio checkskin">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name"><?php echo generateRandomString(); ?></span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<?php } ?>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset class="bd_sep equalize">
	&lt;legend>class equalize utilisée, ainsi que bd_sep (utilisation non liée)&lt;/legend>
	&lt;span class="clear">&lt;/span>

	&lt;?php for($i=1;$i&lt;=10;$i++){ ?>
	&lt;label class="formflex-radio checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-check">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="name">&lt;?php echo generateRandomString(); ?>&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;?php } ?>
&lt;/fieldset>
</pre>

















<div class="formflex_title">
	Textareas
</div>

<div class="form">

<label>
	<span class="name">textarea horizontal</span>
	<textarea name="" id="" cols="30" rows="10"></textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">textarea full width</span>
	<span class="clear"></span>
	<textarea class="formflex_full_width" name="" id="" cols="30" rows="10"></textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<pre>
&lt;label>
	&lt;span class="name">textarea horizontal&lt;/span>
	&lt;textarea name="" id="" cols="30" rows="10">&lt;/textarea>

	&lt;span class="customErrorValidation" data-name="street">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;label>
	&lt;span class="name">textarea full width&lt;/span>
	&lt;span class="clear">&lt;/span>
	&lt;textarea class="formflex_full_width" name="" id="" cols="30" rows="10">&lt;/textarea>

	&lt;span class="customErrorValidation" data-name="street">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>
</pre>




















<div class="formflex_section_title">
	Éléments composés
</div>

<div class="formflex_title">
	Exemples de formulaires complexes
</div>

<div class="form">

<fieldset>
	<legend>Adresse</legend>
	<label>
		<span class="name">Rue</span>
		<input type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">num</span>
		<input type="text" size="5" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">CP</span>
		<input type="text" size="10" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<span class="clear"></span>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset>
	&lt;legend>Adresse&lt;/legend>
	&lt;label>
		&lt;span class="name">Rue&lt;/span>
		&lt;input type="text" size="30" name="street">

		&lt;span class="customErrorValidation" data-name="street">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">num&lt;/span>
		&lt;input type="text" size="5" name="street_nbr">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">CP&lt;/span>
		&lt;input type="text" size="10" name="street_nbr">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;span class="clear">&lt;/span>
&lt;/fieldset>
</pre>
















<div class="form">

<fieldset>
	<label class="cols">
		<span class="name">CP*</span>
		<span class="clear"></span>
		<input class="formflex_full_width" type="text" size="10" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
	<label class="cols">
		<span class="name">Localité*</span>
		<span class="clear"></span>
		<input class="formflex_full_width" type="text" size="10" name="street">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<span class="clear"></span>
</fieldset>

<fieldset>
	<label class="cols to_the_right">
		<span class="name forced_align">CP*</span>
		<input type="text" size="10" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
	<label class="cols to_the_right">
		<span class="name">Localité*</span>
		<input type="text" size="10" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<span class="clear"></span>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset>
	&lt;label class="cols">
		&lt;span class="name">CP*&lt;/span>
		&lt;span class="clear">&lt;/span>
		&lt;input class="formflex_full_width" type="text" size="10" name="street">

		&lt;span class="customErrorValidation" data-name="street">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label class="cols">
		&lt;span class="name">Localité*&lt;/span>
		&lt;span class="clear">&lt;/span>
		&lt;input class="formflex_full_width" type="text" size="10" name="street">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;span class="clear">&lt;/span>
&lt;/fieldset>

&lt;fieldset>
	&lt;label class="cols to_the_right">
		&lt;span class="name forced_align">CP*&lt;/span>
		&lt;input type="text" size="10" name="street">

		&lt;span class="customErrorValidation" data-name="street">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label class="cols to_the_right">
		&lt;span class="name">Localité*&lt;/span>
		&lt;input type="text" size="10" name="street_nbr">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;span class="clear">&lt;/span>
&lt;/fieldset>
</pre>



<div class="form">

<fieldset class="semi_float">
	<legend>Adresse</legend>
	<label>
		<span class="name">Rue</span>
		<input type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">num</span>
		<input type="text" size="5" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">CP</span>
		<input type="text" size="10" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<span class="clear"></span>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset class="semi_float">
	&lt;legend>Adresse&lt;/legend>
	&lt;label>
		&lt;span class="name">Rue&lt;/span>
		&lt;input type="text" size="30" name="street">

		&lt;span class="customErrorValidation" data-name="street">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">num&lt;/span>
		&lt;input type="text" size="5" name="street_nbr">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">CP&lt;/span>
		&lt;input type="text" size="10" name="street_nbr">

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;span class="clear">&lt;/span>
&lt;/fieldset>
</pre>















<div class="form">

<fieldset class="semi_float">
	<label>
		<span class="name">Rue</span>
		<input type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">num</span>
		<div class="classic_select">
			<select name="" id="">
				<option value="">mois</option>
			</select>
		</div>
		<span class="name">mois</span>

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">CP</span>
		<input type="text" size="10" name="street_nbr">
		<span class="name">%</span>

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="clear"></span>
	</label>
	<span class="clear"></span>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset class="semi_float">
	&lt;label>
		&lt;span class="name">Rue&lt;/span>
		&lt;input type="text" size="30" name="street">

		&lt;span class="customErrorValidation" data-name="street">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">num&lt;/span>
		&lt;div class="classic_select">
			&lt;select name="" id="">
				&lt;option value="">mois&lt;/option>
			&lt;/select>
		&lt;/div>
		&lt;span class="name">mois&lt;/span>

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">CP&lt;/span>
		&lt;input type="text" size="10" name="street_nbr">
		&lt;span class="name">%&lt;/span>

		&lt;span class="customErrorValidation" data-name="street_nbr">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;span class="clear">&lt;/span>
&lt;/fieldset>
</pre>







































<div class="form">

<label>
	<span class="name">Upload des fichiers</span>
	<span class="clear"></span>
	<div class="classic_file">
		<span class="classic_file_infos">Fichier pdf...</span>
		<span class="classic_file_btn">Parcourir</span>
		<input type="file">
	</div>
	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>

<ul class="files_uploaded" id="ma_liste_de_fichiers">
	<li class="template">
		<a href=""></a>
		<span data-url="" class="delete_uploaded_file"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<?php for($i=1;$i<=3;$i++){ ?>
	<li>
		<a href="">fichier_pdf_numero_xxxx.pdf</a>
		<span data-url="" class="delete_uploaded_file"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<?php } ?>
</ul>

</div><!-- /form -->
<pre>
&lt;label>
	&lt;span class="name">Upload des fichiers&lt;/span>
	&lt;span class="clear">&lt;/span>
	&lt;div class="classic_file">
		&lt;span class="classic_file_infos">Fichier pdf...&lt;/span>
		&lt;span class="classic_file_btn">Parcourir&lt;/span>
		&lt;input type="file">
	&lt;/div>
	&lt;span class="customErrorValidation" data-name="street">&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>

&lt;ul class="files_uploaded" id="ma_liste_de_fichiers">
	&lt;li class="template">
		&lt;a href="">&lt;/a>
		&lt;span data-url="" class="delete_uploaded_file">&lt;i class="fa fa-times-circle">&lt;/i>&lt;/span>
		&lt;input type="hidden">
	&lt;/li>
	&lt;?php for($i=1;$i&lt;=3;$i++){ ?>
	&lt;li>
		&lt;a href="">fichier_pdf_numero_xxxx.pdf&lt;/a>
		&lt;span data-url="" class="delete_uploaded_file">&lt;i class="fa fa-times-circle">&lt;/i>&lt;/span>
		&lt;input type="hidden">
	&lt;/li>
	&lt;?php } ?>
&lt;/ul>
</pre>
















<div class="form">

<span class="pickadate_button">
	Ajouter une date <i class="fa fa-calendar"></i>
</span>

<ul class="dates_uploaded" id="ma_liste_de_dates">
	<li class="template">
		<a href=""></a>
		<span data-url="" class="delete_uploaded_file"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<?php for($i=1;$i<=3;$i++){ ?>
	<li>
		<a href="">fichier_pdf_numero_xxxx.pdf</a>
		<span data-url="" class="delete_uploaded_file"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<?php } ?>
</ul>

</div><!-- /form -->
<pre>
&lt;span class="pickadate_button">
	Ajouter une date &lt;i class="fa fa-calendar">&lt;/i>
&lt;/span>

&lt;ul class="dates_uploaded" id="ma_liste_de_dates">
	&lt;li class="template">
		&lt;a href="">&lt;/a>
		&lt;span data-url="" class="delete_uploaded_file">&lt;i class="fa fa-times-circle">&lt;/i>&lt;/span>
		&lt;input type="hidden">
	&lt;/li>
	&lt;?php for($i=1;$i&lt;=3;$i++){ ?>
	&lt;li>
		&lt;a href="">fichier_pdf_numero_xxxx.pdf&lt;/a>
		&lt;span data-url="" class="delete_uploaded_file">&lt;i class="fa fa-times-circle">&lt;/i>&lt;/span>
		&lt;input type="hidden">
	&lt;/li>
	&lt;?php } ?>
&lt;/ul>
</pre>






















<div class="form">

<fieldset class="unify">
	<label>
		<input type="text" size="12" placeholder="Votre commune">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="classic_select gray">
			<select name="" id="">
				<option value="">+ 0 km</option>
			</select>
		</span>

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset class="unify">
	&lt;label>
		&lt;input type="text" size="12" placeholder="Votre commune">

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="classic_select gray">
			&lt;select name="" id="">
				&lt;option value="">+ 0 km&lt;/option>
			&lt;/select>
		&lt;/span>

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
&lt;/fieldset>
</pre>





















<div class="form">

<label class="star checkskin">
	<span class="input">
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="name">Mercredi 19 fé</span>
	<span class="clear"></span>
</label>
<label class="star checkskin other">
	<span class="name no_size">Mercredi 19 fé</span>
	<span class="input">
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<pre>
&lt;label class="star checkskin">
	&lt;span class="input">
		&lt;i class="fa fa-star">&lt;/i>
		&lt;i class="fa fa-star-o">&lt;/i>
		&lt;input type="checkbox" name="test3">
	&lt;/span>
	&lt;span class="name">Mercredi 19 fé&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>
&lt;label class="star checkskin other">
	&lt;span class="name no_size">Mercredi 19 fé&lt;/span>
	&lt;span class="input">
		&lt;i class="fa fa-star">&lt;/i>
		&lt;i class="fa fa-star-o">&lt;/i>
		&lt;input type="checkbox" name="test3">
	&lt;/span>
	&lt;span class="clear">&lt;/span>
&lt;/label>
</pre>















<div class="form">

<fieldset>
	<?php for($i=1;$i<=5;$i++){ ?>
	<label class="star checkskin">
		<span class="input">
			<i class="fa fa-star"></i>
			<i class="fa fa-star-o"></i>
			<input type="radio" name="test3">
		</span>
		<span class="clear"></span>
	</label>
	<?php } ?>
</fieldset>

</div><!-- /form -->
<pre>
&lt;fieldset>
	&lt;?php for($i=1;$i&lt;=5;$i++){ ?>
	&lt;label class="star checkskin">
		&lt;span class="input">
			&lt;i class="fa fa-star">&lt;/i>
			&lt;i class="fa fa-star-o">&lt;/i>
			&lt;input type="radio" name="test3">
		&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;?php } ?>
&lt;/fieldset>
</pre>































<div class="form">

<ul class="lang_menu" data-lang-menu="commentaires_test">
	<li data-lang="fr">fr</li>
	<li data-lang="nl">nl</li>
	<li data-lang="en">en</li>
</ul>

<label data-lang-target="commentaires_test-fr">
	<span class="name">Commentaire fr</span>
	<span class="textarea"><textarea name="" id="" cols="30" rows="10">fr</textarea></span>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>
<label data-lang-target="commentaires_test-nl">
	<span class="name">Commentaire nl</span>
	<span class="textarea"><textarea name="" id="" cols="30" rows="10">nl</textarea></span>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>
<label data-lang-target="commentaires_test-en">
	<span class="name">Commentaire en</span>
	<span class="textarea"><textarea name="" id="" cols="30" rows="10">en</textarea></span>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<blockquote>
- utiliser l'attribut "data-lang-menu" sur le menu des langues et lui donner une valeur unique (ex:menu_test).<br />
<br />
- utiliser l'attribut "data-lang" sur chaque bouton de ce menu et y mettre la langue (ex:fr,nl,etc).<br />
<br />
- Ajouter l'attribut "data-lang-target" sur chaque element commandé par ce menu.<br />
<br />
Dans ces attributs, ecrire le mot clé composé du nom du menu et de l'extension de langue, séparés par un tiret.
ex: menu_test-fr.<br />
<br />
PS: il est possible d'utiliser plusieurs fois le même attribut (pas besoin de regrouper sous un même parent).
</blockquote>



















<div class="formflex_title">
	Systèmes d'affichage ciblé (radio)
</div>

<div class="form">

<fieldset>
	<legend>j'affiche la suite ?</legend>
	<label class="formflex-radio checkskin" data-radio-auto-menu="afficher_suite_oui">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">oui</span>
		<span class="clear"></span>
	</label>
	<label class="formflex-radio checkskin" data-radio-auto-menu="afficher_suite_non">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" checked name="test3">
		</span>
		<span class="name">non</span>
		<span class="clear"></span>
	</label>
	<label class="formflex-radio checkskin" data-radio-auto-menu="afficher_suite_ptet">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="name">peut-être</span>
		<span class="clear"></span>
	</label>
</fieldset>
<label data-target="afficher_suite_oui">
	<span class="name">oui</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_non">
	<span class="name">non</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_ptet">
	<span class="name">ptet</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_ptet afficher_suite_oui">
	<span class="name">oui et ptet</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<!-- 2 EME EXEMPLE -->
<div class="formflex_title_2">
 2 ème exemple : spécifier un choix par défaut si rien n'est coché
</div>

<fieldset>
	<legend>j'affiche la suite ?</legend>
	<label class="formflex-radio checkskin" data-radio-auto-menu="afficher_suite_2_oui">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test223">
		</span>
		<span class="name">oui</span>
		<span class="clear"></span>
	</label>
	<label class="formflex-radio checkskin uncheck_default" data-radio-auto-menu="afficher_suite_2_non">
		<span class="input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test223">
		</span>
		<span class="name">non</span>
		<span class="clear"></span>
	</label>
</fieldset>
<label data-target="afficher_suite_2_oui">
	<span class="name">oui</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_2_oui">
	<span class="name">non</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<blockquote>
- utiliser l'attribut "data-radio-auto-menu" sur chaque élément
de commande (label.formflex-radio) et y spécifier le mot clé lié à ce choix<br />
<br />
- mettre ce mot clé sur chaque élément qui devra être affiché quand ce choix est actif.<br />
Le mot clé doit être mis dans un attribut "data-target".<br />
peut importe où il se trouve sur la page et sur quel type d'élement,
il sera commandé par le menu.<br />
<br />
- il est possible qu'on élément soit commandé par plusieurs menu, juste mettre les différents
 mots clés dans un même "data-target" séparés par des espaces<br />
<br />
<b>Relatif au 2 ème exemple :</b><br />
<br />
Par defaut, si les boutons radios sont tous décochés, rien ne se passera.<br />
Mais il est possible de choisir quelle réponse aura son fonctionnement appliqué par defaut en ajoutant la class "uncheck_default" sur celui-ci.<br />
<br />
PS: ici la class "uncheck_default" est appliquée au label contenant la réponse "non".
</blockquote>















<div class="formflex_title">
	Systèmes d'affichage ciblé (checkbox)
</div>

<div class="form">

<label class="formflex-checkbox checkskin" data-checkbox-auto-menu="afficher_checkbox_suite">
	<span class="input">
		<i class="fa fa-check"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="name">Afficher la suite</span>
	<span class="clear"></span>
</label>

<label data-target="afficher_checkbox_suite-yes">
	<span class="name">Addresse différente affichée si case cochée</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->

<blockquote>
- utiliser l'attribut "data-checkbox-auto-menu" sur l'élément de commande (label.checkbox) et y spécifier le mot clé unique lié à ce choix<br />
<br />
- sur chaque item commandé par ce menu, placer un attribut "data-target" contenant l'identifiant unique suivit de "-yes" ou de "-no".<br />
Ce dernier point décidera quel état de la checkbox fera apparaitre l'item (il est donc possible d'utiliser un fonctionnement inversé avec un affichage uniquement quand décoché).
</blockquote>
















<div class="formflex_title">
	Systèmes d'affichage ciblé (select)
</div>

<div class="form">

<fieldset>
	<legend>j'affiche la suite ? (select)</legend>
	<div class="classic_select" data-select-auto-menu="afficher_suite_select">
		<select name="" id="">
			<option value="" data-key="">-</option>
			<option value="" data-key="oui">oui</option>
			<option value="" data-key="non">non</option>
			<option value="" data-key="ptet">ptet</option>
		</select>
	</div>
</fieldset>
<label data-target="afficher_suite_select-oui">
	<span class="name">oui</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_select-non">
	<span class="name">non</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_select-ptet">
	<span class="name">ptet</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>
<label data-target="afficher_suite_select-ptet afficher_suite_select-oui">
	<span class="name">oui et ptet</span>
	<input type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<blockquote>
- utiliser l'attribut "data-select-auto-menu" sur le "classic_select"
et y spécifier le mot clé lié à cette question (sans la terminaison)<br />
EX: couple_marie, enfants_au_domicile, etc.
<br /><br />
- sur chaque "< option >" de ce select, ajouter "data-key" et y spécifier la réponse à la question<br />
EX: oui, non, 1, 2, celibataire, etc.
<br /><br />
- mettre la combinaison du mot clé et de la réponse (séparé par un tiret) sur chaque élément qui devra être affiché quand ce choix est actif.<br />
Le mot clé doit être mis dans un attribut "data-target".<br />
peut importe où il se trouve sur la page et sur quel type d'élement,
il sera commandé par le menu.<br />
EX: enfants_au_domicile-oui, nombre_de_chambres-2, etc.
<br /><br />
- il est possible qu'on élément soit commandé par plusieurs menu, juste mettre les différents
 mots clés dans un même "data-target" séparés par des espaces
</blockquote>

















<div class="formflex_title">
	Plugin d'ajout d'items
</div>

<div class="formflex_title_2">
	Exemple 1 : simple, sans tri ni name automatique
</div>

<div class="form">
<fieldset data-group="simple1">
	<label>
		<span class="name">champs-1</span>
		<input type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="name">champs-2</span>
		<input type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
	<label>
		<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
		<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
	</label>
</fieldset>
</div><!-- /form -->

<div class="formflex_title_2">
	Exemple 2 : identique, avec le système de tri en plus
</div>

<div class="form">
<div class="sortable">
	<fieldset data-group="simple1_tri">
		<label>
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
		</label>
		<label>
			<span class="name">champs-1</span>
			<input type="text" size="30">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>
		<label>
			<span class="name">champs-2</span>
			<input type="text" size="30">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>
		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- \sortable -->
</div><!-- /form -->

<pre>
&lt;fieldset data-group="simple1">
	&lt;label>
		&lt;span class="name">champs-1&lt;/span>
		&lt;input type="text" size="30">

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="name">champs-2&lt;/span>
		&lt;input type="text" size="30">

		&lt;span class="customErrorValidation">&lt;/span>
		&lt;span class="clear">&lt;/span>
	&lt;/label>
	&lt;label>
		&lt;span class="round_icon red delete">&lt;i class="fa fa-trash">&lt;/i>&lt;/span>
		&lt;span class="round_icon green dupplicate">&lt;i class="fa fa-plus">&lt;/i>&lt;/span>
	&lt;/label>
&lt;/fieldset>
&lt;/div>&lt;!-- /form -->

&lt;div class="formflex_title_2">
	Exemple 2 : identique, avec le système de tri en plus
&lt;/div>

&lt;div class="form">
&lt;div class="sortable">
	&lt;fieldset data-group="simple1_tri">
		&lt;label>
			&lt;input type="hidden" value="0" class="sortable_get_position">
			&lt;span class="round_icon gray_on_white move">&lt;i class="fa fa-arrows">&lt;/i>&lt;/span>
		&lt;/label>
		&lt;label>
			&lt;span class="name">champs-1&lt;/span>
			&lt;input type="text" size="30">

			&lt;span class="customErrorValidation">&lt;/span>
			&lt;span class="clear">&lt;/span>
		&lt;/label>
		&lt;label>
			&lt;span class="name">champs-2&lt;/span>
			&lt;input type="text" size="30">

			&lt;span class="customErrorValidation">&lt;/span>
			&lt;span class="clear">&lt;/span>
		&lt;/label>
		&lt;label>
			&lt;span class="round_icon red delete">&lt;i class="fa fa-trash">&lt;/i>&lt;/span>
			&lt;span class="round_icon green dupplicate">&lt;i class="fa fa-plus">&lt;/i>&lt;/span>
		&lt;/label>
	&lt;/fieldset>
&lt;/div>&lt;!-- \sortable -->
</pre>
<blockquote>
- commencez par identifier un groupe dupplicable en lui ajoutant l'attribut data-group, contenant un identifiant unique.<br />
<br />
- Placez la class "dupplicate_wrapper" sur l'élement qui contiendra au commencement l'unique bouton d'ajout (l'élément principal si il n'y a qu'un item comme dans l'exemple).<br />
<br />
- placez la class "delete" sur l'élement qui commande la suppression de la ligne<br />
<br />
- placez la class "dupplicate" sur l'élement qui commande l'ajout de la ligne<br />
<br />
- ajoutez l'attribut "data-manual-increment" si vous voulez que cette fonction incremente les valeurs des names duppliqués.<br />
Dans ce cas, remplissez cet attribut avec le nombre de groupe par defaut au chargement de la page (1 ici).
</blockquote>


















<div class="form">

<div class="children_templates">
	<div class="category" data-child-template="classic_child1">
		<div>
			<?php for($i=1;$i<=3;$i++) : ?>
			<?php
				if($i==1){$lang="fr";}
				if($i==2){$lang="nl";}
				if($i==3){$lang="en";}
			?>
			<fieldset data-lang-iso="<?php echo $lang; ?>">
				<label>
					<input type="hidden" value="0" class="sortable_get_position">
					<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
				</label>

				<label>
					<span class="name">batiment</span>
					<input type="text" size="60" name="" data-name="building" value="">

					<span class="customErrorValidation"></span>
					<span class="clear"></span>
				</label>

				<label>
					<span class="round_icon blue children_add" data-child-template-cmd="classic_child1"><i class="fa fa-caret-square-o-down"></i></span>
					<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
					<!--<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>-->
				</label>
			</fieldset>
			<?php endfor; ?>
		</div>
	</div><!-- \category -->
</div>

</div><!-- /form -->

















<div class="replace_names_link">afficher names</div>

<div class="form">

<ul class="lang_menu mode_popup" data-lang-menu="children_test">
	<li data-lang="fr">fr</li>
	<li data-lang="nl">nl</li>
	<li data-lang="en">en</li>
</ul>

<div class="sortable">
<div class="category manual_increment" data-group-cpt="999" data-group="children_group_erer" data-this-cpt="0">
	<div>
		<?php for($i=1;$i<=3;$i++) : ?>
		<?php
			if($i==1){$lang="fr";}
			if($i==2){$lang="nl";}
			if($i==3){$lang="en";}
		?>
		<fieldset data-lang-target="children_test-<?php echo $lang; ?>" data-lang-category="children_test" data-lang-iso="<?php echo $lang; ?>" data-form-base="form[pages][1295]">
			<label>
				<input type="hidden" value="0" class="sortable_get_position">
				<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
			</label>

			<label>
				<span class="name">rue</span>
				<input type="text" name="form[pages][1295][0][street][<?php echo $lang; ?>]" data-name="street" size="30" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label>
				<span class="name">numero</span>
				<input type="text" name="form[pages][1295][0][number][<?php echo $lang; ?>]" data-name="number" size="5" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label>
				<span class="name">Ville test</span>
				<input type="text" name="form[pages][1295][0][city][<?php echo $lang; ?>]" data-name="city" size="20" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label>
				<span class="round_icon blue children_add" data-child-template-cmd="classic_child1"><i class="fa fa-caret-square-o-down"></i></span>
				<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
				<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
			</label>
		</fieldset>
		<?php endfor; ?>
	</div>
</div><!-- /category -->
</div><!-- /sortable -->

<div class="zone_add_from_ext">
	<span class="round_icon green exterior_add" data-group-target="children_group_erer" data-child-template-cmd="classic_child1">
		<i class="fa fa-plus"></i>
	</span>
	<span class="text">
		Morbi sed augue nisi. Vivamus vehicula eros in lorem auctor, adipiscing pretium urna pulvinar. Praesent vitae imperdiet ante. Mauris eu pellentesque magna. Donec consectetur mauris orci, ultricies congue mauris ultricies vel. Aliquam ac lectus massa. Ut ac est turpis.
	</span>
</div>

</div><!-- /form -->
<pre>
&lt;ul class="lang_menu mode_popup" data-lang-menu="children_test">
	&lt;li data-lang="fr">fr&lt;/li>
	&lt;li data-lang="nl">nl&lt;/li>
	&lt;li data-lang="en">en&lt;/li>
&lt;/ul>

&lt;div class="sortable">
&lt;div class="category manual_increment" data-group-cpt="999" data-group="children_group_erer" data-this-cpt="0">
	&lt;div>
		&lt;?php for($i=1;$i&lt;=3;$i++) : ?>
		&lt;?php
			if($i==1){$lang="fr";}
			if($i==2){$lang="nl";}
			if($i==3){$lang="en";}
		?>
		&lt;fieldset data-lang-target="children_test-&lt;?php echo $lang; ?>" data-lang-category="children_test" data-lang-iso="&lt;?php echo $lang; ?>" data-form-base="form[pages][1295]">
			&lt;label>
				&lt;input type="hidden" value="0" class="sortable_get_position">
				&lt;span class="round_icon gray_on_white move">&lt;i class="fa fa-arrows">&lt;/i>&lt;/span>
			&lt;/label>

			&lt;label>
				&lt;span class="name">rue&lt;/span>
				&lt;input type="text" name="form[pages][1295][0][street][&lt;?php echo $lang; ?>]" data-name="street" size="30" value="">

				&lt;span class="customErrorValidation">&lt;/span>
				&lt;span class="clear">&lt;/span>
			&lt;/label>

			&lt;label>
				&lt;span class="name">numero&lt;/span>
				&lt;input type="text" name="form[pages][1295][0][number][&lt;?php echo $lang; ?>]" data-name="number" size="5" value="">

				&lt;span class="customErrorValidation">&lt;/span>
				&lt;span class="clear">&lt;/span>
			&lt;/label>

			&lt;label>
				&lt;span class="name">Ville test&lt;/span>
				&lt;input type="text" name="form[pages][1295][0][city][&lt;?php echo $lang; ?>]" data-name="city" size="20" value="">

				&lt;span class="customErrorValidation">&lt;/span>
				&lt;span class="clear">&lt;/span>
			&lt;/label>

			&lt;label>
				&lt;span class="round_icon blue children_add" data-child-template-cmd="classic_child1">&lt;i class="fa fa-caret-square-o-down">&lt;/i>&lt;/span>
				&lt;span class="round_icon red delete">&lt;i class="fa fa-trash">&lt;/i>&lt;/span>
				&lt;span class="round_icon green dupplicate">&lt;i class="fa fa-plus">&lt;/i>&lt;/span>
			&lt;/label>
		&lt;/fieldset>
		&lt;?php endfor; ?>
	&lt;/div>
&lt;/div>&lt;!-- /category -->
&lt;/div>&lt;!-- /sortable -->

&lt;div class="zone_add_from_ext">
	&lt;span class="round_icon green exterior_add" data-group-target="children_group_erer" data-child-template-cmd="classic_child1">
		&lt;i class="fa fa-plus">&lt;/i>
	&lt;/span>
	&lt;span class="text">
		Morbi sed augue nisi. Vivamus vehicula eros in lorem auctor, adipiscing pretium urna pulvinar. Praesent vitae imperdiet ante. Mauris eu pellentesque magna. Donec consectetur mauris orci, ultricies congue mauris ultricies vel. Aliquam ac lectus massa. Ut ac est turpis.
	&lt;/span>
&lt;/div>
</pre>
<blockquote>
- commencez par identifier un groupe dupplicable en lui ajoutant l'attribut data-group, contenant un identifiant unique.<br />
</blockquote>
























<div class="form">

<ul class="lang_menu" data-lang-menu="testation">
	<li data-lang="fr">fr</li>
	<li data-lang="nl">nl</li>
	<li data-lang="en">en</li>
</ul>

<div class="sortable">
<div class="category manual_increment" data-group="testation">
	<?php for($i=1;$i<=3;$i++) : ?>
	<?php
		if($i==1){$lang="fr";}
		if($i==2){$lang="nl";}
		if($i==3){$lang="en";}
	?>
	<fieldset data-lang-target="testation-<?php echo $lang; ?>" data-lang-category="testation" data-lang-iso="<?php echo $lang; ?>" data-form-base="form[pages][1295]">
		<label>
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label>
			<span class="name">Ville</span>
			<input type="text" name="form[pages][1295][0][city]" data-name="city" size="50" value="">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
	<?php endfor; ?>
</div><!-- /category -->
</div><!-- /sortable -->

</div><!-- /form -->
<pre>
&lt;ul class="lang_menu" data-lang-menu="testation">
	&lt;li data-lang="fr">fr&lt;/li>
	&lt;li data-lang="nl">nl&lt;/li>
	&lt;li data-lang="en">en&lt;/li>
&lt;/ul>

&lt;div class="sortable">
&lt;div class="category manual_increment" data-group="testation">
	&lt;?php for($i=1;$i&lt;=3;$i++) : ?>
	&lt;?php
		if($i==1){$lang="fr";}
		if($i==2){$lang="nl";}
		if($i==3){$lang="en";}
	?>
	&lt;fieldset data-lang-target="testation-&lt;?php echo $lang; ?>" data-lang-category="testation" data-lang-iso="&lt;?php echo $lang; ?>" data-form-base="form[pages][1295]">
		&lt;label>
			&lt;input type="hidden" value="0" class="sortable_get_position">
			&lt;span class="round_icon gray_on_white move">&lt;i class="fa fa-arrows">&lt;/i>&lt;/span>
		&lt;/label>

		&lt;label>
			&lt;span class="name">Ville&lt;/span>
			&lt;input type="text" name="form[pages][1295][0][city]" data-name="city" size="50" value="">

			&lt;span class="customErrorValidation">&lt;/span>
			&lt;span class="clear">&lt;/span>
		&lt;/label>

		&lt;label>
			&lt;span class="round_icon red delete">&lt;i class="fa fa-trash">&lt;/i>&lt;/span>
			&lt;span class="round_icon green dupplicate">&lt;i class="fa fa-plus">&lt;/i>&lt;/span>
		&lt;/label>
	&lt;/fieldset>
	&lt;?php endfor; ?>
&lt;/div>&lt;!-- /category -->
&lt;/div>&lt;!-- /sortable -->
</pre>











<div class="form">

<div class="category manual_increment" data-group="identifiant-unique-de-ce-groupe">
	<fieldset data-form-base="form[pages][1295]">
		<label class="formflex-radio checkskin">
			<span class="input">
				<i class="fa fa-check"></i>
				<input type="radio" name="form[pages][1295][0][radio]" data-name="radio">
			</span>
			<span class="name">oui</span>

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label class="formflex-radio checkskin">
			<span class="input">
				<i class="fa fa-check"></i>
				<input type="radio" name="form[pages][1295][0][radio]" data-name="radio">
			</span>
			<span class="name">non</span>

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->

</div><!-- /form -->
<pre>
&lt;div class="category manual_increment" data-group="identifiant-unique-de-ce-groupe">
	&lt;fieldset data-form-base="form[pages][1295]">
		&lt;label class="formflex-radio checkskin">
			&lt;span class="input">
				&lt;i class="fa fa-check">&lt;/i>
				&lt;input type="radio" name="form[pages][1295][0][radio]" data-name="radio">
			&lt;/span>
			&lt;span class="name">oui&lt;/span>

			&lt;span class="customErrorValidation">&lt;/span>
			&lt;span class="clear">&lt;/span>
		&lt;/label>

		&lt;label class="formflex-radio checkskin">
			&lt;span class="input">
				&lt;i class="fa fa-check">&lt;/i>
				&lt;input type="radio" name="form[pages][1295][0][radio]" data-name="radio">
			&lt;/span>
			&lt;span class="name">non&lt;/span>

			&lt;span class="customErrorValidation">&lt;/span>
			&lt;span class="clear">&lt;/span>
		&lt;/label>

		&lt;label>
			&lt;span class="round_icon red delete">&lt;i class="fa fa-trash">&lt;/i>&lt;/span>
			&lt;span class="round_icon green dupplicate">&lt;i class="fa fa-plus">&lt;/i>&lt;/span>
		&lt;/label>
	&lt;/fieldset>
&lt;/div>&lt;!-- /category -->
</pre>
<blockquote>
si on supprime l'attribut "data-name" des inputs, le système marche toujours mais n'ajoute pas les derniers crochets. Ca se finit donc sur le nombre incrémenté
</blockquote>

















<div class="replace_names_link">afficher names</div>

<div class="form">
<div class="sortable">
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="0">
	<fieldset data-form-base="form[pages][1295]">
		<label>
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label>
			<span class="name">rue</span>
			<input type="text" name="form[pages][1295][0][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="name">num</span>
			<div class="classic_select">
				<select name="form[pages][1295][0][num]" data-name="num">
					<option value="">mois</option>
				</select>
			</div>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="1">
	<fieldset data-form-base="form[pages][1295]">
		<label>
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label>
			<span class="name">rue</span>
			<input type="text" name="form[pages][1295][1][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="name">num</span>
			<div class="classic_select">
				<select name="form[pages][1295][1][num]" data-name="num">
					<option value="">mois</option>
				</select>
			</div>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="2">
	<fieldset data-form-base="form[pages][1295]">
		<label>
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="round_icon gray_on_white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label>
			<span class="name">rue</span>
			<input type="text" name="form[pages][1295][2][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="name">num</span>
			<div class="classic_select">
				<select name="form[pages][1295][2][num]" data-name="num">
					<option value="">mois</option>
				</select>
			</div>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
</div><!-- /sortable -->
</div><!-- /form -->




















<div class="replace_names_link">afficher names</div>

<div class="form">
	<fieldset class="category manual_increment" data-group="children_group_efgdgfsfsdfrer" data-form-base="form[pages][1295]">
		<label>
			<span class="name">rue</span>
			<input type="text" name="sdfsdfsdf" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="name">num</span>
			<div class="classic_select">
				<select name="sdfsdf" data-name="num">
					<option value="">mois</option>
				</select>
			</div>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="clear"></span>
		</label>

		<label>
			<span class="round_icon red delete"><i class="fa fa-trash"></i></span>
			<span class="round_icon green dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /form -->

</form>

</div><!-- \wrapper -->

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.actual/1.0.19/jquery.actual.min.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/picker.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/picker.date.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/picker.time.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/jquery-validation/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../formflex.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/monjquery.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
	var msg_error = $(".customErrorValidation:eq(0)").html();
	 $(".customErrorValidation").html(msg_error);
});
</script>
