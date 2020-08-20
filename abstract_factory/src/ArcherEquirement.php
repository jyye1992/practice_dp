<?php


namespace App;


class ArcherEquirement implements Equirement
{
    public function createWeapon()
    {
        return new Bow();
    }

    public function createArmor()
    {
        return new Clothes();
    }
}