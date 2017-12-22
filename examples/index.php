<?php
$pathLinkFile="./assets/";
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

<div id="wrapper">

<ul id="buttons_dl">
	<li>
		<a href="https://github.com/Zenike/formflex" target="_blank">
		télécharger sur <strong>GITHUB</strong>
		</a>
	</li>
</ul>

<h1><i class="fa fa-superpowers"></i> Formflex v2.0</h1>

<!-- /FIN DU HEADER ------------------------------------------------------------------------------->

<div class="formflex_section_title">
	Éléments basiques de formulaire
</div>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	input text
</div>

<?php ob_start(); ?>

<label class="ffx-label">
	<span class="ffx-name ffx-name--inline">horizontal simple</span>
	<input class="ffx-input" type="text" size="30" placeholder="mon test 1">

	<span class="customErrorValidation"></span>
</label>

<label class="ffx-label">
	<span class="ffx-name">à la ligne simple</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
</label>

<label class="ffx-label">
	<span class="ffx-name">à la ligne extensible (css uniquement)</span>
	<input class="ffx-input ffx-input--full-width" type="text" size="30">

	<span class="customErrorValidation"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Alignement automatique (align-names) et exclusion
</div>

<?php ob_start(); ?>

<div class="ffx-align-names-container">

<?php for($i=1;$i<=3;$i++){ ?>
	<label class="ffx-label">
		<span class="ffx-name ffx-name--inline" data-ffx-align-names><?php echo generateRandomString(); ?></span>
		<input class="ffx-input" type="text" size="30">

		<span class="customErrorValidation"></span>
	</label>
<?php } ?>
<label class="ffx-label">
	<span class="ffx-name ffx-name--inline">label non aligné aux autres</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
</label>

