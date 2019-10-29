// #1 popup Hello World
alert("Hello world");

// #4 afficher variable
let question = "T'en veuuuux ?";

// #5 types de variables
let bool = true;
let string = "String";
let int = 10;
let float = 3.14116;
let array = ["array"];
let object = { type: "object" };

// #7 nombre d'enfants
let enfantsPapa = 3;
let enfantsMaman = 2;

// #8 malaria
let totalEnfants = enfantsPapa + enfantsMaman;

// #9 modulo
let modulo = 777 % 22;

// #10 stricte égalité
let first = 1;
let second = "1";

// #25
const jsBox = document.getElementById("jsBox");
function TVA(montant, taux) {
  return montant * taux;
}

let result = TVA(200, 1.2);

// #29 30 31 Météo
function meteo(saison, deg) {
  // if(deg >= -1 && deg <=1) {
  //     return "Nous sommes actuellement en saison et il fait deg degré";
  // }

  // return "Nous sommes actuellement en saison et il fait deg degrés";

  let degre = deg >= -1 && deg <= 1 ? "degré" : "degrés";

  return `Nous sommes actuellement en ${saison} et il fait ${deg} ${degre}`;
  //   return (
  //     "Nous sommes actuellement en " + saison + " et il fait " + deg + " " + degre
  //   );
}

output = meteo("hiver", 10);

jsBox.innerHTML += `
<h3>#4 déclarer une variable et l'afficher</h3>
<p>${question}</p>
`;

jsBox.innerHTML += `
<h3>#5 types de variables</h3>
<p>My var bool is of type ${typeof bool} and its value is ${bool}</p>
<p>My var string is of type ${typeof string} and its value is ${string}</p>
<p>My var int is of type ${typeof int} and its value is ${int}</p>
<p>My var float is of type ${typeof float} and its value is ${float}</p>
<p>My var array is of type ${typeof array} and its value is ${array}</p>
<p>My var object is of type ${typeof object} and its value is ${object.type}</p>
`;

jsBox.innerHTML += `
<h3>#7 nombre d'enfants</h3>
<p>La famille a ${enfantsPapa + enfantsMaman} enfants</p>
`;

jsBox.innerHTML += `
<h3>#8 malaria</h3>
<p>Malheureusement 2 sont morts à cause de la malaria, il n'en reste donc que ${totalEnfants -
  2}</p>
`;

jsBox.innerHTML += `
<h3>#9 modulo</h3>
<p>Le modulo de 777 / 22 est ${modulo}</p>
`;

jsBox.innerHTML += `
<h3>#10 stricte égalité</h3>
<p>${first} et ${second} valent 1 mais sont de types différents. Si on les compare grâce à !== on obtiendra donc "true" : ${first !==
  second}</p>
`;

jsBox.innerHTML += "<h2>Comparaison PHP / JS</h2>";

jsBox.innerHTML += `<p>Le montant TTC est de ${result} €</p>`;
jsBox.innerHTML += `<p>${output}</p>`;
