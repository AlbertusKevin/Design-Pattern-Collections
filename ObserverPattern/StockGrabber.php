<?php
require_once 'Subject.php';
require_once 'Observer.php';

class StockGrabber implements Subject
{
    private $observers = [];
    private float $ibmPrice = 0;
    private float $googPrice = 0;
    private float $aaplPrice = 0;

    // public function __construct()
    // {
    //     $this->observers = 
    // }

    public function register(Observer $newObserver): void
    {
        $this->observers[] = $newObserver;
    }

    public function unregister(Observer $deleteObserver): void
    {
        $index = array_search($deleteObserver, $this->observers);

        echo "{$this->observers[$index]->getObserverId()} deleted." . PHP_EOL;

        unset($this->observers[$index]);
        $this->observers = array_values($this->observers);
    }

    public function notifyObserver(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->ibmPrice, $this->aaplPrice, $this->googPrice);
        }
    }

    public function setIbmPrice($ibmPrice)
    {
        $this->ibmPrice = $ibmPrice;

        $this->notifyObserver();
    }

    public function setGoogPrice($googPrice)
    {
        $this->googPrice = $googPrice;

        $this->notifyObserver();
    }

    public function setAaplPrice($aaplPrice)
    {
        $this->aaplPrice = $aaplPrice;
        $this->notifyObserver();
    }
}