</div><!-- /ffx-align-names-container -->

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<blockquote>
- les blocs alignent la taille de leurs intitulés automatiquement grace au conteneur .formflex-align-names<br />
<br />
- par defaut, les names dans les fieldsets ne sont pas formatés. Il est possible de forcer le formatage (de n'importe quel ffx-name) en ajoutant la class "forced_align" sur le ffx-name en question.<br />
<br />
- il est possible d'exclure un ffx-name de ce systeme en lui mettant la class "no_size".
</blockquote>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Textareas
</div>

<?php ob_start(); ?>

<label class="ffx-label">
	<span class="ffx-name">textarea horizontal</span>
	<textarea class="ffx-textarea" name="" id="" cols="30" rows="10"></textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>

<label class="ffx-label">
	<span class="ffx-name">textarea full width</span>
	<span class="ffx-clear"></span>
	<textarea class="ffx-textarea ffx-textarea--full-width" name="" id="" cols="30" rows="10"></textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Select
</div>

<?php ob_start(); ?>

<label class="ffx-label">
	<span class="ffx-name">select inline</span>
	<select name="" id="" class="ffx-select">
		<option value="">option1</option>
		<option value="">option2</option>
		<option value="">option3</option>
	</select>

	<span class="customErrorValidation" data-name="street_nbr"></span>
	<span class="ffx-clear"></span>
</label>

<label class="ffx-label">
	<span class="ffx-name">select full</span>
	<span class="ffx-clear"></span>
	<select name="" id="" class="ffx-select ffx-select--maximize">
		<option value="">option1</option>
		<option value="">option2</option>
		<option value="">option3</option>
	</select>

	<span class="customErrorValidation" data-name="street_nbr"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Input file
</div>

<?php ob_start(); ?>

<label class="ffx-label">
	<span class="ffx-name">Upload des fichiers</span>
	<span class="ffx-clear"></span>
	<div class="ffx-file">
		<span class="ffx-file__infos">Fichier pdf...</span>
		<span class="ffx-file__btn">Parcourir</span>
		<input type="file">
	</div>
	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Checkskin (radio and checkbox)
</div>

<?php ob_start(); ?>

<label class="ffx-checkskin ffx-checkskin--checkbox">
	<span class="ffx-checkskin__input">
		<i class="fa fa-check"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="ffx-name">Mercredi 19 fé fg sdfgdfg dfg dfgdf gd gdfg dfgd fsdfsdf sdfsdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfsdfsd fsdfs fsdfsdfsdfdgdfgdfgdfgdfg dfg dfgdfg dfg dfg dgdgdfgdgdfgdfg dfg dfg dgdfgd dfg dfgdf gdg dfg</span>

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">Enchainement horizontal classique de checkskins</legend>
	<spoan class="ffx-clear"></spoan>
	<label class="ffx-checkskin ffx-checkskin--radio">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="ffx-name">radio1</span>

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-checkskin ffx-checkskin--radio">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="ffx-name">radio2</span>

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>

<fieldset class="ffx-fieldset">
	<legend>Enchainement horizontal d'un checkskin sans ffx-name et d'un input text</legend>
	<span class="ffx-clear"></span>
	<label class="ffx-checkskin ffx-checkskin--checkbox">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="checkbox" name="test3">
		</span>

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<input class="ffx-input" type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Checkboxs/radios avec icones customs
</div>

<?php ob_start(); ?>

<label class="ffx-checkskin ffx-checkskin--icon">
	<span class="ffx-checkskin__input">
		<i class="ffx-checkskin__icon--on fa fa-circle"></i>
		<i class="ffx-checkskin__icon--off fa fa-circle-o"></i>
		<input type="checkbox" name="test3">
	</span>
	<span class="ffx-name">Mercredi 19 fé</span>
	<span class="ffx-clear"></span>
</label>

<fieldset class="ffx-fieldset">
	<?php for($i=1;$i<=5;$i++){ ?>
	<label class="ffx-checkskin ffx-checkskin--icon">
		<span class="ffx-checkskin__input">
			<i class="ffx-checkskin__icon--on fa fa-star"></i>
			<i class="ffx-checkskin__icon--off fa fa-star-o"></i>
			<input type="radio" name="test3">
		</span>
		<span class="ffx-clear"></span>
	</label>
	<?php } ?>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_section_title">
	Éléments conteneurs
</div>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Barre de recherche (search bar)
</div>

<?php ob_start(); ?>

<fieldset class="ffx-search">
	<button type="submit">
		<i class="fa fa-search"></i>
	</button>
	<label class="ffx-label">
		<input class="ffx-input" type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Fieldsets (contenants plusieurs éléments différents)
</div>

<?php ob_start(); ?>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">Adresse</legend>
	<label class="ffx-label">
		<span class="ffx-name">Rue</span>
		<input class="ffx-input" type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-name">num</span>
		<input class="ffx-input" type="text" size="5" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-name">CP</span>
		<input class="ffx-input" type="text" size="10" name="street_nbr">

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="ffx-clear"></span>
	</label>
	<span class="ffx-clear"></span>
</fieldset>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">Adresse</legend>
	<label class="ffx-label">
		<span class="ffx-name">Rue</span>
		<span class="ffx-clear"></span>
		<input class="ffx-input" type="text" size="30" name="street">

		<span class="customErrorValidation" data-name="street"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-name">num</span>
		<span class="ffx-clear"></span>
		<select class="ffx-select" name="" id="">
			<option value="">mois</option>
		</select>
		<span class="ffx-name">mois</span>

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-name">CP</span>
		<span class="ffx-clear"></span>
		<input class="ffx-input" type="text" size="10" name="street_nbr">
		<span class="ffx-name">%</span>

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="ffx-clear"></span>
	</label>
	<span class="ffx-clear"></span>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Combo double input
</div>

<?php ob_start(); ?>

<fieldset class="ffx-fieldset ffx-fieldset--unify">
	<label class="ffx-label">
		<input class="ffx-input" type="text" size="12" placeholder="Votre commune">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<select class="ffx-select" name="" id="">
			<option value="">+ 0 km</option>
		</select>

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>

<fieldset class="ffx-fieldset ffx-fieldset--unify">
	<label class="ffx-label">
		<input class="ffx-input" type="text" size="12" placeholder="Votre commune">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<input class="ffx-input" type="text" size="6" placeholder="CP">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_section_title">
	Javascript : fonctionnalités avancées
</div>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Items list
</div>

<?php ob_start(); ?>

<ul class="ffx-list-items">
	<li class="ffx-list-items__item">
		<a href="">fichier_pdf_numero_001.pdf</a>
		<span class="ffx-list-items__delete"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<li class="ffx-list-items__item">
		<a href="">fichier_pdf_numero_002.pdf</a>
		<span class="ffx-list-items__delete"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
</ul>

<ul class="ffx-list-items ffx-list-items--full-width">
	<li class="ffx-list-items__item">
		<a href="">fichier_pdf_numero_001.pdf</a>
		<span class="ffx-list-items__delete"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
	<li class="ffx-list-items__item">
		<a href="">fichier_pdf_numero_002.pdf</a>
		<span class="ffx-list-items__delete"><i class="fa fa-times-circle"></i></span>
		<input type="hidden">
	</li>
</ul>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Systèmes d'affichage ciblé (radio)
</div>

<?php ob_start(); ?>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">j'affiche la suite ?</legend>
	<label class="ffx-checkskin ffx-checkskin--radio" data-radio-auto-menu="afficher_suite_oui">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="ffx-name">oui</span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-checkskin ffx-checkskin--radio" data-radio-auto-menu="afficher_suite_non">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" checked name="test3">
		</span>
		<span class="ffx-name">non</span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-checkskin ffx-checkskin--radio" data-radio-auto-menu="afficher_suite_ptet">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test3">
		</span>
		<span class="ffx-name">peut-être</span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>
<label class="ffx-label" data-target="afficher_suite_oui">
	<span class="ffx-name">oui</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-target="afficher_suite_non">
	<span class="ffx-name">non</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-target="afficher_suite_ptet">
	<span class="ffx-name">ptet</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-target="afficher_suite_ptet afficher_suite_oui">
	<span class="ffx-name">oui et ptet</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>

<!-- 2 EME EXEMPLE -->
<div class="formflex_title_2">
 2 ème exemple : spécifier un choix par défaut si rien n'est coché
</div>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">j'affiche la suite ?</legend>
	<label class="ffx-checkskin ffx-checkskin--radio" data-radio-auto-menu="afficher_suite_2_oui">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test223">
		</span>
		<span class="ffx-name">oui</span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-checkskin ffx-checkskin--radio uncheck_default" data-radio-auto-menu="afficher_suite_2_non">
		<span class="ffx-checkskin__input">
			<i class="fa fa-check"></i>
			<input type="radio" name="test223">
		</span>
		<span class="ffx-name">non</span>
		<span class="ffx-clear"></span>
	</label>
</fieldset>
<label class="ffx-label" data-target="afficher_suite_2_oui">
	<span class="ffx-name">oui</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-target="afficher_suite_2_oui">
	<span class="ffx-name">non</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
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

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Systèmes d'affichage ciblé (checkbox)
</div>

<?php ob_start(); ?>

<label class="ffx-checkskin ffx-checkskin--checkbox" data-checkbox-auto-menu="afficher_checkbox_suite">
	<span class="ffx-checkskin__input">
		<i class="fa fa-check"></i>
		<input class="ffx-input" type="checkbox" name="test3">
	</span>
	<span class="ffx-name">Afficher la suite</span>
	<span class="ffx-clear"></span>
</label>

<label class="ffx-label" data-target="afficher_checkbox_suite-yes">
	<span class="ffx-name">Addresse différente affichée si case cochée</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<blockquote>
- utiliser l'attribut "data-checkbox-auto-menu" sur l'élément de commande (label.checkbox) et y spécifier le mot clé unique lié à ce choix<br />
<br />
- sur chaque item commandé par ce menu, placer un attribut "data-target" contenant l'identifiant unique suivit de "-yes" ou de "-no".<br />
Ce dernier point décidera quel état de la checkbox fera apparaitre l'item (il est donc possible d'utiliser un fonctionnement inversé avec un affichage uniquement quand décoché).
</blockquote>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Systèmes d'affichage ciblé (select)
</div>

