<?php
public class Prodotto
{

    public $categoria;
    public $image;
    public $prezzo;
    public $descrizione;


    public function __construct($_categoria, $_image,$_prezzo,$_descrizione){
        $this->categoria = $_categoria;
        $this->iamge = $_image;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;

    }

}


class Cuccia extends Prodotto
{
    public $altezza;
    public $lunghezza;


    public function __construct($_categoria, $_image,$_prezzo,$_descrizione,$_altezza,$_lunghezza){
        parent::__construct($_categoria, $_image,$_prezzo,$_descrizione);
        $this->altezza = $_altezza;
        $this->lunghezza = $_lunghezza;


    }
}



class Gioco extends Prodotto
{

    public $tipo;


    public function __construct($_categoria, $_image,$_prezzo,$_descrizione,$_tipo){
        parent::__construct($_categoria, $_image,$_prezzo,$_descrizione);
        $this->tipo = $_tipo;
        


    }



}

class Cibo extends Prodotto
{
    public $tipo;
    public $peso;


    
    public function __construct($_categoria, $_image,$_prezzo,$_descrizione,$_tipo,$_peso){
        parent::__construct($_categoria, $_image,$_prezzo,$_descrizione);
        $this->tipo = $_tipo;
        $this->peso = $_peso;
        


    }


}