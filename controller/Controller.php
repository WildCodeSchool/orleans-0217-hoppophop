<?php

namespace hph;

class Controller
{
    /**
     * function permettant de faire le rendu d'une vue
     * @param $path
     * @param $param
     * @return string
     */
    public function render ($path, $param='')
    {
        // transforme un tableau de clé / valeur en variable
        // ex ['eleve'=>'toto', 'ecole'=>'orléans'] sera transformé en $eleve='toto' et $ecole='orleans'
        // du coup, dans le fichier $path appelé ensuite, on peut utiliser directement les variables $eleve et $ecole
        if (is_array($param)){
            extract($param);
        }

        // crée un buffer (tampon) , c'est à dire met en "pause" l'affichage de views
        ob_start();
        // si on ne fait pas de mise en tampon, le fichier $path s'affiche au moment de require (comme si on faisait un echo), ce qui n'est pas voulu
        require '../src/views/'.$path;
        // récupère tout ce qui a été mis en tampon et l'enregistre dans la variable buffer
        $buffer = ob_get_clean();

        return $buffer;
    }
}