<?php ob_start(); ?>

<fieldset class="ffx-fieldset">
	<legend class="ffx-legend">j'affiche la suite ? (select)</legend>
	<select class="ffx-select" data-ffx-select-automenu="afficher_suite_select" name="" id="">
		<option value="" data-key="">-</option>
		<option value="" data-key="oui">oui</option>
		<option value="" data-key="non">non</option>
		<option value="" data-key="ptet">ptet</option>
	</select>
</fieldset>
<label class="ffx-label" data-ffx-select-target="afficher_suite_select-oui">
	<span class="ffx-name">oui</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-ffx-select-target="afficher_suite_select-non">
	<span class="ffx-name">non</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-ffx-select-target="afficher_suite_select-ptet">
	<span class="ffx-name">ptet</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-ffx-select-target="afficher_suite_select-ptet afficher_suite_select-oui">
	<span class="ffx-name">oui et ptet</span>
	<input class="ffx-input" type="text" size="30">

	<span class="customErrorValidation"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<blockquote>
- utiliser l'attribut "data-ffx-select-automenu" sur le select
et y spécifier le mot clé lié à cette question (sans la terminaison)<br />
EX: couple_marie, enfants_au_domicile, etc.
<br /><br />
- sur chaque "< option >" de ce select, ajouter "data-key" et y spécifier la réponse à la question<br />
EX: oui, non, 1, 2, celibataire, etc.
<br /><br />
- mettre la combinaison du mot clé et de la réponse (séparé par un tiret) sur chaque élément qui devra être affiché quand ce choix est actif.<br />
Le mot clé doit être mis dans un attribut "data-ffx-select-target".<br />
peut importe où il se trouve sur la page et sur quel type d'élement,
il sera commandé par le menu.<br />
EX: enfants_au_domicile-oui, nombre_de_chambres-2, etc.
<br /><br />
- il est possible qu'on élément soit commandé par plusieurs menu, juste mettre les différents
 mots clés dans un même "data-ffx-select-target" séparés par des espaces
