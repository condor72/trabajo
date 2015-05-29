<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SitioController extends Controller
{
    
    public function estaticaAction($pagina)
    {
       //return new Response('Ayuda');
       return $this->render('OfertaBundle:Sitio:'.$pagina.'.html.twig');
    }
}
