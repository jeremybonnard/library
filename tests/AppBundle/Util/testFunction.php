<?php
// tests/AppBundle/Util/CalculatorTest.php
namespace Tests\AppBundle\Util;

use AppBundle\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testGetLivreById($id)
    {
        $id_recherche = 0;
        $crud = new CrudController();
        $result = $crud->getLivreById($id);
        if(!empty($result)){
          $id_recherche = $result->getId();
        }
        // assert that your calculator added the numbers correctly!
        $this->assertEquals($id, $id_recherche);//verifie que l'id de la recherche est bien l'id initiale
    }
    public function testGetLivreByTitre($titre)
    {
        $titre_recherche = "";
        $crud = new CrudController();
        $result = $crud->getLivreByTitre($titre);
        if(!empty($result)){
          $titre_recherche = $result->getTitre();
        }
        // assert that your calculator added the numbers correctly!
        $this->assertEquals($titre, $titre_recherche);//verifie que l'id de la recherche est bien l'id initiale
    }
}
