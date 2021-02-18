<?php

namespace Validator;

use Component\AbstractComponent;
use Component\Cpu;
use Component\GraphicCard;
use Component\MotherBoard;
use Component\Ram;
use Device\AbstractDevice;
use Device\Keyboard;
use Device\Mouse;
use Device\Speaker;
use AbstractComputer;
use Interfaces\ValidatorInterface;


class AbstractComputerValidator implements ValidatorInterface
{
    public function validate(AbstractComputer $computer): bool
    {
        // on recupere la liste des composants de Abstractcomputer/$computer
        $components = $computer->getComponents();

        // on recupere la liste des devices de Abstractcomputer/$computer
        $devices = $computer->getDevices();
        
        //on compte le nombre de composants/devices
        $cntRam = 0;
        $cntCpu = 0;
        $cntGraphicCard = 0;
        $cntMotherBoard = 0;
        $cntKeyboard = 0;
        $cntMouse = 0;
        $cntSpeaker = 0;

        // on compte les entré invalide
        $cntErrors = 0;

        foreach($components as $component){
            if($component instanceof Cpu){
                $cntCpu ++;
            }elseif($component instanceof MotherBoard){
                $cntMotherBoard++;
            }elseif($component instanceof Ram){
                $cntRam++;
            }elseif($component instanceof GraphicCard){
                $cntGraphicCard++;
            }
        }

        foreach($devices as $device){
            if($device instanceof Mouse){
                $cntMouse ++;
            }elseif($device instanceof Keyboard){
                $cntKeyboard++;
            }elseif($device instanceof Speaker){
                $cntSpeaker++;
            }
        }

        if ($cntErrors > 0) {
            return false;
        }
        if ($cntRam != 1) {
            return false;
        }
        if ($cntCpu != 1) {
            return false;
        }
        if ($cntMotherBoard != 1) {
            return false;
        }
        if ($cntGraphicCard > 1) {
            return false;
        }
        if ($cntKeyboard != 1) {
            return false;
        }
        if ($cntMouse != 1) {
            return false;
        }
        if ($cntSpeaker > 1) {
            return false;
        }

        return true;
    }

       
}
