<?php

/*
    Cette fonction nous permet d’enregistrer une ou plusieurs fonctions qui vont être mises
    dans une file d’attente et que le PHP va appeler automatiquement dès qu’on va essayer
    d’instancier une classe
*/
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace('\\', '/', $class);
    require_once "classes/$class.php";
});
