<?php

class Libro{
    public $autore;
    public $titolo;
    public $isbn;
    public $casaEditrice;
    public $prezzo;
    public $numero_pagine;
    public $copertina;
    public $descrizione;
    public $genere;
    public $lingua;
    public $scaffale;
    protected $numero_copie;
    protected $discount;
    public function  __construct($_titolo, $_isbn, $_numero_copie = 0){
        $this->titolo = $_titolo;
        $this->isbn = $_isbn;
        $this->numero_copie = $_numero_copie;
    }
    public function setNumberOfCopy($_numero_copie){
        $this->numero_copie = $_numero_copie;
    }
    public function getNumberOfCopy(){
        if(empty($this->numero_copie) || $this->numero_copie <= 0){
            die('Non ci sono copie disponibili');
        }
        return $this->numero_copie;
    }
    public function setPosition($_scaffale){
        $this->scaffale = $_scaffale;
    }
    // metodo per ottenere posizione
    public function getPosition(){
        if (empty($this->scaffale)) {
            die('Non hai settato lo scaffale');
        }
        return $this->scaffale;
    }
    public function calcolaPrezzoScontato($_discount){
        if(empty($this->prezzo)){
            die('Prezzo non settato');
        } elseif($_discount == 0){
            die("non c'è sconto");
        }
        return $this->prezzo - $this->prezzo * $_discount / 100;
    }
}
