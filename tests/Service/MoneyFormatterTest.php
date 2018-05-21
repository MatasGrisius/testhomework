<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 18.5.22
 * Time: 00.43
 */

namespace App\Tests\Service;


use App\Service\MoneyFormatter;
use App\Service\NumberFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    public function testMoneyFormatter()
    {

        /** @var NumberFormatter|MockObject $numberFormatterMock */
        $numberFormatterMock = $this->createMock(NumberFormatter::class);
        $numberFormatterMock->expects($this->any())
            ->method('format')
            ->willReturn('42K');

        $moneyFormatter = new MoneyFormatter($numberFormatterMock);

        $this->assertEquals("42K €", $moneyFormatter->formatEur("42000"));
        $this->assertEquals("$42K", $moneyFormatter->formatUsd("42000"));
    }
}