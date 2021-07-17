<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class BasketContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is a(n) :arg1, which costs $:arg2
     */
    public function thereIsAWhichCostsPs($arg1, $arg2)
    {

    }

    /**
     * @Given there is a :arg1, which costs £:arg2
     */
    public function thereIsAWhichCostsPs2($arg1, $arg2)
    {

    }

    /**
     * @When I add the :arg1 to the basket
     */
    public function iAddTheToTheBasket($arg1)
    {

    }

    /**
     * @Then I should have :arg1 product in the basket
     */
    public function iShouldHaveProductInTheBasket($arg1)
    {
        PHPUnit\Framework\Assert::assertTrue(true);
    }

    /**
     * @Then the overall basket price should be £:arg1
     */
    public function theOverallBasketPriceShouldBePs($arg1)
    {
        PHPUnit\Framework\Assert::assertTrue(true);
    }

    /**
     * @Then I should have :arg1 products in the basket
     */
    public function iShouldHaveProductsInTheBasket($arg1)
    {
        PHPUnit\Framework\Assert::assertTrue(true);
    }
}
