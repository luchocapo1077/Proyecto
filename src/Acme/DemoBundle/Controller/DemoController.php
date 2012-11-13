<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ivory\GoogleMapBundle\Model\MapTypeId;
use Ivory\GoogleMapBundle\Model\Controls\ControlPosition;
use Ivory\GoogleMapBundle\Model\Controls\MapTypeControl;
use Ivory\GoogleMapBundle\Model\Controls\MapTypeControlStyle;
use Ivory\GoogleMapBundle\Model\Overlays\Animation;

class DemoController extends Controller {

    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction() {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name) {
        return array('name' => $name);
    }

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction() {
        $form = $this->get('form.factory')->create(new ContactType());

        $request = $this->get('request');
        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $mailer = $this->get('mailer');
                // .. setup a message and send it
                // http://symfony.com/doc/current/cookbook/email.html

                $this->get('session')->setFlash('notice', 'Message sent!');

                return new RedirectResponse($this->generateUrl('_demo'));
            }
        }

        return array('form' => $form->createView());
    }

    /**
     * @Route("/map", name="_demo_map")
     * @Template()
     */
    public function mapAction() {
        /**
         * Requests the ivory google map service
         *
         * @var Ivory\GoogleMapBundle\Model\Map $map
         */
        $map = $this->get('ivory_google_map.map');

        // Requests the ivory google map type control service
        $mapTypeControl = $this->get('ivory_google_map.map_type_control');

        // Add your map type control to the map
        $map->setMapTypeControl($mapTypeControl);
        

        // Requests the ivory google map marker service
        $marker = $this->get('ivory_google_map.marker');

        // Configure your marker options
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition(-34.911053181274326, -57.94135111665651, true);
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => false,
            'flat' => true
        ));


        // Add your marker to the map
        $map->addMarker($marker);

        return array('map' => $map);
    }
    
    /**
     * @Route("/mapFilter/{map}", name="_demo_mapFilter")
     * @Template()
     */
    public function mapFilterAction($map) {
         // Requests the ivory google map marker service
        $marker = $this->get('ivory_google_map.marker');

        // Configure your marker options
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition(-34.58485031094888, -60.92822265000001, true);
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => false,
            'flat' => true
        ));

        // Add your marker to the map
        $map->addMarker($marker);

        return array('map' => $map);
    }

}
