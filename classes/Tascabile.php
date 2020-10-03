<?php
require_once 'Libro.php';

class Tascabile extends Libro {
    public $discountPrice;
    public function  __construct($_titolo, $_isbn, $_discountPrice = 0){
        parent::__construct($_titolo, $_isbn);
        $this->discountPrice = $_discountPrice;
    }
    public function calcolaPrezzoTascabile($_discountPrice){
        if(empty($this->prezzo)){
            die('manca il prezzo');
        } elseif($_discountPrice == 0){
            die("non c'è sconto");
        }
        return $this->prezzo - $this->prezzo * $_discountPrice / 100;
    }
}
