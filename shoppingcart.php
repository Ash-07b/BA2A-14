Class ShoppingCart {
    Private $strategy ;
    Private $total = 50.00 ; // Hardcoded base price

    Public function __construct(DiscountStrategy $strategy) {
        $this->strategy = $strategy ;
    }

    Public function getFinalPrice() : float {
        Return $this->strategy->applyDiscount($this->total) ;
    }
}
