<?php
    include "dbconnection.php";

    class ShoppingCart {
        protected $items = array();

        function __construct() {
            if (isset($_SESSION["items"])) {
                foreach ($_SESSION["items"] as $item) {
                    $this->items[] = unserialize($item);
                }
            }
        }

        function add_item(CartItem $item) {
            array_push($this->items[], $item);
            $_SESSION["items"][] = serialize($item);
        }

        function get_items(): array {
            return $this->items;
        }

        public function addNewItemHTML($item) {
            echo "<tr class='cartEntry'>";
            echo    "<td>";
            echo        "<img src='" . $item->get_imgUrl()[0] . "' alt='Product image' draggable=". '"false"' . ">";
            if (isset($item->get_imgUrl()[1]))
                echo    "<img src='" . $item->get_imgUrl()[1] . "' alt='Product image' draggable='false'>";
            echo    "</td>";
            echo    "<td>";
            echo        "<p id='name'>" . $item->get_name() . "</p>";
            echo    "</td>";
            echo    "<td>";
            echo        "<p id='price'>$" . $item->get_price();
            echo    "</td>";
            echo    "<td>";
            echo        "<a href='cartdelete.php?itemID=" . $item->get_id() . "'><img src='img/delete.svg' alt='Remove Item from Cart' draggable='false'></a>";
            echo    "</td>";
            echo "</tr>";
        }

        function save_state() {
            echo "<script>window.location.href='shoppingcart.php';</script>";
        }
    }

    class CartItem {
        protected string $id;
        protected array $imgUrl;
        protected string $name;
        protected float $price;
        protected string $type;

        function __construct(string $id) {
            $this->id = $id;

            $db = new DBConnection();
            $items = $db->select("*", "storeitems", "id", $id);

            while ($row = $items->fetch_assoc()) {
                $this->imgUrl = explode(',', $row["imageurl"]);
                $this->name = $row["title"];
                $this->price = $row["price"];
                $this->type = $row["itemtype"];

                break;
            }

            //Increase the quantity of items purchased
            if (isset($_SESSION[$id]))
                $_SESSION[$id]++;
            else
                $_SESSION[$id] = 1;
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

        function get_type() {
            return $this->type;
        }
    }
?>