<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
require_once 'Logger.php';

class CalorieTracker
{
    use Logger;

    private $maxCalories;
    private $currentCalories;

    public function __construct($maxCalories)
    {
        $this->maxCalories = $maxCalories;
        $this->currentCalories = 0;
    }

    public function trackCalories($count)
    {
        $this->currentCalories += $count;
        if ($this->currentCalories > $this->maxCalories) {
            $this->logCalories("Max Calories exceeded");
        }
    }
}

$tracker = new CalorieTracker(2000);
$tracker->trackCalories(500);
$tracker->trackCalories(1000);
$tracker->trackCalories(700);
