<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class SlingContext implements Context
{
    public function __construct()
    {
    }

    /**
     * @Given there is a sling with Stone
     */
    public function thereIsASlingWithStone()
    {
        throw new PendingException();
    }

    /**
     * @Then I shoot it on a Bird
     */
    public function iShootItOnABird()
    {
        throw new PendingException();
    }
}
