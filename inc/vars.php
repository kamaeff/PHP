<?php
class Math
{
  public $a;
  public $b;

  public function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public function sum()
  {
    return $this->a + $this->b;
  }

  public function sub()
  {
    return $this->a - $this->b;
  }

  public function mult()
  {
    return $this->a * $this->b;
  }

  public function div()
  {
    if ($this->a == 0 || $this->b == 0) {
      return 'a and b can not be 0';
    }
    return $this->a / $this->b;
  }

  private function mod()
  {
    if ($this->a == 0 || $this->b == 0) {
      return 'a and b can not be 0';
    } else {
      return $this->a % $this->b;
    }
  }

  public function getmod()
  {
    return $this->mod();
  }
}

if (isset($_POST['number_a']) && isset($_POST['number_b'])) {
  $object = new Math($_POST['number_a'], $_POST['number_b']);
  return $status = true;
} else {
  return $status = false;
}
