<?php
declare(strict_types=1);

namespace OliverKlee\TddSeed\Tests\Unit\Domain\Model;

use OliverKlee\TddSeed\Domain\Model\CoffeeBeverage;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class CoffeeBeverageTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var CoffeeBeverage
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new CoffeeBeverage();
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }

}