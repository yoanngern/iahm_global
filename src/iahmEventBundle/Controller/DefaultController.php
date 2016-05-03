<?php

namespace iahmEventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
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


        return $this->render('iahmEventBundle:Default:'. $id .'.html.twig', array(
            'event_id' => $id,
            'sub_ads' => $sub_ads,
        ));
    }
}
