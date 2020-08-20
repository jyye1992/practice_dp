<?php


use App\ArcherEquirement;
use App\Bow;
use App\Clothes;
use App\SabarEquirement;
use App\SteelArmor;
use App\Sword;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private $sabarEquirement;
    private $archerEquirement;

    /**
     * @test
     */
    public function shouldCreateSwordForSabar()
    {
        $this->assertInstanceOf(
            Sword::class,
            $this->sabarEquirement->createWeapon()
        );
    }

    /**
     * @test
     */
    public function shouldCreateSteelArmorForSabar()
    {
        $this->assertInstanceOf(
            SteelArmor::class,
            $this->sabarEquirement->createArmor()
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
        $this->sabarEquirement = new SabarEquirement();
    }

}
