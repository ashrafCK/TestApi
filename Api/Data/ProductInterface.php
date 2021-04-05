<?php

namespace Coderkube\TestApi\Api\Data;

interface ProductInterface
{
    /**
     * Product id
     *
     * @return int|null
     */
    public function getId();
    /**
     * Set product id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
    /**
     * Product sku
     *
     * @return string
     */
    public function getSku();
    /**
     * Set product sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);
    /**
     * Product name
     *
     * @return string|null
     */
    public function getName();
    /**
     * Set product name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);
    /**
     * Product description
     *
     * @return string|null
     */
    public function getDescription();
    /**
     * Set product name
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description);
    /**
     * Product price
     *
     * @return float|null
     */
    public function getPrice();
    /**
     * Set product price
     *
     * @param float $price
     * @return $this
     */
    public function setPrice($price);
    /**
     * Product image
     *
     * @return string[]
     */
    public function getImages();
    /**
     * Set product Image
     *
     * @param string[] $productImageArray
     * @return $this
     */
    public function setImages($productImageArray);
}
