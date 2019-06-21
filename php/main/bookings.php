<?php
    class Bookings {
        private $_rooms;

        public function __construct() {
            $this->loadRooms();
        }

        private function loadRooms() {
            $query = 'SELECT name, availability, price FROM rooms';
            $stmt->prepare($query);
            $stmt->execute();
            $stmt->bind_result($name, $availability, $price);
            while ($stmt->fetch()) {
                $this->_rooms = ["name" => $name, "availability" => $availability, "price" => $price];
            }
            $stmt->close();

            include 'views/booking.php';
        }
    }
?>
