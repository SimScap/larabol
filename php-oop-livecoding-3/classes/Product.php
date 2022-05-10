<?php
include_once __DIR__ . "/Imageable.php";

/**
 * Class modeling a single product on our ecommerce.
 */
class Product {

    use Imageable;

    /** Name of the single product @var string */
    protected $name;

    /** Price of the single product @var float */
    protected $price;

    /** Description of the single product @var string */
    protected $description;

    /**
     * Creates a new instance of a single product.
     *
     * @param string $name name of the single product
     * @param float $price price of the single product
     * @param string $description description of the single product
     */
    public function __construct(string $name, float $price, string $description){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * Setter for the single product's name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name){
        $this->name = $name;
    }

    /**
     * Setter for the single product's price
     *
     * @param float $price
     * @return void
     */
    public function setPrice(float $price){
        $this->price = $price;
    }

    /**
     * Sets as description the string given as argument.
     *
     * @param string $description description to be changed.
     * @return void
     */
    public function setDescription(string $description){
        $this->description = $description;
    }

    /**
     * Gets the product name.
     *
     * @return string Returns the product's name.
     */
    public function getName(){
        return $this->name;
    }


    /**
     * Gets the product price.
     *
     * @return float Returns the product's price.
     */
    public function getPrice(){
        return $this->price;
    }


    /**
     * Gets the product description.
     *
     * @return string Returns the product's description.
     */
    public function getDescription(){
        return $this->description;
    }

}


?>
