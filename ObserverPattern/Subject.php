<?php
require_once 'Observer.php';

interface Subject
{
    public function register(Observer $o): void;
    public function unregister(Observer $o): void;
    public function notifyObserver(): void;
}
