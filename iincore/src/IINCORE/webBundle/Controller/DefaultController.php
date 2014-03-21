<?php

namespace IINCORE\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use IINCORE\webBundle\Form\ContactType;

class DefaultController extends Controller
{

    /**
     *
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }





    /**
     *
     * @Template()
     */
    public function servicesAction()
    {
        return array();
    }



    /**
     *
     * @Template()
     */
    public function aboutusAction()
    {
        return array();
    }


    /**
     *
     * @Template()
     */
    public function clientsAction()
    {
        return array();
    }

    /**
     *
     * @Template()
     */
    public function contactusAction()
    {
        return array();
    }


    /**
     *
     * @Template()
     */
    public function sendContactEmailAction(Request $request)
    {


        $form = $this->createForm(new ContactType());

        if ($request->isMethod('POST')) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($request->request->get('subject'))
                    ->setFrom($request->request->get('email'))
                    ->setTo('donald26@gmail.com')
                    ->setBody(
                        $this->renderView(
                            'iincorewebBundle:Default:email.html.twig',
                            array(

                                'name' => $request->request->get('name'),
                                'message' => $request->request->get('message'),
                                'email' => $request->request->get('message'),
                                'phone' => $request->request->get('phone')
                            )
                        )
                    );

                $this->get('mailer')->send($message);

                $request->getSession()->getFlashBag()->add('success', 'Your email has been sent! Thanks!');

                return $this->redirect($this->generateUrl('_contactus'));

        }

        return array('form' => $form->createView());
    }


}
