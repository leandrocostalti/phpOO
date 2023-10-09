<?php
$media = 8;
  switch ($media) {
    case 10:
      echo "Aluno, fechou a prova";
      break;
    case 8:
      echo "Aluno, passou por média na prova";
      break;
    case 7:
      echo "Aluno, de recuperação a prova";
      break;
    default:
      echo "Aluno, Reprovado!";
      break;
  }
