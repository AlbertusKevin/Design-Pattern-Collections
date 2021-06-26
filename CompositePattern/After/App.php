<!-- Source: Programmer Zaman Now, youtube, Design Patterns Tutorial -->

<?php
require_once 'Category.php';
require_once 'CompositeCategory.php';

// composite pattern, sebuah class baru yang didalamnya merepresentasikan category yang dapat memiliki sub category. Cukup buat class composite yang extends ke class category
function printCategory($category)
{
    echo $category->getName() . PHP_EOL;
    if ($category instanceof CompositeCategory) {
        foreach ($category->getCategories() as $subCategory) {
            printCategory($subCategory);
        }
    }
}

$categories = [
    new CompositeCategory('Handphone', [
        new Category('Android'),
        new Category('IOS')
    ]),
    new CompositeCategory('Computer', [
        new Category('Laptop'),
        new Category('PC')
    ]),
    new CompositeCategory('Fashion', [
        new CompositeCategory('Fashion Pria', [new Category('Baju Pria'), new Category('Celana Pria')]),
        new Category('Wanita')
    ]),
];

foreach ($categories as $category) {
    printCategory($category);
}
