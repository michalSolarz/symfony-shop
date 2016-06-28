Business Need:
  Scenario: Add a new Product
    Given I am a Staff
    When I fill in the following:
      | First Product | 19.99 | Great description |
    Then the "First Product" should be created
  Scenario: Publish new Product
    Given I am a Staff
    And I create a product with "First Product" and 19.99 as price and "Great description" as description
    When I publish the new product with the title "First Product"
    Then The "First Product" should be public
  Scenario: List of all products
    Given I am a Staff
    And I create the following products:
      | First Product | 19.99 PLN | Great description |
      | Second Product | 29.99 USD | Greater description |
    When I see the list of all products
    Then the "First Product" and "Second Product" should be show