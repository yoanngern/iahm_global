<?php

namespace iahmPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $sub_ads = array(
            [
                'title' => 'Presence 2016',
                'url' => 'http://www.laguerison.org/conference/',
                'image' => 'ads/presence-ad-streaming.jpg',
            ],
            [
                'title' => 'CD du mois',
                'url' => 'http://www.gospel-diffusion.com/index.php/musique/bethel_music_have_it_all_2cd_3184.html',
                'image' => 'ads/gd-livre-du-mois-pub.jpg',
            ],
            [
                'title' => 'Soirées Miracles et Guérisons',
                'url' => 'http://www.laguerison.org/activites/soiree-miracles-et-guerisons',
                'image' => 'ads/toutes-les-soirees-mg.jpg',
            ],
            [
                'title' => 'Devenez partenaire',
                'url' => 'http://www.laguerison.org/etre-partenaire/partenaire-aimg',
                'image' => 'ads/partenaire.jpg',
            ],
            [
                'title' => 'Ecrivez-nous',
                'url' => 'mailto:contact@laguerison.org',
                'image' => 'ads/temoignage.jpg',
            ],
            [
                'title' => 'Appelez-nous',
                'url' => 'http://www.laguerison.org/activites/ligne-de-priere/priere-par-telephone',
                'image' => 'ads/ligne-priere.jpg',
            ],
            [
                'title' => 'Up Light Studio',
                'url' => 'http://up-light-studio.ch',
                'image' => 'ads/uls-phi2.jpg',
            ],
        );


        return $this->render('iahmPageBundle:Default:home.html.twig', array(
            'event_id' => '',
            'sub_ads' => $sub_ads,
        ));
    }

    public function donationsAction()
    {



        return $this->render('iahmPageBundle:Default:donations.html.twig', array(
        ));
    }

    public function thanksAction()
    {



        return $this->render('iahmPageBundle:Default:thanks.html.twig', array(
        ));
    }

    public function formAction($id)
    {

        return $this->render('iahmPageBundle:Default:form.html.twig', array(
            'form_id' => $id,
        ));
    }

    public function headerNavAction()
    {
        
        return $this->render('::header_nav.html.twig', array(
        ));
    }

    public function footerNavAction()
    {

        return $this->render('::footer_nav.html.twig', array(
        ));
    }
}
