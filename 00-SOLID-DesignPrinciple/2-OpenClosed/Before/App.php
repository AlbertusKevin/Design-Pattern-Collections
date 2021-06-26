<!-- Source: Web Dev Simplified, youtube, Design Patterns Tutorial -->

<?php
// terbuka untuk extension, tetapi tertutup untuk dimodifikasi. Pada function ini, ketika kita ingin menambah tipe question yang baru, maka kita harus menambah switch-case baru. Jika kita mengubah tipe, maka kita harus ubah juga yang ada di fungsi ini.

// Closed yang dimaksud adalah kita berharap fungsi ini tidak perlu diubah-ubah lagi jika kita mengubah tipe atau menambah jenis quiz. Namun secara bersamaan, mampu menambah / mengubah tipe quiz dan program tetap berjalan tanpa harus modifikasi class / function ini. (Open for extension)

// Caranya adalah dengan memecah tipe-tipe yang dicek dalam switch, membuat per tipe quiz menjadi masing-masing class tersendiri
function printQuiz($questions)
{
    foreach ($questions as $q) {
        echo "{$q['descriptions']}" . PHP_EOL;
        switch ($q['type']) {
            case 'boolean':
                echo "1. True\n2. False" . PHP_EOL;
                break;
            case 'multipleChoice':
                $index = 1;

                foreach ($q['options'] as $option) {
                    echo "$index. $option" . PHP_EOL;
                    $index++;
                }
                break;
            case 'text':
                echo "Answer: ________________________";
                break;
                // hasil tambahan
            case 'range':
                echo "Minimum: " . PHP_EOL;
                echo "Maximum: " . PHP_EOL;
                break;
        }
        echo PHP_EOL;
    }
}

$questions = [
    [
        'type' => 'boolean',
        'descriptions' => 'This video is useful?'
    ],
    [
        'type' => 'multipleChoice',
        'descriptions' => 'What is your favorite language?',
        'options' => ['JS', 'Python', 'Java', 'PHP']
    ],
    [
        'type' => 'text',
        'descriptions' => 'Describe your favorite JS feature'
    ],
    // hasil tambahan
    [
        'type' => 'range',
        'descriptions' => 'What is speend limit in your city?'
    ],
];

printQuiz($questions);
