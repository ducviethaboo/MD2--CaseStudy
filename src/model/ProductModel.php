<?php
include_once "DBConnect.php";
include_once "Product.php";

class ProductModel
{
    protected $database;
    protected $connect;

    public function __construct()
    {
        $this->connect = new DBConnect();
        $this->database = $this->connect->connect();
    }

    public function getProductListByAdmin()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $productlist = $stmt->fetchAll();
        return $productlist;
    }

    public function deleteProductByAdmin($id)
    {
        $sql = "DELETE FROM products WHERE productId = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function getProductList($productCompany)
    {
        $sql = "SELECT * FROM products WHERE productCompany = $productCompany";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        $list = $stmt->fetchAll();
        return $list;
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE productId = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function editProductByAdmin($product, $id)
    {
        $sql = "UPDATE products SET productName = :name, productType = :type, productCompany = :company, productDesc = :desc, productImg = :img, buyPrice = :buyprice WHERE productId = $id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $product->getProductName());
        $stmt->bindParam(":type", $product->getProductType());
        $stmt->bindParam(":company", $product->getProductCompany());
        $stmt->bindParam("desc", $product->getProductDesc());
        $stmt->bindParam(":img", $product->getProductImg());
        $stmt->bindParam(":buyprice", $product->getBuyPrice());
        $stmt->execute();
    }

    public function addProductByAdmin($newProduct)
    {
        $sql = "INSERT INTO products (productName, productType, productCompany, productDesc, productImg, buyPrice) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $newProduct->getProductName());
        $stmt->bindParam(2, $newProduct->getProductType());
        $stmt->bindParam(3, $newProduct->getProductCompany());
        $stmt->bindParam(4, $newProduct->getProductDesc());
        $stmt->bindParam(5, $newProduct->getProductImg());
        $stmt->bindParam(6, $newProduct->getBuyPrice());
        $stmt->execute();
    }

    public function addCustomer($product)
    {
        $sql = "INSERT INTO customers (customerName, customerPhone, customerAddress, customerEmail) VALUES (?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getPhone());
        $stmt->bindParam(3, $product->getAddress());
        $stmt->bindParam(4, $product->getEmail());
        $stmt->execute();
    }

    public function addOrderInfo($orderdate, $customerphone)
    {


        $sql = "INSERT INTO orders (orderDate, customerPhone) VALUES (?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $orderdate);
        $stmt->bindParam(2, $customerphone);
        $stmt->execute();
    }


    public function getOrderId($customerphone)
    {
        $sql = "SELECT orderId FROM orders WHERE customerPhone=:phone";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam("phone",$customerphone);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function showCustomer()
    {
        $sql = "SELECT customers.customerName,  customers.customerPhone, products.productName, orders.orderId, products.productType, orders.orderDate,  products.buyPrice, orderdetails.quantityOrder,
orderdetails.quantityOrder*products.buyPrice AS total
FROM customers
JOIN orders ON orders.customerPhone = customers.customerPhone
JOIN orderdetails ON orderdetails.orderId = orders.orderId
JOIN products ON products.productId = orderdetails.productId";
        $stmt = $this->database->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addOrderdetail($orderdetails)
    {
        $sql = "INSERT INTO orderdetails (quantityOrder, productId, orderId) VALUES (?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$orderdetails->getQuantityOrder());
        $stmt->bindParam(2,$orderdetails->getProductId());
        $stmt->bindParam(3,$orderdetails->getOrderId());
        $stmt->execute();
    }
}