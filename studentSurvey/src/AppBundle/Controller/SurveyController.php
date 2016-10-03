<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Survey;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\SurveyType;

class SurveyController extends Controller
{
  /**
   * @Route("/survey")
   */

   public function formAction(Request $request)
   {

     $survey = new Survey();
      $form = $this->createForm(SurveyType::class,$survey);

  return $this->render('AppBundle:Survey:form.html.twig', array(
          'form' => $form->createView()
      ));
   }

}
