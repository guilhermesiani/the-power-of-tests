Feature: Sling Shot
  In order to buy products
  As a customer
  I need to be able to put interesting products into a basket

  Rules:
  - VAT is 20%
  - Delivery for basket under £10 is £3
  - Delivery for basket over £10 is £2

  Scenario: Shooting a Stone on a Bird
    Given there is a sling with Stone
    Then I shoot it on a Bird
