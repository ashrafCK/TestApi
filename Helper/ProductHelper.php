<?php

namespace Coderkube\TestApi\Helper;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Pricing\Helper\Data;

class ProductHelper
{
    /** 
     * @var Data
     */
    private $productHelper;

    /** 
     * ProductHelper constructor,
     * @param Data $productHelper
     */
    public function __construct(
        Data $priceHelper
    ) {
        $this->priceHelper = $priceHelper;
    }

    public function formatPrice($price)
    {
        return $this->priceHelper->currency($price, true, false);
    }

    public function getProductImageArray($product)
    {
        /**
         * @var \Magento\Catalog\Model\Product $product
         */
        $images = $product->getMediaGalleryImages();
        $imageArray = array();
        foreach ($images as $image) {
            /** @var $i \Magento\Catalog\Model\Product\Image */
            $imageArray[] = $image->getUrl();
        }
        return $imageArray;
    }
}
