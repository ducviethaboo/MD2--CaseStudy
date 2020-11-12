<?php
include_once "../model/ProductModel.php";
include_once "../model/Product.php";
include_once "../model/Customer.php";

class ProductController
{
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductModel();
    }

    public function showProductByAdmin()
    {
        return $this->productController->getProductListByAdmin();
    }

    public function deleteProductByAdmin()
    {
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $this->productController->deleteProductByAdmin($productId);
            header('location:../view/showproductbyadmin.php');
        }
    }

    public function showProduct($productCompany)
    {
        return $this->productController->getProductList($productCompany);
    }

    public function showProductById()
    {
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            return $this->productController->getProductById($productId);
        }
    }

    public function editProductByAdmin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['productid'];
            $productName = $_POST['productname'];
            $productType = $_POST['producttype'];
            $productCompany = $_POST['productcompany'];
            $productDesc = $_POST['productdesc'];
            if ($_POST['productImg'] != NULL && $_POST['productimg'] != NULL) {
                $productImg = $_POST['productimg'];
            } else if ($_POST['productImg'] != NULL) {
                $productImg = $_POST['productImg'];
            }
            $buyPrice = $_POST['buyprice'];
            $product = new Product($productName, $productType, $productCompany, $productDesc, $productImg, $buyPrice);
            $this->productController->editProductByAdmin($product, $productId);
            header("location:../view/showproductbyadmin");

        }
    }

    public function addProductByAdmin()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $productName = $_REQUEST['productname'];
            $productType = $_REQUEST['producttype'];
            $productCompany = $_REQUEST['productcompany'];
            $productDesc = $_REQUEST['productdesc'];
            $productImg = $_REQUEST['productimg'];
            $buyPrice = $_REQUEST['buyprice'];
            $newProduct = new Product($productName, $productType, $productCompany, $productDesc, $productImg, $buyPrice);
            $this->productController->addProductByAdmin($newProduct);
            header("location:../view/showproductbyadmin");
        }
    }

    public function addCustomer()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $getday = getdate();
            $orderDate = $getday['mday'] . "/" . $getday['mon'] . '/' . $getday['year'];
            $customerName = $_POST['customername'];
            $customerPhone = $_POST['customerphone'];
            $customerAddress = $_POST['customeraddress'];
            $customerEmail = $_POST['customeremail'];
            $customer = new Customer($customerName, $customerPhone, $customerAddress, $customerEmail);
            $this->productController->addCustomer($customer);
            $this->productController->addOrderInfo($orderDate,$customerPhone);
            $phone = $this->productController->getOrderId($customerPhone);
            return $phone;

        }
    }

    public function showAllCustomer()
    {
        return $this->productController->showCustomer();
    }

    public function addOrderdetails($orderdetails)
    {
        $this->productController->addOrderdetail($orderdetails);
    }
}