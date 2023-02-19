<?php
    class ShoppingCart {
        protected $items;

        function __construct() {
            if (isset($_SESSION["items"])) {
                $this->items = $_SESSION["items"];
            }
        }

        function add_item(CartItem $item) {
            $this->items[] = $item;
            $_SESSION["items"] = $this->items;
        }

        function get_items() {
            return $_SESSION["items"];
        }

        function addNewItemHTML(CartItem $item) {
            echo "<li>";
            echo    "<div class='cartEntry'>";
            echo        "<img src='" . $item->get_imgUrl()[0] . "' alt='Product image'>";
            if (isset($item->get_imgUrl()[1]))
                echo    "<img src='" . $item->get_imgUrl()[1] . "' alt='Product image'>";
            echo        "<p id='name'>" . $item->get_name() . "</p>";
            echo        "<p id='price'>$" . $item->get_price();
            echo    "</div>";
            echo "</li>";
        }

        function save_state() {
            header("Location: shoppingcart.php");
        }
    }

    class CartItem {
        protected string $id;
        protected array $imgUrl;
        protected string $name;
        protected float $price;

        function __construct(string $id) {
            $this->id = $id;
            $this->imgUrl = array();

            //Increase the quantity of items purchased
            if (isset($_SESSION[$id]))
                $_SESSION[$id]++;
            else
                $_SESSION[$id] = 1;

            $this->assembleItem($id);
        }

        function assembleItem($id) {
            $os = substr($id, 0, 1);
            $type = substr($id, 1, 1);
            $this->price = intval(substr($id, 3));

            //The image URL does not come with the form submission so it is reconstructed here
            switch ($os) {
                case "a":
                    $os = "Android";
                    $this->imgUrl[0] = "https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg";
                    break;
                case "i":
                    $os = "iOS";
                    $this->imgUrl[0] = "https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg";
                    break;
                case "c":
                    $os = "Android and iOS";
                    $this->imgUrl[0] = "https://upload.wikimedia.org/wikipedia/commons/6/64/Android_logo_2019_%28stacked%29.svg";
                    $this->imgUrl[1] = "https://upload.wikimedia.org/wikipedia/commons/6/63/IOS_wordmark_%282017%29.svg";
                    break;
                case "s":
                    $os = "";
                    $this->imgUrl[0] = "img/tshirt.png";
            }

            switch ($type) {
                case "1":
                    $this->name = $os . " App";
                    break;
                case "2":
                    $this->name = "Priority Support for " . $os . " Apps";
                    break;
                case "3":
                    $this->name = "Additional Updates for " . $os . " Apps";
                    break;
                case "4":
                    $this->name = "MyTech Co. " . $os;
            }
        }

        function get_id() {
            return $this->id;
        }

        function get_name() {
            return $this->name;
        }

        function get_imgUrl() {
            return $this->imgUrl;
        }

        function get_price() {
            return $this->price;
        }
    }
?>