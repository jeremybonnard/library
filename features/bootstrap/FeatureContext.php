<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $book;
    private $library;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->library = new Library();
        $this->book = new Book();
    }    

    /**
     * @When I add the :arg1 to the library
     */
    public function iAddTheToTheLibrary($arg1)
    {
       $this->book = $arg1;
    }

    /**
     * @Then I should have :arg1 more product in the library
     */
    public function iShouldHaveMoreProductInTheLibrary($arg1)
    {
         $this->library->addBook($arg1);
    }

    /**
     * @Given there is a :arg1, into the library
     */
    public function thereIsAIntoTheLibrary($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I update the :arg1 from the library
     */
    public function iUpdateTheFromTheLibrary($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then it price or it name will change
     */
    public function itPriceOrItNameWillChange()
    {
        throw new PendingException();
    }

    /**
     * @When I delete it
     */
    public function iDeleteIt()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 less product in the library
     */
    public function iShouldHaveLessProductInTheLibrary($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I want to fin a book
     */
    public function iWantToFinABook()
    {
        throw new PendingException();
    }

    /**
     * @Then the library's book list will appear
     */
    public function theLibrarysBookListWillAppear()
    {
        throw new PendingException();
    }

    /**
     * @When I try an action
     */
    public function iTryAnAction()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be redirected to the connection's page
     */
    public function iShouldBeRedirectedToTheConnectionsPage()
    {
        throw new PendingException();
    }

    /**
     * @When I connect myself as an user
     */
    public function iConnectMyselfAsAnUser()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have all permissions and actions of an user profile
     */
    public function iShouldHaveAllPermissionsAndActionsOfAnUserProfile()
    {
        throw new PendingException();
    }

    /**
     * @When I connect myself as a manager
     */
    public function iConnectMyselfAsAManager()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have all permissions and actions of a manager profile
     */
    public function iShouldHaveAllPermissionsAndActionsOfAManagerProfile()
    {
        throw new PendingException();
    }

    /**
     * @When I disconnect myself
     */
    public function iDisconnectMyself()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be redirected to the homepage as a visitor
     */
    public function iShouldBeRedirectedToTheHomepageAsAVisitor()
    {
        throw new PendingException();
    }


}
