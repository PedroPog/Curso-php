/*
  - A partir deste exercício, você está livre para escolher os nomes das suas  
    variáveis e constantes!
  - Após resolver cada exercício, tente reescrever partes do seu código para  
    deixá-lo mais legível.
    
    Por exemplo, uma expressão typeof crazyArray[i] === 'boolean' pode ser  
    armazenada em uma constante "isItemABoolean".
    Falaremos mais sobre legibilidade na revisão destes exercícios =)
*/

/*
  01
  - Abaixo do array "fruits", verifique se "abacaxi" existe no array. Se  
    existir, exiba no console a mensagem "A string "abacaxi" existe no array  
    fruits.";
  - Se "abacaxi" não existir, verifique se "pera" existe no array. Se existir,  
    exiba no console a mensagem "A string "pera" existe no array fruits.";
  - Se nenhuma das duas frutas existirem no array, exiba no console a mensagem  
    "Nem pera nem abacaxi existem no array "fruits".".
*/

const fruits = ['morango', 'banana', 'mamão']
console.info("Execercio 01: Inicio");
if(fruits.includes("abacaxi")){
  console.log("A string 'abacaxi' existe no array fruits.");
}else if(fruits.includes("pera")){
  console.log("A string 'pera' existe no array fruits.");
}else{
  console.log("Nem pera nem abacaxi existem no array 'fruits'.");
}
console.info("Execercio 01: Fim\n");

/*
  02
  - Armazene em uma constante apenas a hora atual na qual você está fazendo este  
    exercício. Ex.: 18;
  - À partir das 00, exiba "Bom dia!" no console;
  - À partir das 12, exiba "Boa tarde!";
  - À partir das 18, exiba "Boa noite!".
  Obs.: tanto a expressão do lado esquerdo quanto a do lado direito do operador  
  lógico precisam ter a constante especificada. Exemplo: hour > x && hour < y.
*/

const hora = new Date().getHours();
console.info("Execercio 02: Inicio");
if(hora >= 00 && hora < 12){
  console.info("Bom dia!");
}else if(hora < 18){
  console.info("Boa tarde!");
}else{
  console.info("Boa noite!");
}
console.info("Execercio 02: Fim\n");
/*
  03
  - Armazene sua idade em uma constante chamada age;
  - Escreva uma estrutura condicional em que, se a idade é 7 anos ou menos, ou  
    se a idade é 65 anos ou mais, a frase "Prezado cliente, para você, a entrada é gratuita!" é  
    armazenada em uma variável;
  - Se a idade não atende às condições acima, a variável deve armazenar a  
    mensagem "A entrada custa R$ 30,00.";
  - Exiba a mensagem no console;
  - Agora, teste diferentes idades para se certificar que a condição do `if`  
    também está funcionando.
*/

const age = 23;
let frase;
console.info("Execercio 03: Inicio");
if(age <= 7 || age >= 65){
  frase = "Prezado cliente, para você, a entrada é gratuita!";
}else{
  frase = "A entrada custa R$ 30,00.";
}
console.log(frase);
console.info("Execercio 03: Fim\n");

/*
  04
  - Utilize um for loop para gerar um novo array com apenas os números entre  
    11 e 90 presentes no array "numbers" (incluindo 11 e 90);
  - Exiba o novo array no console;
  - O resultado deve ser: [34, 46, 90, 25, 11, 89, 76].
*/

const numbers = [7, 92, 34, 46, 90, 25, 11, 3, 89, 76, 99]
let rotas = [];
console.info("Execercio 04: Inicio");

for(x=0;x < numbers.length;x++){
  const isItemANum1 = numbers[x] >= 11;
  const isItemANum2 =numbers[x] <= 90;
  if(isItemANum1 & isItemANum2){
    rotas.push(numbers[x])
  }
}
console.log(rotas.toString());


console.info("Execercio 04: Fim\n");
/*
  05
  - O array "crazyArray" (abaixo) possui 3 tipos de dados: numbers, booleans  
    e strings;
  - Considerando este array, substitua os "X" da frase abaixo pelas informações  
    corretas;
  - Gere essas informações à partir de um for loop;
  - Exiba a frase no console.
  "O crazyArray tem X booleans, X números e X strings."
*/

const crazyArray = [true, 869, 'oi', 71, false, 83, '35', true, 397, 'js', false]
let bol = 0;
let num = 0;
let str = 0;
console.info("Execercio 05: Inicio");

for(y=0; y < crazyArray.length; y++){
  const isItemABoolean = typeof crazyArray[y] === 'boolean';
  const isItemANumber = typeof crazyArray[y] === 'number';
  const isItemAString = typeof crazyArray[y] === 'string';
  if(isItemABoolean){
    bol++
  }
  if(isItemANumber){
    num++
  }
  if(isItemAString){
    str++
  }
}
console.log(`O crazyArray tem ${bol} booleans, ${num} números e ${str} strings.`);

console.info("Execercio 05: Fim\n");
/*
  06
  - Abaixo do array "randomNumbers", utilize um for loop para gerar 2 novos  
    arrays: um array com apenas os números ímpares do "randomNumbers" e um outro  
    array com apenas os números pares;
  - Após isso, utilizando os dois arrays que você criou, exiba a frase abaixo  
    no console, substituindo "XX, XX e XX" pelos números corretos. Os números  
    da frase não devem ser inseridos com a notação "item[index]" e os "e" antes  
    do último número ímpar e do último número par devem constar na frase;
  
  - Dica: para saber se um número é par, o restante da divisão dele por 2 deve  
    ser 0.
  "Numeros ímpares: XX, XX e XX	 XX, XX e XX."
*/

const randomNumbers = [73, 4, 67, 10, 31, 58]
let impar = [];
let par = [];
console.info("Execercio 06: Inicio");
for(v=0; v < randomNumbers.length; v++){
  if(randomNumbers[v]%2 == 0){
    impar.push(randomNumbers[v])
  }else{
    par.push(randomNumbers[v])
  }
}
const impares = impar.join(",");
const pares = par.join(",");
console.log(`"Numeros ímpares: ${impares.replaceAll(","," e ").replace("e",",")}
 e Numeros pares: ${pares.replaceAll(","," e ").replace("e",",")}."`)

console.info("Execercio 06: Fim\n");