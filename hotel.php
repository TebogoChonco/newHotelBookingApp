<?php

class Hotel {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class HotelPriceRepository {
    private $hotels = [];

    public function __construct() {
        // Initialize hotel data
        $this->hotels[] = new Hotel("Madikwe Hills", 500);
        $this->hotels[] = new Hotel("Cascades", 450);
        $this->hotels[] = new Hotel("Manor Hills", 550);
        $this->hotels[] = new Hotel("Sun City Resort", 600);
        $this->hotels[] = new Hotel("The Royal Elephant", 490);
        $this->hotels[] = new Hotel("The Riverleaf Hotel", 580);
        
    }

    public function getHotelPrice($hotelName) {
        foreach ($this->hotels as $hotel) {
            if ($hotel->getName() === $hotelName) {
                return $hotel->getPrice();
            }
        }
        return 0; // Default price if hotel not found
    }
}

