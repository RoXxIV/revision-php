<?php 

namespace Interfaces;

use AbstractComputer;

interface ValidatorInterface{

    /**
     * renvoie true si les parametres sont valide (bon components & devices)
     * @param AbstractComputer $computer
     * 
     * @return bool
     */

    public function validate(AbstractComputer $computer): bool;

}