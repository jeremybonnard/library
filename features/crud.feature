Feature: Library CRUD
  In order to manage book
  As a manager
  I need to be able to create a book into a library
  And read a book in the library
  And update a book in the library
  And delete a book in the library

  Scenario: Creating a book
    When I add the "Astérix Tome 2" to the library
    Then I should have 1 more product in the library

  Scenario: Updating a book
    Given there is a "Astérix Tome 2", into the library
    When I update the "Astérix Tome 2" from the library
    Then it price or it name will change

  Scenario: Delete a book
    Given there is a "Astérix Tome 2", into the library
    When I delete it
    Then I should have 1 less product in the library

  Scenario: Read the library's book
    When I want to fin a book
    Then the library's book list will appear

