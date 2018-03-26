<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Education;

class TestbdController extends Controller
{
    /**
     * @Route("/testbd", name="zizi")
     * @Template()
     */
    public function testbdAction()
    {
        $form = new Education();
        $form->setName('GROSSE FORMATION');
        $form->setLieu('GROS LIEU');
        $form->setDateDebut(new \DateTime());
        $form->setDateFin(new \DateTime());
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return array();
    }
}

