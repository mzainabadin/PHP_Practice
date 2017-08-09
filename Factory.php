<?php 
/**
  *Creating abstract class Product that has getter functions for name, type , sku
  *
  *
  */
abstract class Product 
{
  private $sku;
  private $name;

  // Protected because we need to access it in subclasses
  protected $type = null;

  /**
    *Constructor
    *
    *@param name, sku
    *
    *@return 
    */
  public function __construct($sku, $name)
  {
    $this->sku = $sku;
    $this->name = $name;
  }
  /**
    *Getter function for sku
    *
    *@param no parameters are passed to the method
    *
    *@return sku
    */
  public function getSku()
  {
    return $this->sku;
  }
  /**
    *Getter function for Name
    *
    *@param no parameters are passed to the method
    *
    *@return name
    */
  public function getName()
  {
    return $this->name;
  }
    /**
    *Getter function for sku
    *
    *@param no parameters are passed to the method
    *
    *@return sku
    */
  public function getType()
  {
    return $this->type;
  }
}

/**
  *Class that assigns $type = chair
  *
  * there are 4 subclasses of the product class for assigning different types
  */
class Product_Chair extends Product
{
  protected $type = 'chair';
}

/**
  *Class that assigns $type = table
  *
  */
class Product_Table extends Product
{
  protected $type = 'table';

}

/**
  *Class that assigns $type = bookcase
  *
  */
class Product_Bookcase extends Product
{
  protected $type = 'bookcase';
}

/**
  *Class that assigns $type = sofa
  *
  */
class Product_Sofa extends Product
{
  protected $type = 'sofa';
}


/**
  *Concept of factory is applied in this class to give a final product
  *
  */
class ProductFactory 
{
  public static function build($product_type, $sku, $name)
  {
    // ucwords make first letter capital of the given word
    $product = "Product_" . ucwords($product_type);
    if(class_exists($product))
    {
      echo "creating object";
      return new $product($sku, $name);
    }
    else {
      throw new Exception("Invalid product type given.");
    }
  }
}


?>