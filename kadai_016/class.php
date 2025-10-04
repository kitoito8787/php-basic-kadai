<?php
// Foodクラスを作成
class Food
{
  private $name;
  private $price;

  // コンストラクタ
  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  // 値段を出力するメソッド
  public function show_price()
  {
    echo $this->price . "\n";
  }
}

// Animalクラスを作成
class Animal
{
  private $name;
  private $height;
  private $weight;

  // コンストラクタ
  public function __construct($name, $height, $weight)
  {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  // 身長を出力するメソッド
  public function show_height()
  {
    echo $this->height . "\n";
  }
}

// ======= インスタンス作成 =======
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// インスタンスをprint_rで出力
print_r($food);
print_r($animal);

// メソッドで値を出力
$food->show_price();
$animal->show_height();
