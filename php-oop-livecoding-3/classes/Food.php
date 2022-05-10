<?php
class Food extends Product{
    protected $period;
    protected $ingredients;
    protected $expiringDate;
    protected $weight;

    public function __construct($period, $ingredients, $expiringDate, $weight, $name, $price, $description)
    {
        parent::__construct($name, $price, $description);
        $this->period = $period;
        $this->ingredients = $ingredients;
        $this->expiringDate = $expiringDate;
        $this->weight = $weight;
    }

    public function getPeriod() {
        return $this->period;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function getExpiringDate() {
        return $this->expiringDate;
    }

    public function getWeight() {
        return $this->weight;
    }
}

?>
