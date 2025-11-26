<?php

// Простая автозагрузка классов вместо composer autoload
spl_autoload_register(function ($class) {
    // Для классов в пространстве имен App
    if (strpos($class, 'App\\') === 0) {
        $classFile = __DIR__ . '/src/' . str_replace('App\\', '', $class) . '.php';
        if (file_exists($classFile)) {
            require_once $classFile;
        }
    }
});

Use App\Point;
Use App\Vector;
$T1 = new Point(1,1);

$Vector1 = new Vector(3,4);


$Vector2 = new Vector(0 , 0);
$Vector3 = new Vector(-4,3);

echo $Vector1->length() ."\n";
echo $Vector2->length() ."\n";
echo $Vector3->length() ."\n";
echo "   Vector1 перпендикулярен Vector3? " . ($Vector1->isPerpendicularTo($Vector3) ? 'Да' : 'Нет') . "\n";
echo 

$T1->moveX(3);
$T1->moveY(4);
