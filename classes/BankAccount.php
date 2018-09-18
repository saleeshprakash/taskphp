<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = 0;

    public function __construct(Money $openingBalance)
    {
        $this->balance = (float) $openingBalance->value();
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        $this->balance += $amount->value();
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }
    public function withdraw(Money $amount){
        $this->balance -= $amount->value();
    }
}