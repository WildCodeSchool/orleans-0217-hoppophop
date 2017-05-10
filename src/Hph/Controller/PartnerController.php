<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 07/04/17
 * Time: 20:21
 */

namespace Hph\Controller;

class PartnerController extends ControllerDefault
{
    public function render()
    {
        $partenaires = $this->getPartner();
        return $this->twig->render('partner.html.twig', ['partenaires'=>$partenaires, 'error'=>$_GET['error']]);

    }

}