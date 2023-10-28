let num = 0;
console.log("Exercicio 01 - INICIO");
while(num < 6){
    console.log(num);
    num++;
}
console.log("Exercicio 01 - FIM\n");

console.log("Exercicio 02 - INICIO");
for(x= 0;x <6;x++){
    console.log(x);

}
console.log("Exercicio 02 - FIM\n");

console.log("Exercicio 03 - INICIO");
for(y= 1;y < 11;y++){
    console.log(`Esta é a ${y}ª vez que esta frase é exibida no console.`);
}
console.log("Exercicio 03 - FIM\n");

console.log("Exercicio 04 - INICIO");
const cities = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais'];
let upperCaseCities = [];
//let b = 0;
for(z= 0;z < 3;z++){
    upperCaseCities[z] = cities[z].toLocaleUpperCase(); 
}
/*while(b < cities.length){
    upperCaseCities[b] = cities[b].toLocaleUpperCase(); 
    z++;
}*/
console.log(upperCaseCities.valueOf());
console.log("Exercicio 04 - FIM\n");

console.log("Exercicio 05 - INICIO");

const numbers = ['91', '5', '30', '97', '83', '31'];
let total = 0;
for(let v = 0;v < 6;v++){
    total = total + parseInt(numbers[v]);
    
}
console.log(total == 337);
console.log("Exercicio 05 - FIM\n");

console.log("Exercicio 06 - INICIO");
const arrays = [[4, 32, 8],[64, 8, 32],[8, 32, 16],[2, 8, 4]];
let mult = 0;

  for(let w = 0;w < arrays[0].length;w++){
    mult = mult + arrays[0][w];
    mult = mult + arrays[1][w];
    mult = mult + arrays[2][w];
    mult = mult + arrays[3][w];
  }
  console.log(mult);
  //console.log(arrays[1][1].valueOf().toString())
console.log("Exercicio 06 - FIM\n");

console.log("Exercicio 07 - INICIO");

const fruits = ['morango', 'banana', 'mamão'];
if(fruits.includes('abacaxi')){
    console.log("A string 'abacaxi' existe no array fruits.");
}else if(fruits.includes('pera')){
    console.log("A string 'pera' existe no array fruits.");
}else{
    console.log("Nem pera nem abacaxi existem no array 'fruits'.");
}

console.log("")
console.log("Exercicio 07 - FIM\n");

console.log("Exercicio 08 - INICIO");

const hoje = new Date();
if(hoje.getHours() <= 00){
    console.log('Bom dia!');
}else if(hoje.getHours() >= 12 && hoje.getHours() < 18){
    console.log('Bom tarde!');
}else{
    console.log('Boa noite!');
}


console.log("Exercicio 08 - FIM\n");

