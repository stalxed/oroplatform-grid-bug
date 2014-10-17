<?php
namespace Acme\Bundle\TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CountriesController extends Controller
{
    /**
     * @Route("/", name="acme_countries")
     * @Template
     */
    public function indexAction()
    {
        return [
            'pageTitle' => 'Countries',
            'gridName' => 'countries-grid'
        ];
    }
}