</blockquote>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Plugin d'ajout d'items
</div>

<div class="formflex_title_2">
	Exemple 1 : simple, sans tri ni ffx-name automatique
</div>

<?php ob_start(); ?>
<fieldset class="ffx-fieldset" data-group="simple1">
	<label class="ffx-label">
		<span class="ffx-name">champs-1</span>
		<input class="ffx-input" type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-name">champs-2</span>
		<input class="ffx-input" type="text" size="30">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>
	<label class="ffx-label">
		<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
		<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
	</label>
</fieldset>
<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<div class="formflex_title_2">
	Exemple 2 : identique, avec le système de tri en plus
</div>

<?php ob_start(); ?>
<div class="sortable">
	<fieldset class="ffx-fieldset" data-group="simple1_tri">
		<label class="ffx-label">
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
		</label>
		<label class="ffx-label">
			<span class="ffx-name">champs-1</span>
			<input class="ffx-input" type="text" size="30">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>
		<label class="ffx-label">
			<span class="ffx-name">champs-2</span>
			<input class="ffx-input" type="text" size="30">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>
		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- \sortable -->
<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
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

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	"children_templates" : élément invisible injecté par js
</div>

<?php ob_start(); ?>

<div style="display:none">
	<div class="category" data-ffx-child-template="classic_child1">
		<div>
<?php
for($i=1;$i<=3;$i++) :
if($i==1){$lang="fr";}
if($i==2){$lang="nl";}
if($i==3){$lang="en";}
?>
			<fieldset class="ffx-fieldset" data-lang-iso="<?php echo $lang; ?>">
				<label class="ffx-label">
					<input type="hidden" value="0" class="sortable_get_position">
					<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
				</label>

				<label class="ffx-label">
					<span class="ffx-name">batiment</span>
					<input class="ffx-input" type="text" size="60" name="" data-name="building" value="">

					<span class="customErrorValidation"></span>
					<span class="ffx-clear"></span>
				</label>

				<label class="ffx-label">
					<span class="ffx-round-icon ffx-round-icon--blue" data-ffx-children-add="classic_child1"><i class="fa fa-caret-square-o-down"></i></span>
					<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
				</label>
			</fieldset>
<?php endfor; ?>
		</div>
	</div><!-- \category -->
</div>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Menu de langue
</div>

<?php ob_start(); ?>

