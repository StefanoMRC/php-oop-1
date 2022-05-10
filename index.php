<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie{
    public $nome;
    public $genere;
    public $anno;
    public $generazione;


public function __construct($_nome, $_genere, $_anno){
    $this -> nome = $_nome;
    $this -> genere = $_genere;
    $this -> anno = $_anno;
}

public function setGenerazione($anno){
    if ($anno < 2000) {
        $this -> generazione = 'Film anni 90';
    } else{
        $this -> generazione = 'Film anni 2000';
    }
}
public function getGenerazione(){
    return $this -> generazione;
}}
$drStrange= new Movie('Doctor Strange in the Multiverse of Madness','azione, avventura, fantastico, fantascienza, orrore',	2022);
$aceVentura= new Movie('Ace Ventura: Pet Detective','comico, commedia',	1994);
$sonic =new Movie('Sonic the Hedgehog 2','azione, commedia, fantascienza, avventura', 2022);
$fightClub =new Movie('Fight Club','drammatico, commedia, thriller, noir, azione', 1999);


$drStrange -> setGenerazione($drStrange->anno);
$aceVentura -> setGenerazione($aceVentura->anno);
$sonic -> setGenerazione($sonic->anno);
$fightClub -> setGenerazione($fightClub->anno);



echo "<p>". $drStrange -> nome.'</br>'. $drStrange -> genere .'</br>'. $drStrange -> anno.'</br>'.$drStrange -> getGenerazione()."</p>";

echo "<p>". $aceVentura -> nome.'</br>'. $aceVentura -> genere .'</br>'. $aceVentura -> anno.'</br>'.$aceVentura -> getGenerazione()."</p>";

echo "<p>". $sonic -> nome.'</br>'. $sonic -> genere .'</br>'. $sonic -> anno.'</br>'.$sonic -> getGenerazione()."</p>";

echo "<p>". $fightClub -> nome.'</br>'. $fightClub -> genere .'</br>'. $fightClub -> anno.'</br>'.$fightClub -> getGenerazione()."</p>";

?>