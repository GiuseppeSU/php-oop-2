<?php
class Prodotti
{

    public $categoria;
    public $image;
    public $prezzo;
    public $descrizione;

}


class Cuccia extends Prodotti
{
    public $altezza;
    public $lunghezza;

}



class Gioco extends Prodotti
{

    public $tipo;



}

class Cibo extends Prodotti
{
    public $tipo;
    public $peso;

}