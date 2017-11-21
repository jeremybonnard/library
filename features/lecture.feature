Feature: Library
  In order to do action
  As a visitor
  I need to be able to connect myself

Rules :
  - to be log the login and the password need to be correct
  - for a login with a manager profile the visitor will be connected as a manager
  - for a login with a user profile the visitor will be connected as an user

  Scenario: Trying to do an action
    When I try an action
    Then I should be redirected to the connection's page

  Scenario: Connection as a user
    When I connect myself as an user
    Then I should have all permissions and actions of an user profile

  Scenario: Connection as a manager
    When I connect myself as a manager
    Then I should have all permissions and actions of a manager profile

    Scenario: deconnection
      When I disconnect myself
      Then I should be redirected to the homepage as a visitor


