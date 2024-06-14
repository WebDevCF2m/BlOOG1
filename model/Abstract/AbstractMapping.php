<?php

namespace model\Abstract;

abstract class AbstractMapping
{
    // constructeur - Appelé lors de l'instanciation
    public function __construct(array $tab)
    {
        // tentative d'hydration des données des classes enfants
        $this->hydrate($tab);
    }

    // création de notre hydratation, en partant d'un tableau associatif et de ses clefs, on va régénérer le nom des setters existants dans les classes enfants
    protected function hydrate(array $assoc): void
    {
        // tant qu'on a des éléments dans le tableau
        foreach ($assoc as $clef => $valeur) {

            $tab = explode("_", $clef);
            $majuscule = array_map('ucfirst',$tab);
            $nouveauNomEnCamelCase = implode($majuscule);
            $methodeName = "set" . $nouveauNomEnCamelCase;
            
            // si la méthode existe
            if (method_exists($this, $methodeName)) {
                // on hydrate le paramètre avec la valeur
                $this->$methodeName($valeur);
            }
        }
    }
}