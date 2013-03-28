<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe article
 *
 * 
 * @author Clément BOIN
 */
class article {
    private $Idarticle;
    private $Titre;
    private $Auteur;
    private $Date;
    private $Theme;
    private $Texte;
    
    function __construct($Idarticle, $Titre, $Auteur, $Date, $Theme, $Texte) {
        $this->Idarticle = $Idarticle;
        $this->Titre = $Titre;
        $this->Auteur = $Auteur;
        $this->Date = $Date;
        $this->Theme = $Theme;
        $this->Texte = $Texte;
    }
        
    public function affichageArticle()
    {
       echo "<h2>".$this->Titre.":".$this->Auteur."</h2>";
       echo "<p>".$this->Texte."</p>";
       echo '<p style="font-style:italic">'.$this->Date.'</p>';
    }
    
}

?>
