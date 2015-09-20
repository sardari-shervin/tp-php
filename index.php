<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style type="text/css">
        	*{
        		font-family: sans-serif;
        		margin: 0;
        		padding: 0;
        	}
        	
			[type="radio"]:not(:checked),
			[type="radio"]:checked {
			  position: absolute;
			  left: -9999px;
			}
			 

			[type="radio"]:not(:checked) + label,
			[type="radio"]:checked + label {
			  position: relative; 
			  padding-left: 25px; 
			  cursor: pointer;    
			}

			[type="radio"]:not(:checked) + label:before,
			[type="radio"]:checked + label:before {
			  content: '';
			  position: absolute;
			  left:0; top: 0px;
			  width: 17px; height: 17px; 
			  border: 1px solid #4A90E2;
			  background: white;
			  
			  
			}
			 

			[type="radio"]:not(:checked) + label:after,
			[type="radio"]:checked + label:after {
			  content: '/';
			  position: absolute;
			  top: 1px; left: 7px;
			  font-size: 14px;
			  color: #4A90E2;
			  transition: all .2s; 
			}

			[type="radio"]:not(:checked) + label:after {
			  opacity: 0; 
			  transform: scale(0); 
			}

			[type="radio"]:checked + label:after {
			  opacity: 1; 
			  transform: scale(1); 
			}


			[type="radio"]:disabled:not(:checked) + label:before,
			[type="radio"]:disabled:checked + label:before {
			  box-shadow: none;
			  border-color: #bbb;
			  background-color: #ddd;
			}

			[type="radio"]:disabled:checked + label:after {
			  color: #999;
			}

			[type="radio"]:disabled + label {
			  color: #aaa;
			}
			 

			[type="radio"]:checked:focus + label:before,
			[type="radio"]:not(:checked):focus + label:before {
			  border: 1px dotted blue;
			}
        	h1{
        		font-weight: 100;
        	}
        	h2{
        		font-weight: 100;
        	}
        	h3{
        		font-weight: 100;
        	}
			form{
				margin: 0 auto;
				width: 400px;
				padding: 20px;
			}

			fieldset{
				border: none;
				margin-top: 50px;
				margin-bottom: 50px;
				text-align: center;

			}

			input{
				cursor: pointer;
				display: inline;
				margin-top: 20px;
			}
			label{
				cursor: pointer;
			}

			.submit{
				width: 200px;
				margin-left: 25%;
				background: white;
				height: 50px;
				border: none;
				border: 1px solid #4A90E2;
				cursor: pointer;

			}
			#intro{
				width: 400px;
				margin: 0 auto;
				text-align: center;
				padding: 20px;
				border: 1px solid #4A90E2;
				margin-top: 100px;
			}

			.submit:hover{
				background: #4A90E2;
				border: 1px solid white;
				color: white;
				-webkit-transition: .2s;
			}



			.lol{
				width: 400px;
				display: block;
				margin: 0 auto;
				height: 300px;
			}

			#answer{
				padding: 30px;
				width: 100%;
				text-align: center;
			}

			a{
				text-decoration: none;
				border: 1px solid #383838;
				padding: 29px;
				text-align: center;
				color: #383838;
				display: block;
				margin-top: 100px;
			}

			a:hover{
				background: #383838;
				color: white;
			}


		</style>
    </head>
    <body>
        <?php 
			$copine = $_GET['copine'];
			$maas = $_GET['maas'];
			$rouge = $_GET['rouge'];
			$entretient = $_GET['entretient'];
			$course = $_GET['course'];
			$soeur = $_GET['soeur'];
			if (count($_GET) >0) {


				if ($copine == 'oui' && $maas == 'non' && $rouge =='non' && $entretient == 'non' && $course =='non' && $soeur == 'oui') {
					$answer = "ok c'est d'accord prend une des deux";
				}else if($entretient == 'oui'){
					$answer = "non fils je t'ai déjà dit que je ne veux pas que tu te trouves du travail. Je veux que comme moi tu profites de la société en finissant au chômage.";
				}else if($rouge == 'oui'){
					$answer = "et tu as sûrement cru que j'allais te payer ta passe ? P'tit con va !";
				}else{
					$answer ="non, va sortir la poubelle !";
				}
			}
			function reponse($answer){

				$resultat = $answer;
				$resultat = ucfirst($answer);
				return $resultat;	
			};
		
		?>
		<div id="intro">
			<h1>J'ai besoin de la voiture de mon père...</h1>
			<h2>Aidez moi à trouver les bonnes questions qui m'aideront à conduire sa voiture.</h2>
			<h3>Papa, je pourrais avoir ta voiture pour...</h3>
		</div>
 
		<h1 id="answer"> <?php echo reponse($answer, $image);?></h1>
			<?php if ($copine == 'oui' && $maas == 'non' && $rouge =='non' && $entretient == 'non' && $course =='non' && $soeur == 'oui') {
				echo '<img class="lol" src="rolls.jpg" alt="">';
			}
			?>
			
		<form method="get"> 
			<fieldset id="field-copine">
				<legend>Conduire ma copine au travail ?</legend>
				<input id="oui" type="radio" name="copine" value="oui" <?php if( $_GET['copine']=='oui'){ echo 'checked="checked"';} ?> >
				<label for="oui">oui</label>

				<input id="non" type="radio" name="copine" value="non">
				<label for="non">non</label>

			</fieldset>

			<fieldset>

				<legend>Aller à Maastricht faire le tour des cofee shop ? </legend>
				<input id="yes" type="radio" name="maas" value="oui">
				<label for="yes">oui</label>

				<input id="no" type="radio" name="maas" value="non" <?php if( $_GET['maas']=='non'){ echo 'checked="checked"';} ?> >
				<label for="no">non</label>

			</fieldset>

			<fieldset>
				<legend>Faire un tour dans le quartier rouge ? </legend>
				<input id="approuve" type="radio" name="rouge" value="oui">
				<label for="approuve">oui</label>

				<input id="desaprouve" type="radio" name="rouge" value="non" <?php if( $_GET['rouge']=='non'){ echo 'checked="checked"';} ?> >
				<label for="desaprouve">non</label>
			</fieldset>

			<fieldset>
				<legend>Aller à un entretien d'embauche</legend>
				<input id="entretient" type="radio" name="entretient" value="oui">
				<label for="entretient">oui</label>

				<input id="embauche" type="radio" name="entretient" value="non" <?php if( $_GET['entretient']=='non'){ echo 'checked="checked"';} ?> >
				<label for="embauche">non</label>
			</fieldset>

			<fieldset>
				<legend>Participer à une course de voiture en pleine ville et sans ceinture ? </legend>
				<input id="course" type="radio" name="course" value="oui">
				<label for="course">oui</label>

				<input id="ville" type="radio" name="course" value="non" <?php if( $_GET['course']=='non'){ echo 'checked="checked"';} ?> >
				<label for="ville">non</label>
			</fieldset>

			<fieldset>
				<legend>Aller chercher ma soeur à l'école</legend>
				<input id="soeur" type="radio" name="soeur" value="oui" <?php if( $_GET['soeur']=='oui'){ echo 'checked="checked"';} ?> >
				<label for="soeur">oui</label>

				<input id="ecole" type="radio" name="soeur" value="non">
				<label for="ecole">non</label>
			</fieldset>


			<input class="submit" type="submit" value="DEMANDER AU PATERNEL">

			<a href="https://github.com/sardari-shervin/tp-php" target='_blank'>Lien vers le Git</a>
			

			
		</form>
 
    </body>
</html>









