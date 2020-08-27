<?php


use App\ArcherEquirement;
use App\Bow;
use App\Clothes;
use App\SaberEquirement;
use App\SteelArmor;
use App\Sword;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private $saberEquirement;
    private $archerEquirement;

    /**
     * @test
     */
    public function shouldCreateSwordForSaber()
    {
        $this->assertInstanceOf(
            Sword::class,
            $this->saberEquirement->createWeapon()
        );
    }

    /**
     * @test
     */
    public function shouldCreateSteelArmorForSaber()
    {
        $this->assertInstanceOf(
            SteelArmor::class,
            $this->saberEquirement->createArmor()
        );
    }

    /**
     * @test
     */
    public function shouldCreateBowForArcher()
    {
        $this->assertInstanceOf(
            Bow::class,
            $this->archerEquirement->createWeapon()
        );
    }

    /**
     * @test
     */
    public function shouldCreateClothesForArcher()
    {
        $this->assertInstanceOf(
            Clothes::class,
            $this->archerEquirement->createArmor()
        );
    }


    protected function setUp(): void
    {
        parent::setUp();
        $this->archerEquirement = new ArcherEquirement();
        $this->saberEquirement = new SaberEquirement();
    }
}
