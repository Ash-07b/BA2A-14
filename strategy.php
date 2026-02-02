<?php
// Strategy Interface
interface PaymentStrategy {
    public function pay($amount);
}

// Concrete Strategy 1
class MobileMoneyPayment implements PaymentStrategy {
    public function pay($amount) {
        return "Paid $amount FCFA using Mobile Money";
    }
}

// Concrete Strategy 2
class CardPayment implements PaymentStrategy {
    public function pay($amount) {
        return "Paid $amount FCFA using Card";
    }
}

// Context
class PaymentContext {
    private $strategy;

    public function setStrategy(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function executePayment($amount) {
        echo $this->strategy->pay($amount);
    }
}

// Usage
$payment = new PaymentContext();

// Pay with Mobile Money
$payment->setStrategy(new MobileMoneyPayment());
$payment->executePayment(5000);
echo "<br>";

// Pay with Card
$payment->setStrategy(new CardPayment());
$payment->executePayment(8000);
?>