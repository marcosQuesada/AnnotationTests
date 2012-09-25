Feature: Behat Admin Brand CRUD testing
    In order to check Profile CRUD
    As an admin user
    I need to be sure that CRUD is full working

    @skipped-specs
    Scenario: Check brands CRUD
        Given I am logged in as "admin" with password "n3v3ntu4nd0v4b4ck3nd"
        And I am on "/admin/brands/"
        When I follow "Create a new entry"
        Then I should be on "/admin/brands/new"
        And I should get 200 Status Code
        And I should see "Brand creation"