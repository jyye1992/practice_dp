<?php


namespace App;


class SaberEquirement implements Equirement
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
