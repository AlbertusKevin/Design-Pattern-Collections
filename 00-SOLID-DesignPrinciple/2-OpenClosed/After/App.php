<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// Dengan memecah tipe quis ke class yang terpisah, setiap class memiliki nama fungsi yang sama yang masing-masing menangani cara menampilkan option, sehingga fungsi printQuiz tidak perlu diubah-ubah lagi ketika kita ingin menambah / mengubah tipe quis. Cukup menambah class baru atau modifikasi nama tipe ketika membuat objek
require_once 'TextQuestion.php';
require_once 'RangeQuestion.php';
require_once 'BooleanQuestion.php';
require_once 'MultipleChoice.php';

function printQuiz($questions)
{
    foreach ($questions as $q) {
        echo "{$q->getDescription()}" . PHP_EOL;
        $q->printQuestion();
        echo PHP_EOL;
    }
}

$questions = [
    new BooleanQuestion('This video is useful?'),
    new MultipleChoice('multipleChoice', ['JS', 'Python', 'Java', 'PHP']),
    new TextQuestion('Describe your favorite JS feature'),
    new RangeQuestion('What is speed limit in your city?')
];

printQuiz($questions);
