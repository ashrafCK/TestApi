<?php

namespace Coderkube\TestApi\Model\Data;

use Coderkube\TestApi\Api\Data\ProductInterface;
use Magento\Framework\DataObject;

class Product extends DataObject implements ProductInterface
{
    /**
     * Product id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData('id');
    }
    /**
     * Set product id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->getData('id', $id);
    }
    /**
     * Product sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->getData('sku');
    }
    /**
     * Set product sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        return $this->getData('sku', $sku);
    }
    /**
     * Product name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData('name');
    }
    /**
     * Set product name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->getData('name', $name);
    }
    /**
     * Product description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getData('description');
    }
    /**
     * Set product name
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->getData('description', $description);
    }
    /**
     * Product price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->getData('price');
    }
    /**
     * Set product price
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        return $this->getData('price', $price);
    }
    /**
     * Product image
     *
     * @return string[]
     */
    public function getImages()
    {
        return $this->getData('productImageArray');
    }
    /**
     * Set product Image
     *
     * @param string[] $productImageArray
     * @return $this
     */
    public function setImages($productImageArray)
    {
        return $this->getData('productImageArray', $productImageArray);
    }
}
