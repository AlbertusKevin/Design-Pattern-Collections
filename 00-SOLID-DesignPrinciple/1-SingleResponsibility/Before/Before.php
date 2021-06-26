<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// class ini melanggar Single Responsibility Principle,karena class ini memiliki 2 tugas, yaitu menghitung kalori dan mengecek jumlah kalori > batas max sehingga class ini memiliki 2 alasan untuk dimodifikasi. Pertama, jika kita ingin mengubah cara menghitung dan kedua cara dan pesan apa yang ingin digunakan untuk notify user. Cara mengubahnya, kita pindahkan fungsi log (karena class ini namanya calorie tracker) ke sebuah class atau objek lain (modul di js / abstract class / trait / HelperClass)
class CalorieTracker
{
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
            $this->logCaloriesSurpluse();
        }
    }

    public function logCaloriesSurpluse()
    {
        echo "Max Calories exceeded" . PHP_EOL;
    }
}

$tracker = new CalorieTracker(2000);
$tracker->trackCalories(500);
$tracker->trackCalories(1000);
$tracker->trackCalories(700);
