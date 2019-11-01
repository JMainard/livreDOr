<html>
		<head>
				<title> Livre d'or </title>
				<link rel="stylesheet" type="text/css" href="livreOr.css" />
		</head>
	
		<body>
			<h1> Livre d'Or </h1>
			<div>
			<?php


					if (!$ecritureLivreOr=fopen('messageLivreOr.txt','a'))	
				{
					$ecritureLivreOr=fopen('messageLivreOr.txt','w');
				}
					fclose($lectureLivreOr);
	//Test pour savoir si il y a eu un message et un pseudo dans le formulaire 
			if(isset($_POST['pseudo']) && isset($_POST['message']))
			{

			//crée un ligne dans le fichier livre.txt						
				if(!$ecritureLivreOr)
					{
						echo'L\'ouverture du fichier à échoué';
					}


					$message=$_POST['pseudo'].":".$_POST['message']."\n";
					fputs($ecritureLivreOr,$message);
					fclose($ecritureLivreOr);
					}
		
					?>	
			</div>
			
				
			<form method="POST" action="">

				<div>
				<label for="pseudo" > Nom/pseudo </label>
				<input id="pseudo" name="pseudo" type="text"  />
				</div>

				<div>
				<label for="message" > Message </label>
				<textarea name="message" col="25" row="4" ></textarea>
				</div>
					
				<div>
				<input type="submit" value="Envoyer" />
				</div>
		<?php




				$lectureLivreOr=fopen('messageLivreOr.txt','r');
				$compteur=0;
				while($ligneLivreOr=fgets($lectureLivreOr))
				{
					$compteur++;
				if($compteur%2==0){
					echo '<p class="couleur"">' .$ligneLivreOr.'</p>';
					}
		else{
					echo '<p>' .$ligneLivreOr. '<p>';

}
				}
			

				fclose($lectureLivreOr);


		?>
			</form>


		</body>
</html>
