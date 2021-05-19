<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// -------------------
class User {

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

  public $nomeUtente;
  public $password;

  public function __construct($nomeUtente, $password = null) {

    $this -> nomeUtente = $nomeUtente;
    $this -> password = $password;

    if($password == null) {
      $this -> password = uniqid();
    }
  }

  public function getString() {
    return "User:" . " " . $this -> nomeUtente . " " . "-->" . " " . $this -> password;
  }

}
// -------------------


class TestController extends Controller
{
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $test1 = new User("Caio Giulio Cesare", "deBelloGallico");

    $test2 = new User("Marco Tullio Cicerone", "catilina123");

    $test3 = new User("Quinto Tiberio Massimo");

    $test4 = new User("Lucio Valerio Germanico");

    $test5 = new User("Publio Elio Adriano", "vallo");

    $test6 = new User("Tiberio Sempronio Longo");

    $test7 = new User("Tito Flavio Vespasiano", "colosseo02");

    $test8 = new User("Marco Ulpio Traiano");

    $tests = [
      $test1,
      $test2,
      $test3,
      $test4,
      $test5,
      $test6,
      $test7,
      $test8
    ];

    $str = "";

    foreach($tests as $test) {
      $str .= $test -> getString() . "\n";
      // .= è contatenazione (+= in JS)
    }

    dd($str);

    return view('pages.home');

  } // END OF HOME FUNCTION

}
