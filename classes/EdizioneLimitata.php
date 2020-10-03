<?php
require_once 'Libro.php';

class EdizioneLimitata extends Libro {
    public $edizione;
    public $anno;
    public $contenuti_extra;
    public function  __construct($_titolo, $_isbn, $_edizione = 0, $_anno, $_contenuti_extra = 0){
        parent:: __construct($_titolo, $_isbn);
        $this->edizione = $_edizione;
        $this->anno = $_anno;
        $this->contenuti_extra = $_contenuti_extra;
    }

}
