<?php

Do {
Echo “\n===LOGIN===\n”;

Echo “Crie a sua senha: \n”;

$senha = readline();

Echo “Digite a sua senha: \n”;

$senhafinish = readline();

If ($senha == $senhafinish){

Echo “acesso liberado”;
} Else {

Echo “senha inválida!\n “;
}
} while($senha != $senhafinish);
