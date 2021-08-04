<?php

class empresa {
    const NOME_EMPRESA = 'DevMedia';
}


echo empresa::NOME_EMPRESA;
//////////////////////

$a = 8;
$b = 2;

echo $a/$b == 2 ? "O resultado é 2" : "O resultado não é 2";

////////////////////////

$sorteio = rand(0,5);

switch($sorteio){
   case 0:
         echo "Você perdeu a vez";
         break;
   case 1:
         echo "Avance 1 casa";
         break;
   case 2:
         echo "Você ganhou um bônus! Avance 3 casas";
         break;
   default:
         echo "Jogue novamente";
         break;
}
//////////////////////////

$a = 8;
$b = 4;

function dividir(&$num_1, &$num_2){

    $operacao = $num_1 / $num_2;
  
    return $operacao;
  
  }
  
  //Chamada da função
  echo dividir($a,$b);


  $rg_cpf = "112345667";

  switch ($rg_cpf) {
      case strlen($rg_cpf) ==9 :
        echo "você informou o cpf" ;
        break;
  }
//////////////////////////////////qqq


  $funcionarios = array(
    array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true),
    array("nome" => "Emerson", "idade" => 35, "salario" => 3885.27, "ativo" => false),
    array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true),
 );
 
 $bonificacao = 10;
 
 foreach($funcionarios as $funcionario){
     if($funcionario["ativo"]){
      $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);
 
      echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}\n";
     } else {
      echo "Funcionario: {$funcionario['nome']} - INATIVO\n";
     }
 }

///////////////////////////////////////

    define('TOTALPONTOS',54);
    $arremesso = 1;
    $cesta3pontos = 0;
    $cestas = 0;

    while ($cestas < TOTALPONTOS) {
        if ($arremesso % 4 == 0) {

            $cestas += 3;
            $cesta3pontos ++;
        } else {
            $cestas +=2;
        }
        break;
    }

    echo "Cestar de 3 pontos : $cesta3pontos";

    $pitStop = 0;
    $totalVoltas = 55;

    for ($voltas = 0; $voltas <=$totalVoltas; $voltas++) {
       if ($voltas >0 && $voltas < $totalVoltas && $voltas % 5 ==0){
           $pitStop++;
       }
    }
    echo "Foram feitos $pitStop pit stops durante a corrida";


    function pagar($valor, $cupomDesconto){

    
        if($cupomDesconto === 'LED4K') {
        
                $valor -= 200;
        
            }
        else
        {
        
            $juros = $valor * (10/100);
        
                $valor = $valor + $juros;
            }
        
            
        return
         $valor;
        }
        
        $cupom = 'LED4K';
        
        $valor_compra = 1400;
        
        $valor_final = pagar($valor_compra,$cupom
        );
        
        echo <<<COMPRA
         O valor a ser pago é de: R$ $valor_final
        COMPRA;
        /////////////////////////////////////////


        $sequencia = '11000000011101';
        $numerosZero = 0;
        $numerosUm = 0;
        
        $tamanho = strlen($sequencia);
        
        for
         ($indice = 0; $indice < $tamanho ; $indice++) {
        
            
        switch($tamanho[$indice]) {
        
                case '0':
                $numerosZero++;
                break;
        
                case '1':
                $numerosUm++;
                break;
            }
        }
        
        echo "Total 0 : $numerosZero | Total 1 : $numerosUm";

        
function retornaTotalPares()
{
   $x = 1;
   $pares = 0;

   
while ($x < 10){
       
if ($x % 2 == 0){
           $pares++;
       }

       $x++;
   }

   
return $pares;
}
echo retornaTotalPares();



$telefone = '996744729';
$qntDigitos = strlen($telefone);
$espaçoVazio = 0;
$caractereEspecial = 0;

if ($qntDigitos ==9 && $telefone[0] == '9') {
    for ($indice = 1; $indice < $qntDigitos; $indice++){
        switch ($telefone[$indice]){
            case '':
                $espaçoVazio++;
                break;
            case '-':
                $caractereEspecial++;
                break;
        }
    }
    if ($espaçoVazio >0 || $caractereEspecial >0) {
        echo "Presença de caractere especial ou espaço em branco";
    } else  { 
        echo "Número válido";

    }
} else {
    echo "Número invalido";
}
////////////////////////////////

