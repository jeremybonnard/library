<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Test
 * @package  Test
 * @author   Test <test@test.com>
 * @license  test https://www.test.com
 * @link     Test
 */
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * MyClass Class Doc Comment
 *
 * @category Test
 * @package  Test
 * @author   Test <test@test.com>
 * @license  test https://www.test.com
 * @link     Test
 */
class DefaultController extends Controller
{
    /**
     * Index route
     *
     * @param Request $request la request
     *
     * @return     Response 
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]
        );
    }


}
