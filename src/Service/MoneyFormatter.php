<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 18.5.22
 * Time: 00.41
 */

namespace App\Service;


class MoneyFormatter
{
    /**
     * @var NumberFormatter
     */
    private $numberFormatter;

    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number) {
        return $this->numberFormatter->format($number) . " €";
    }

    public function formatUsd($number) {
        return "$" . $this->numberFormatter->format($number);
    }
}