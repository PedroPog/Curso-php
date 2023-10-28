
/*
01 - Declare uma const "myBirthYear", que recebe o ano do seu nascimento, com 4  
dígitos. Ex.: 2001.
*/

const myBirthYear = '2000';
console.log('Atividade 1º '+ myBirthYear);


/*
02 - Declare uma const "currentYear", que recebe o ano atual, com 4 dígitos.
*/

const currentYear = 2023;
console.log('Atividade 2º '+currentYear);

/*
03 - Exiba as const "myBirthYear" e "currentYear", lado a lado, no console do browser.
*/

console.log('Atividade 3º '+'Ano de nascimento: '+myBirthYear+'. Ano atual: '+currentYear);


/*
04 - Experimente.
- Declare uma const "myAge", que recebe o ano atual subtraído pelo ano do seu  
nascimento. Mas sem digitar os números manualmente.
Você pode utilizar o sinal de menos (-) entre os dois valores e verificar o que  
acontece. 
- Exiba a "myAge" no console.
*/

const myAge = currentYear - myBirthYear;
console.log('Atividade 4º '+myAge);

/*
05 - Antes do console.log abaixo, declare uma const "ten", está const deverá receber o número  
10 e:
- Descomente o console.log abaixo e;
- Substitua a palavra "valor1" pelo ano atual somado à 10;
- Substitua a palavra "valor2" pela sua idade somada à 10;
- Os números não devem ser digitados manualmente;
- Observe o resultado no console do browser.
Não se assuste com as crases e os cifrões. Conversaremos mais sobre operações  
matemáticas e strings (textos) em breve =)
*/

const ten = 10;

console.log(`Em ${currentYear + ten}, estarei com ${myAge + ten} anos.`)

