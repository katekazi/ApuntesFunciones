<?php
 echo "<h1>¡Hola mundo!</h1>";
 //phpinfo();
 
 /*
 Comentarios de mas
 de una linea
 */

 $entero = 5;
 echo "<h3>El valor de la variable es: $entero</h3>"; //Esto es un h3
 echo "<a href='https://www.google.com/'>Gugol</a>";
 /*comillas dobles para php 
 simples para HTML*/

 $valor01= "5"; echo "<br>El tipo de vble de valor01 es ".gettype($valor01);
 $valor02= 4; echo "</br>El tipo de variable de valor02 es " .gettype($valor02);

 $resta = $valor01 + $valor02;
 echo "<br>El valor de la suma es: $resta</br>";
?>

<?php
/*mostrar ejemplo
Suma +
Resta -
Multiplicación *
División /
Resto %
Incremento UNARIO ++
Decremento UNARIO --
*/
$valor01 = 1;
$valor02 = 6;
//Suma
$resta = $valor01 + $valor02;
echo "<br>El valor de sumar $valor01 y $valor02 es $resta</br>";

//Resta
$resta = $valor01 - $valor02;
echo "<br>El valor de restar $valor01 y $valor02 es $resta</br>";

//División
$division = $valor01 / $valor02;
echo "<br>El valor de dividir $valor01 y $valor02 es $division</br>";

//Multiplicación
$multiplicacion = $valor01 * $valor02;
echo "<br>El valor de multiplicar $valor01 y $valor02 es $multiplicacion</br>";

//Resto
$resto = $valor01 % $valor02;
echo "<br>El valor del resto $valor01 y $valor02 es $resto</br>";
//Incremento Unario
$valor01++;//Equivale a $valor01 = $valor01 + 1
echo "<br>El nuevo valor del valor01 es $valor02</br>";
//Decremento Unario
$valor02--;//Equivale a $valor01 = $valor01 - 1
echo "<br>El nuevo valor del valor02 es $valor02</br>";
/*Para valores superiores a 1 es la siguiente*/
$valorprueba=1;
echo "<br>El valor de la variable es $valorprueba</br>";
$valorprueba+=2; //El valor puede ser el que queramos
echo "<br>El valor actualizado de la variable actualizado es $valorprueba</br>";
?>
<h1>Operadores</h1>
<h2>Operadores de asignación</h2>

<?php
 /*OPERADORES DE ASIGNACIÓN
  Asigna de izquierda a derecha =
  Suma de la derecha con la izquierda y asigna a la izquierda +=
  Resta derecha con izquierda y asigna a la izquierda -=
  Multiplica izquierda con derecha y asigna a la izquierda *=
  Divide la izquierda y la derecha y asigna a la izquierda /=
  Calcula el resto de la división y lo asigna a la izquierda %=
  Concatena (PEGA) la cadena de la derecha a la de la izquierda .=
  */
  $valorizda=1;
  $valordcha=2;
  $valorizda +=$valordcha;
  echo "<p>El valor de la izquierda es $valorizda</p>";
  $valorizda -=$valordcha;
  echo "<p>El valor de la izquierda es $valorizda</p>";
  //Concatenemos
  $valorizda .=$valordcha;
  echo "<p>El valor de la izquuierda después de concatenar es $valorizda</p>"; 
?>
<h1>Operadores</h1>
<h2>Operadores lógicos</h2>

<?php
/*Negación !
  Y lógico and, AND &&
  O lógico or Or ||
  O exclusivo xor XOR
*/

/*
  Operaciones condicionales
  Comparación ==
  Mayor que >
  Menor que <
  Mayor o igual >=
  Menor o igual <=
 */

 /*condicionales
  if(condicion/es)
  {
      sentencias;
  }
 */

$open = 0;
$permiso = 1;
//Si te doy permiso y la puerta está cerrada debes abrir
 if ($permiso && !$open) 
 {
     //abro puerta
     echo "Estoy abriendo la puerta";
 }
 /*condicionales
   if(condicion/es)
   {
       sentencia;
   } else{
       sentencias;
   }
   */
if ($permiso && $open) {
    echo "<p>Estoy abriendo la puerta</p>";
} else {
    echo "<p>Aquí me quedo sin hacer nada porque permiso es: $permiso y
    la puerta vale $open</p>";
}

/*if (condition) {
    # code...
} elseif() {
    # code...
} else{

}
*/

$edad = 18;
$priceOfBeer = 0.85;
$mymoney = 2.5;
$cantidadCerveza = $mymoney / $priceOfBeer;
$resultado = floor($cantidadCerveza);
if ($edad>=18 && $priceOfBeer>=0.85) {
    echo "Bienvenido al mundo del alcoholismo";
} else {
      echo "Tira pal choso cabron";
}

echo "<p>Con su dinero nuestro amigo podrá comprar $resultado cervezas</p>";

/*
Vble;
switch(condición/es){
 case "";
  sentencias;
 break;
 case "";
  sentencias;
 break;
 default:
 sentencias;
}
*/
$dia= "lunes";
switch($dia){
    case "lunes":
    echo "Hoy no tengo clase con Ayose";
    break;
    case "martes":
        echo "4 horas de clase con Ayo";
    break;        
    default:
    echo "No quiero ir a clase";
}

/*
Bucles
for (inicialización; condición; actualización){
    sentencias;
}
for ($i=0; $i < ; $i++){
    sentencias;
}
*/

for ($i=0; $i < 5; $i++){
    echo "<p>El valor de nuestra i es: $i</p>";
    if ($i==2) break;//DOBLE IGUAL PARA COMPARAR VARIABLES
}

$i= 10;
while ($i>0){
    echo "<p>El valor de nuestra i es: $i</p>";
    $i--;
}

$i = 0;
do{
 echo "<p>do... while: $i</p>";
 $i++;
}
while ($i<5);

/*
 FUNCIONES

 function NombreFuncion (parametro/s)
 {
     sentencias;
 }

*/

function Saluda($nombre= ""){
     echo "<h2>Hola, $nombre</h2>";
}
Saluda("Ayose")
?>