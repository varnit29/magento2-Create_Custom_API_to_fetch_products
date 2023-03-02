<?php

namespace MyApi\Demo\Api;

interface ProductByInterface
{
    /**
     * GET product by its ID
     *
     * @api
     * @param string $id
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductById($id);
}