<ul class="ffx-lang-menu" data-lang-menu="commentaires_test">
	<li data-lang="fr">fr</li>
	<li data-lang="nl">nl</li>
	<li data-lang="en">en</li>
</ul>

<label class="ffx-label" data-lang-category="commentaires_test" data-lang-target="commentaires_test-fr">
	<span class="ffx-name">Commentaire fr</span>
	<textarea class="ffx-textarea" name="" id="" cols="30" rows="10">fr</textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-lang-category="commentaires_test" data-lang-target="commentaires_test-nl">
	<span class="ffx-name">Commentaire nl</span>
	<textarea class="ffx-textarea" name="" id="" cols="30" rows="10">nl</textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>
<label class="ffx-label" data-lang-category="commentaires_test" data-lang-target="commentaires_test-en">
	<span class="ffx-name">Commentaire en</span>
	<textarea class="ffx-textarea" name="" id="" cols="30" rows="10">en</textarea>

	<span class="customErrorValidation" data-name="street"></span>
	<span class="ffx-clear"></span>
</label>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<blockquote>
- utiliser l'attribut "data-lang-menu" sur le menu des langues et lui donner une valeur unique (ex:menu_test).<br />
<br />
- utiliser l'attribut "data-lang" sur chaque bouton de ce menu et y mettre la langue (ex:fr,nl,etc).<br />
<br />
- Ajouter l'attribut "data-lang-category" sur chaque element commandé par ce menu.<br />
ex: menu_test<br />
<br />
- Ajouter l'attribut "data-lang-target" sur chaque element commandé par ce menu.<br />
Dans ce dernier attribut, ecrire le mot clé composé du nom du catégorie et de l'extension de langue, séparés par un tiret.<br />
ex: menu_test-fr.<br />
<br />
PS: il est possible d'utiliser plusieurs fois le même attribut (pas besoin de regrouper sous un même parent).
</blockquote>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Menu de langue avec système de création
</div>

<?php ob_start(); ?>

<ul class="ffx-lang-menu" data-lang-menu="testation">
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
	<fieldset class="ffx-fieldset" data-lang-target="testation-<?php echo $lang; ?>" data-lang-category="testation" data-lang-iso="<?php echo $lang; ?>" data-formflex-base="formflex[pages][1295]">
		<label class="ffx-label">
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">Ville</span>
			<input class="ffx-input" type="text" name="formflex[pages][1295][0][city]" data-name="city" size="50" value="">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
	<?php endfor; ?>
</div><!-- /category -->
</div><!-- /sortable -->

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Auto-naming : cas 1
</div>

<?php ob_start(); ?>

<div class="category manual_increment" data-group="identifiant-unique-de-ce-groupe">
	<fieldset class="ffx-fieldset" data-formflex-base="formflex[pages][1295]">
		<label class="ffx-checkskin ffx-checkskin--radio">
			<span class="ffx-checkskin__input">
				<i class="fa fa-check"></i>
				<input type="radio" name="formflex[pages][1295][0][radio]" data-name="radio">
			</span>
			<span class="ffx-name">oui</span>

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-checkskin ffx-checkskin--radio">
			<span class="ffx-checkskin__input">
				<i class="fa fa-check"></i>
				<input type="radio" name="formflex[pages][1295][0][radio]" data-name="radio">
			</span>
			<span class="ffx-name">non</span>

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<blockquote>
si on supprime l'attribut "data-name" des inputs, le système marche toujours mais n'ajoute pas les derniers crochets. Ca se finit donc sur le nombre incrémenté
</blockquote>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Auto-naming : cas 2
	<small class="replace_names_link">(click to show names)</small>
</div>

<?php ob_start(); ?>

<div class="sortable">
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="0">
	<fieldset class="ffx-fieldset" data-formflex-base="formflex[pages][1295]">
		<label class="ffx-label">
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">rue</span>
			<input class="ffx-input" type="text" name="formflex[pages][1295][0][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">num</span>
			<select class="ffx-select" name="formflex[pages][1295][0][num]" data-name="num">
				<option value="">mois</option>
			</select>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="1">
	<fieldset class="ffx-fieldset" data-formflex-base="formflex[pages][1295]">
		<label class="ffx-label">
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">rue</span>
			<input class="ffx-input" type="text" name="formflex[pages][1295][1][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">num</span>
			<select class="ffx-select" name="formflex[pages][1295][1][num]" data-name="num">
				<option value="">mois</option>
			</select>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
