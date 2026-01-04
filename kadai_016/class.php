<!DOCTYPE html>

<html lang="ja">
<body>
    <p>
<?php
    class Food {
        public $name;
        public $price;

        function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price(){
            echo $this->price;
        }
    }

    class Animal {
        private $name;
        private $height;
        private $weight;

        function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        public function show_height(){
            echo $this->height;
        }
    }
    $baked_sweet_potato = new Food("焼き芋", 150);
    print_r($baked_sweet_potato);
    echo "<br>";
    $dog = new Animal("ポチ", 60, 15);
    print_r($dog);
?>
    </p>
</body>
</html>