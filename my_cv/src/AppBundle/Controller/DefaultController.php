<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name = "Marie", $firstname ="La Fourmi")
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Education');
        $formations = $repo->findAll();
        
        return array(
            'name' => $name,
            'firstname' => $firstname,
            'Education' => $Education
        );
    }
   
    
//     /**
//      * @Route("/demo", name="demo")
//      * @Template()
//      */
//     public function demoAction(Request $request)
//     {
//         return array();
//     }

//     /**
//      * @param Request $request the request
//      * 
//      * return array
//      **/ 
//     public function requestAction(Request $request)
//     {
//         $forms = $this->getDoctrine() ->getRepository("AppBundle:Experience")->findAllExperiences();
        
//         return array(
//             'Experience' => $forms,
//             'name' => $name,
//             );
//     }
 }