<div class="category manual_increment" data-group-cpt="2" data-group="children_group_efgdgfrer" data-this-cpt="2">
	<fieldset class="ffx-fieldset" data-formflex-base="formflex[pages][1295]">
		<label class="ffx-label">
			<input type="hidden" value="0" class="sortable_get_position">
			<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">rue</span>
			<input class="ffx-input" type="text" name="formflex[pages][1295][2][street]" data-name="street" size="30" value="">

			<span class="customErrorValidation"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-name">num</span>
			<select class="ffx-select" name="formflex[pages][1295][2][num]" data-name="num">
				<option value="">mois</option>
			</select>

			<span class="customErrorValidation" data-name="street_nbr"></span>
			<span class="ffx-clear"></span>
		</label>

		<label class="ffx-label">
			<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
			<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
		</label>
	</fieldset>
</div><!-- /category -->
</div><!-- /sortable -->

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Auto-naming : cas 3
	<small class="replace_names_link">(click to show names)</small>
</div>


<?php ob_start(); ?>

<fieldset class="ffx-fieldset category manual_increment" data-group="children_group_efgdgfsfsdfrer" data-formflex-base="formflex[pages][1295]">
	<label class="ffx-label">
		<span class="ffx-name">rue</span>
		<input class="ffx-input" type="text" name="sdfsdfsdf" data-name="street" size="30" value="">

		<span class="customErrorValidation"></span>
		<span class="ffx-clear"></span>
	</label>

	<label class="ffx-label">
		<span class="ffx-name">num</span>
		<select class="ffx-select" name="sdfsdf" data-name="num">
			<option value="">mois</option>
		</select>

		<span class="customErrorValidation" data-name="street_nbr"></span>
		<span class="ffx-clear"></span>
	</label>

	<label class="ffx-label">
		<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
		<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
	</label>
</fieldset>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>

<!--------------------------------------------------------------------------------->

<div class="formflex_title">
	Auto-naming : cas 4
	<small class="replace_names_link">(click to show names)</small>
</div>

<ul class="ffx-lang-menu" data-lang-menu="children_test">
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
		<fieldset class="ffx-fieldset" data-lang-target="children_test-<?php echo $lang; ?>" data-lang-category="children_test" data-lang-iso="<?php echo $lang; ?>" data-formflex-base="form[pages][1295]">
			<label class="ffx-label">
				<input type="hidden" value="0" class="sortable_get_position">
				<span class="ffx-round-icon ffx-round-icon--gray-on-white move"><i class="fa fa-arrows"></i></span>
			</label>

			<label class="ffx-label">
				<span class="ffx-name">rue</span>
				<input class="ffx-input" type="text" name="form[pages][1295][0][street][<?php echo $lang; ?>]" data-name="street" size="20" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label class="ffx-label">
				<span class="ffx-name">numero</span>
				<input class="ffx-input" type="text" name="form[pages][1295][0][number][<?php echo $lang; ?>]" data-name="number" size="3" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label class="ffx-label">
				<span class="ffx-name">Ville test</span>
				<input class="ffx-input" type="text" name="form[pages][1295][0][city][<?php echo $lang; ?>]" data-name="city" size="15" value="">

				<span class="customErrorValidation"></span>
				<span class="clear"></span>
			</label>

			<label class="ffx-label">
				<span class="ffx-round-icon ffx-round-icon--blue" data-ffx-children-add="classic_child1"><i class="fa fa-caret-square-o-down"></i></span>
				<span class="ffx-round-icon ffx-round-icon--red ffx-round-icon--delete"><i class="fa fa-trash"></i></span>
				<span class="ffx-round-icon ffx-round-icon--green ffx-round-icon--dupplicate"><i class="fa fa-plus"></i></span>
			</label>
		</fieldset>
		<?php endfor; ?>
	</div>
</div><!-- /category -->
</div><!-- /sortable -->

<!--------------------------------------------------------------------------------->

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
