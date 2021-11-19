<!DOCTYPE html>
<html>
<head>
	<title>atv3</title>
	<meta charset="utf-8">
</head>
<body>


<form action="" method="POST">
	<h1>Escolha as formatações:</h1>
	<p>                                                                                                        
		<label>Escolha a cor de fundo:</label>
		<select name="cor">
			<option value=""></option>
			<option value="red">Vermelho</option>
			<option value="pink">Rosa</option>
			<option value="blue">Azul</option>
			<option value="yellow">Amarelo</option>
		</select>
	</p>
	<p>
		<label>Escolha o seu texto:</label>
		<select name="texto">
			<option value=""></option>
			<option value="brasil">Meu Brasil</option>
			<option value="hino1">Hino 1°parte</option>
			<option value="hino2">Hino 2°parte</option>
		</select>
	</p>
	<p>
		<label>Escolha a posição da imagem:</label>
			<select name="alinhamento" >
				<option value=""></option>
				<option value="nenhum">Nenhum</option>
				<option value="right">Direita</option>
				<option value="left">Esquerda</option>
			</select>
	</p>
	<p>
		<input type="submit" value="Enviar" name="btnEnviar">
	</p>
<hr>
</form>
<div>
<?php
	if (isset($_POST["btnEnviar"]) && !(empty($_POST["cor"])) && !(empty($_POST["texto"])) && !(empty($_POST["alinhamento"])))
	{
		$cor = $_POST["cor"];
		$texto = $_POST["texto"];
		$alinhamento = $_POST["alinhamento"];
		$img = "img1.png";
		switch ($texto) 
		{
			case "hino1":

			echo "<br><br><div style ='background-color: $cor'>"; 
			echo "<img src='$img' alt='image' align='$alinhamento' width='200' height='130'>";	
				echo " 
				Ouviram do Ipiranga as margens plácidas
				De um povo heroico o brado retumbante
				E o sol da liberdade, em raios fúlgidos
				Brilhou no céu da pátria nesse instante
				<br>
				Se o penhor dessa igualdade
				Conseguimos conquistar com braço forte
				Em teu seio, ó liberdade
				Desafia o nosso peito a própria morte!
				<br>
				Ó Pátria amada
				Idolatrada
				Salve! Salve!
				<br>
				Brasil, um sonho intenso, um raio vívido
				De amor e de esperança à terra desce
				Se em teu formoso céu, risonho e límpido
				A imagem do Cruzeiro resplandece
				<br>
				Gigante pela própria natureza
				És belo, és forte, impávido colosso
				E o teu futuro espelha essa grandeza
				<br>
				Terra adorada	
				Entre outras mil
				És tu, Brasil
				Ó Pátria amada!
				Dos filhos deste solo és mãe gentil
				Pátria amada
				Brasil!
				<br><br><br>";
					break;
			case "hino2":

				echo "<br><br><div style ='background-color: $cor'>"; 
				echo "<img src='$img' alt='image' align='$alinhamento' width='200' height='130'>";	
				
				echo  
				"Deitado eternamente em berço esplêndido
				Ao som do mar e à luz do céu profundo
				Fulguras, ó Brasil, florão da América
				Iluminado ao sol do Novo Mundo!
				<br>
				Do que a terra mais garrida
				Teus risonhos, lindos campos têm mais flores
				Nossos bosques têm mais vida
				Nossa vida, no teu seio, mais amores
				<br>
				Ó Pátria amada
				Idolatrada
				Salve! Salve!
				<br>
				Brasil, de amor eterno seja símbolo
				O lábaro que ostentas estrelado
				E diga o verde-louro dessa flâmula
				Paz no futuro e glória no passado
				<br>
				Mas, se ergues da justiça a clava forte
				Verás que um filho teu não foge à luta
				Nem teme, quem te adora, a própria morte
				<br>
				Terra adorada
				Entre outras mil
				És tu, Brasil
				Ó Pátria amada!
				Dos filhos deste solo és mãe gentil
				Pátria amada
				Brasil!
				<br><br><br>
				";
					break;


			default:

				echo "<br><br><div style ='background-color: $cor'>"; 
				echo "<img src='$img' alt='image' align='$alinhamento' width='200' height='130'>";	
				echo 

				"Brasil meu Brasil brasileiro
				Mulato inzoneiro
				Vou cantar-te nos meus versos
				Brasil, samba que dá
				Bamboleio, que faz gingar
				O Brasil do meu amor
				Terra de nosso Senhor
				Abre a cortina do passado
				Tira a mãe preta do cerrado
				Bota o Rei Congo no congado
				Canta de novo o trovador
				A merencória à luz da Lua
				Toda canção do seu amor
				Quero ver essa dona caminhando
				Pelos salões arrastando
				O seu vestido rendado
				Esse coqueiro que dá coco
				Oi onde amarro a minha rede
				Nas noites claras de luar
				Por essas fontes murmurantes
				Onde eu mato a minha sede
				Onde a Lua vem brincar
				Oh esse Brasil lindo e trigueiro
				É o meu Brasil brasileiro
				Terra de samba e pandeiro
				Brasil Terra boa e gostosa
				Da morena sestrosa
				De olhar indiferente
				Brasil, samba que dá
				Para o mundo se admirar
				O Brasil, do meu amor… <br><br><br>";

		}		

	}
?>
</div>
</body>
</html>