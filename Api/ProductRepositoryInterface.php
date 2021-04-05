<?php

namespace Coderkube\TestApi\Api;

use Magento\Framework\Exception\NoSuchEntityException;

interface ProductRepositoryInterface
{
    /**
     *Get Product By Id
     *@param int $id
     *@return Coderkube\TestApi\Api\Data\ProductInterface
     *@throws NoSuchEntityException
     */
    public function getProductById($id);
}
