<?php
require_once 'Observer.php';
require_once 'Subject.php';

class StockObserver implements Observer
{
    private float $ibmPrice;
    private float $googPrice;
    private float $aaplPrice;
    private int $observerId;

    private static int $observerIdTracker = 0;
    private Subject $stockGrabber;

    public function __construct(Subject $stockGrabber)
    {
        $this->stockGrabber = $stockGrabber;
        $this->observerId = ++self::$observerIdTracker;

        echo "New Observer {$this->observerId}\n";
        $this->stockGrabber->register($this);
    }

    public function update(float $ibmPrice, float $aaplPrice, float $googPrice): void
    {
        $this->ibmPrice = $ibmPrice;
        $this->googPrice = $googPrice;
        $this->aaplPrice = $aaplPrice;

        $this->printThePrices();
    }

    public function printThePrices()
    {
        echo "{$this->observerId}\nIBM: {$this->ibmPrice}\nGOOG: {$this->googPrice}\nAAPL: {$this->aaplPrice}\n\n";
    }

    public function getObserverId()
    {
        return $this->observerId;
    }
}
