Class NoDiscount implements DiscountStrategy {
    Public function applyDiscount(float $amount) : float {
        Return $amount ;
    }
}

Class TenPercentDiscount implements DiscountStrategy {
    Public function applyDiscount(float $amount) : float {
        Return $amount * 0.9 ;
    }
}

Class FlatFiveDollarDiscount implements DiscountStrategy {
    Public function applyDiscount(float $amount) : float {
        Return max(0, $amount – 5) ;
    }
}
