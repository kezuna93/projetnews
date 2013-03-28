<?php
require_once("article.php");

/**
 * Classe liste 
 * 
 * Elle est chargée de gérer la liste des articles et l'interface avec la base de données.
 * 
 * @author Clément BOIN
 */
class liste
{
    private $ListeArticle = array();
  
    
    function __construct() {

        //Connexion à la base de données
        // A REMPLACER par votre connexion à la base de données
       $a1= new article(1, "Article premier - Déclaration des droits de l'homme et du citoyen", "", "1789-10-01", "", "Les hommes naissent et demeurent libres et égaux en droits. Les distinctions sociales ne peuvent être fondées que sur l’utilité commune.");
       $a2= new article(2, "Article premier - Déclaration universelle des droits de l'homme", "", "1948-12-10", "", "Tous les êtres humains naissent libres et égaux en dignité et en droits. Ils sont doués de raison et de conscience et doivent agir les uns envers les autres dans un esprit de fraternité.");                  
       
       $this->ListeArticle = array($a1,$a2);
    }
    
    public function affichageListe()
    {
        foreach($this->ListeArticle as $elt)
        {
           $elt->affichageArticle();
        }
    }
    
    public function ajouterArticle(article $a)
    {
        array_push($this->ListeArticle, $a);
        //Article à ajouter également à la base de données
    }

}
?>
