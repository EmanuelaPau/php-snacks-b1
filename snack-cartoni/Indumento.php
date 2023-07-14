<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze.  -->

<?php

class Indumento
{
    public $materiale;
    function __construct($materiale)
    {
        $this->materiale = $materiale;
    }
}
;

// sottoclasse 

class Cappello extends Indumento
{
    public $berretto;
    function __construct($berretto)
    {
        $this->berretto = $berretto;
    }
}
;

class Scarpa extends Indumento
{
    public $suola;
    function __construct($suola)
    {
        $this->suola = $suola;
    }
}

var_dump(new Indumento('cotone'));
var_dump(new Cappello('piatto'));
var_dump(new Scarpa('ammortizzata'));
?>