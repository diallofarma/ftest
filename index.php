<?php
echo "Bonjour tout le monde";

###### DECLARATION DE VARIABLE #######
/* Les instruction se termine toujours par un ; */

$nom = "farma";
$age = 21;
$taille = 1.75;
$etudiant = true;

echo $nom;
echo "</br>";
echo $age;
echo "</br>";
echo $taille;
echo "</br>";
echo $etudiant;
echo "Le nom est ", $nom," l'age est ", $age, " la taille est ",$taille, " et l'estudiant est ", $etudiant; 

if(is_int($age)){
echo $age;
}

if(is_float($taille)){
echo $taille;
}

if(is_bool($etudiant)){
echo $etudiant;
}

if(is_string($nom)){
echo $nom;
}

###### 1 String - Chaine de caractere #######

$prenom = "Farma";
$nom = " Diallo";

//Concatenation avec point
$nomComplet = $prenom." ".$nom;
echo"</br";
if(is_float($nomComplet)){
echo $nomComplet;
}
if(is_null ($nomComplet)){
echo $nomComplet;
}

//Guillemet double ou Interpelation

echo"<br>";
echo "Bonjour $prenom $nom";

echo"</br>";
echo 'Bonjour $prenom $nom';

######## Integrer un entier ########

$age = 15;
echo"</br>";
echo $age + "5";

######## Float (Nombre decimal) ########

$prix = 19.99;
echo"</br>";
echo $age * 2;

######## Boolean) ########

$estMajeur = $age >= 18 ? "Oui" : "Nom";
$aunPermis = false;

echo "<br>";
echo"estMajeur : $estMajeur";
echo "<br>";
echo "estMajeur : $aunPermis";

if ($estMajeur == "Oui"){
    echo"Vous etes mahjeur pour prendre le permis";
}else{
    echo"Dokhal Fowii";
}
echo"<br>";

##### NULL ######

$variable = null;
var_dump($prenom);
echo"<br>";
if(is_null($variable)){
    echo"La variable est vide";
}


##### Constantes ######

define ("SITE_NAME", "L2GL APP"); //Definir une constante
const TVA = 0.20;
echo"</br>";
echo"</br>";

######## TABLEAU HTML DYNAMIQUE ########
echo"<table>";
echo"<th>Table de multiplication</th>";
echo"</tabble>";

echo"<table border ='5' width ='100' heignt='100'>";
echo"<tr>";
echo"<th>x</th>";
for($i=1 ;$i <= 10; $i++){
    echo"<th>$i</th>";
}echo "</tr>";

for ($i=1; $i<=10; $i++){
    echo"<tr>";  
    echo "<th>$i</th>";
    for($j=1; $j<=10; $j++){
        $result = $i * $j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
} echo "</table>";

//Exo Table de Multiplication
//J'ai d'abord definit le tableau avec une bordure de 5
//Avec <tr> j'ai definit les ligne, avec <td> les cases et avec <th> j'ai mi en gras les titres du tableau
//Ensuite j'ai declare une boucle for pour remplir le l'indexe i pour chaque case du tableau jusqu'a 10
//J'ai encore reouvert la boucle avec l'idexe i pour les lignes et une autre boucle for avec j comme indexe pour les colonne jusqu'a 10
//Et pour multiplier les lignes et les colonnes j'ai fait i*j et ensuite j'ai affiche les resutats dan la variable result.
//Et bien expliquer toutes les etapes 

// Afficher un menu
$page = $_GET['page'] ?? 'acceuil';


//Navigation
echo"<nav>";
$pages = ['acceuil', 'services', 'portfolio', 'contact'];

foreach($pages as $p){
    $active = ($page === $p) ? 'active' : ''; //Si $active == $active alors 'active', sinon ' ' 
    echo " <a href = ?page = $p' class= '$active'>" . ucfirst($p) . "</a>";
}
echo"<nav>";


// Css
echo"
<style>
nav a {
padding: 10px 15px;
margin : 5px;
text-decoration : none;
background-color : #d28282ff;
border-radius: 4px;
color: #333;
}

nav .a.active {
background-color: #d28282ff;
color: white;
font-weight: bold;
}

nav a:hover{
bacground-color: #ddd;
</style>
";

//Contenu

echo"<main>";
switch($page){
    case "acceuil":
    echo"<h1>Bienvenue sur notre site</h1>";
    break;
     case "services":
    echo"<h1>Bienvenue sur la page srvices</h1>";
    break;
     case "portfolio":
    echo"<h1>Bienvenue sur la page portfolio</h1>";
    break;
     case "contact":
    echo"<h1>Bienvenue sur la page contact</h1>";
    break;
    default:
    echo"Page non trouve";
    break;

}echo"</main>";



