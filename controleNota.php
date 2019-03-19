<style>
.aprovado
.reprovado
</style>
<?php
	if(filter_input(INPUT_GET, "aluno") &&
		filter_input(INPUT_GET, "ano") &&
		filter_input(INPUT_GET, "n1") &&
		filter_input(INPUT_GET, "n2") &&
		filter_input(INPUT_GET, "n3") &&		
		filter_input(INPUT_GET, "n4")
	){
		$aluno = filter_input(INPUT_GET, "aluno");
		$ano = filter_input(INPUT_GET, "ano");
		$n1 = filter_input(INPUT_GET, "n1");
		$n2 = filter_input(INPUT_GET, "n2");
		$n3 = filter_input(INPUT_GET, "n3");
		$n4 = filter_input(INPUT_GET, "n4");
		$media = ($n1 + $n2 + $n3 + $n4)/4;
		echo "<fieldset>Aluno = " . $aluno;
		echo "<br>Ano = " . $ano;
		echo "<br>N1 = " . $n1;
		echo "<br>N2 = " . $n2;
		echo "<br>N3 = " . $n3;
		echo "<br>N4 = " . $n4;
		echo "<br>Média= " . $media;
		echo "</fieldset>";
	if($media>=6) {
		echo "<p class=aprovado>Parebens" .$aluno . ", Você foi aprovado com média= " . $media . "</p>";
		}
	else {
	   echo "<p class=reprovado>Puxa vida" .$aluno . ", Você foi reprovado com média= " . $media . "</p>";
	}
		
	}else{
		echo "Campos não preenchidos!!!"; 
	}
?>