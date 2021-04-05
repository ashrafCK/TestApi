<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Coderkube\TestApi\Model;

use Coderkube\TestApi\Api\ConfigurableProductRepositoryInterface;
use Coderkube\TestApi\Api\Data\ProductInterfaceFactory;
use Coderkube\TestApi\Helper\ProductHelper;
use Coderkube\TestApi\Api\ProductRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;


class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var ProductInterfaceFactory
     */

    private $ProductInterfaceFactory;

    /**
     * @var ProductHelper
     */
    private $productHelper;

    /** 
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $ProductRepository;

    /** 
     * ProductRepository constructor
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param ProductInterfaceFactory $ProductInterfaceFactory
     * @param ProductHelper $productHelper
     */
    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        ProductInterfaceFactory $productInterfaceFactory,
        ProductHelper $productHelper
    ) {
        $this->ProductInterfaceFactory = $productInterfaceFactory;
        $this->ProductHelper = $productHelper;
        $this->productRepository = $productRepository;
    }


    /** 
     * Get Product by its ID
     *
     * @param int $id
     * @return \Coderkube\TestApi\Api\Data\ProductInterface
     * @throws  NoSuchEntityException
     */
    public function getProductById($id)
    {
        /** @var \Coderkube\TestApi\Api\Data\ProductInterface $ProductInterface */
        $productInterface = $this->productInterfaceFactory->create();
        try {
            /** @var \Magento\Catalog\Api\Data\ProductInterface $product */
            $product = $this->productRepository->getById($id);
            $productInterface->setId($product->getId());
            $productInterface->setSku($product->getSku());
            $productInterface->setName($product->getName());
            $productInterface->setDescription($product->getDescription() ? $product->getDescription() : "");
            $productInterface->setPrice($this->productHelper->formatPrice($product->getPrice));
            $productInterface->setImages($this->productHelper->getProductImagesArray($product));
            return $productInterface;
        } catch (NoSuchEntityException $e) {
            throw NoSuchEntityException::singleField("id", $id);
        }
    }
}
