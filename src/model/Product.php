<?php


class Product
{
    protected $productName;
    protected $productType;
    protected $productCompany;
    protected $productDesc;
    protected $productImg;
    protected $buyPrice;

    public function __construct($name, $type, $company, $desc, $img, $buyprice)
    {
        $this->productName = $name;
        $this->productType = $type;
        $this->productCompany = $company;
        $this->productDesc = $desc;
        $this->productImg = $img;
        $this->buyPrice = $buyprice;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @return mixed
     */
    public function getProductCompany()
    {
        return $this->productCompany;
    }

    /**
     * @return mixed
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * @return mixed
     */
    public function getProductImg()
    {
        return $this->productImg;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }


}