$var = 'Bradil';

$var[3] = 's';

echo <<<'BR'
$var
BR;
///////////////////////

define ('DISTANCIA', 1000);

function calculaTempo($velocidade){

    $tempo = DISTANCIA / $velocidade;

return $tempo;
}

$velocidade_carro_1 = 50;
$velocidade_carro_2 = 100;

$tempo_1 = calculaTempo($velocidade_carro_1);
$tempo_2 = calculaTempo($velocidade_carro_2);

echo "O carro 1 fez o trajeto em: $tempo_1 s";
echo "O carro 2 fez o trajeto em: $tempo_2 s";

$conta1 = '888-9';

$conta2 = '9-8';

function
 recupera_digito($conta) {

    $i = 0;

    
while($i < strlen($conta)){

        
if
($conta[$i] === '-') {

            
$conta[$i] =$conta[++$i];
        }

        $i++;
    }
}

echo recupera_digito($conta1);

echo recupera_digito($conta2);

$data = '08/06/1995';
$mesNascimento = substr($data, 3, 2);
echo $mesNascimento;

/////////////////////////////

$var_1 = '73';
$var_2 = 73;

$var_2 = (string)$var_2;

if ($var_1 === $var_2) {

	print ('As variáveis são iguais');

} else{

	print ('São diferentes');
}

////////////////////////////// date

$data_atual = getDate();
$dia_semana = $data_atual['wday'];

$escala = ["Amanda", "João", "Juliana", "Rogério", "Bianca", "Roberto", "Kelly"];

$plantao = $escala[$dia_semana];

echo "O funcionário de plantão é: " . $plantao;
 //echo $data_atual->format('d-m-Y H:i:s');

 $notas = array(9, 4, 10);
 $total_av = count($notas);
 $total_notas = 0;
foreach($notas as $total_notas ){
    $total_notas += $nota;
}

 $media = $total_notas / $total_av;

$resultado = $media > 6 ? "Aprovado" : "Reprovado";

echo $total_notas;
echo $resultado;



$jogos_psp = [
    "God of War: Chains of Olympus",
    "Metal Gear: Peace Walker",
    "Crisis Core: Final Fantasy VII"
  ];
  for($i =0, $j= count($jogos_psp); $i < $j; $i++) {
      echo $jogos_psp[$i];
  };
  

  $candidato = array(
    "nome" => "Fernando Souza",
    "tecnologias" => array("PHP", "Java", "JavaScript", "Python")
  );
  $tecnologias = $candidato['tecnologias'];
  
  $tecnologia_busca = "PHP";
  
  $i = 0;
  while($i < count($tecnologias)) {
      if ($candidato[$tecnologias][$i] == $tecnologia_busca){
        echo "O candidato aprovado";
      }
      $i++;
  };

  $revisao = new DateTime();
  $revisao->add( new DateInterval('P10D'));
  echo "Data da próxima revisão: " . $revisao->format('Y-m-d');




  $apps = array(
    array( "nome" => "ifood", "instalado" => false ),
    array( "nome" => "whatsapp", "instalado" => true ),
    array( "nome" => "uber", "instalado" => true ),
  );
  foreach($apps as $app ){
    if (  $app["instalado"] == false ) {
            echo "Deseja instalar o app: " . $app["nome"];
          }
  };


///////////////////
  $filme = array(
    "nome" => "Um lugar silencioso 2",
    "diretor" => "John Krasinski",
    "lançamento" => 2021
  );
  
  $data_atual = new DateTime();
  $ano_atual = $data_atual->format('Y');
  $texto = "";
  
  if ($filme["lançamento"] == $ano_atual) {
    $texto = "Lançamento do ano dá um play";
  } else if ($filme["lançamento"] > $ano_atual) {
    $texto = "Este filme ainda não lançou.";
  } else {
    $texto = "Filme disponível para assistir.";
  }
  
  echo $texto;


  $hoje = new DateTime();
  echo $hoje->format('Y-m-d');
  $hoje = date('Y-m-d');
  echo $hoje;


?>