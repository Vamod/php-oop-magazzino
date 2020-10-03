<?php

class Libro{
    public $autore;
    public $titolo;
    public $isbn;
    public $casaEditrice;
    public $prezzo;
    public $numero_pagine;
    public $copertina;
    protected $numero_copie;
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
        return "Copie disponibili: $this->numero_copie";
    }
}
