<?php


class OrderDeltail
{
    protected $quantityOrder;
    protected $productId;
    protected $orderId;

    public function __construct($quantityOrder, $productId, $orderId)
    {
        $this->quantityOrder = $quantityOrder;
        $this->productId = $productId;
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getQuantityOrder()
    {
        return $this->quantityOrder;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }


}