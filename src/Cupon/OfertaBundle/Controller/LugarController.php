<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LugarController extends Controller
{
    
    public function constPageAction($pagina)
    {
       return $this->render('OfertaBundle:Lugar:'.$pagina.'.html.twig');
    }
}
