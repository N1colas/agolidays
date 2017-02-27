<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class MagiqueController
{
    /**
     * @Route("/numero/magique")
     */
    public function numeroAction()
    {
        $numero = mt_rand(0, 100);

        return new Response(
            '<html><body>Numero magique : '.$numero.'</body></html>'
        );
    }
    
   /**
     * @Route("/api/numero/magique/{count}")
     */
    public function apiNumeroAction($count)
    {
        $data = array(
            'count' => $count, 
            'numero_magique' => rand(0, 100),
        );

        // appele l'encodeur json fixe le header Content-Type
        return new JsonResponse($data);
    }
}