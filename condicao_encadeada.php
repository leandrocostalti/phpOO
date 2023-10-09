<?php
  $salario = 1200; //R$
  $tempo_servico = 12; //meses
  $tem_reclamacoes = false; //boleano
  if ($salario>1000) {
    if($tempo_servico>=12){
      if($tem_reclamacoes != true){
        echo "Parabéns Você foi Promovido!<hr>";
      }
    }
  }
  if (($salario>1000)&&($tempo_servico>=12)&&($tem_reclamacoes != true)) {
    echo "Parabéns Você foi Promovido!<hr>";
  }
?>
