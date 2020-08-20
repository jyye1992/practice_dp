<?php


namespace App;


class SabarEquirement implements Equirement
{
    public function createWeapon()
    {
        return new Sword();
    }

    public function createArmor()
    {
        return new SteelArmor();
    }
}