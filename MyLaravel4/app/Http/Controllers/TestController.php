<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Movie {

  // - definire classe User caratterizzata da nomeUtente, password
  // - definire una funzione all'interno della classe User per ottenere una stringa
  //   che rappresenti l'utente
  // - all'interno del metodo del controller (home) istanziare un paio di oggetti
  //   di tipo User (new User() )
  // - definire i relativi dati (username e password)
  // - stampare risultati della getString() attraverso il dd

  // - aggiungere il metodo __construct che acquisisca le 2 informazioni username e
  //   password in maniera obbligatoria

  // - generare altre due istanze della classe User, e aggiungere poi tutti gli oggetti
  //   creati all'interno di un array
  // - ciclando sull'array stampare tutti gli elementi

  public $title;
  public $description;

  public function __construct($title, $description = null) {

    $this -> title = $title;
    $this -> description = $description;

    if($description == null) {
      $this -> description = "No description";
    }
  }

  public function getString() {
    return "Movie:" . " " . $this -> title . ". " . " Genre -->" . " " . $this -> description;
  }

} //   END OF CLASS MOVIE

class TestController extends Controller
{
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $film1 = new Movie("Matrix", "action");
    $film2 = new Movie("Ace Ventura", "Comedy");
    $film3 = new Movie("Star Wars");
    $film4 = new Movie("The Ring", "Horror");
    $film5 = new Movie("The Gladiator", "History/War");
    $film6 = new Movie("Liar Liar");
    $film7 = new Movie("Seven", "Psychological Thriller");
    $film8 = new Movie("Fight Club");

    $films = [$film1, $film2, $film3, $film4, $film5, $film6, $film7, $film8];

    $str = "";

    foreach($films as $film) {
      $str = $str . $film -> getString() . "\n";
      // .= è contatenazione (+= in JS)
    }

    dd($str);

    return view('pages.home');

  } // END OF HOME FUNCTION

}
