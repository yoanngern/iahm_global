<?php

namespace iahmLiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $video = array(
            'title' => 'AIMG LIVE - Soirée Miracles et Guérisons',
            'desc' => 'Soirée Miracles et Guérisons',
            'header_img' => 'header_m_g.png',
            'youtube_id' => 'KC-p2vfCqG8',
        );

        $ads = array(
            [
                'title' => 'Presence 2016',
                'url' => 'http://www.laguerison.org/conference/',
                'image' => 'ads/presence-ad-streaming.jpg',
            ],
            [
                'title' => 'Livre du mois',
                'url' => 'http://www.gospel-diffusion.com/index.php/livres/vallotton_kris_la_guerre_des_pensees_3164.html',
                'image' => 'ads/gd-livre-du-mois-pub.jpg',
            ],
            [
                'title' => 'Soirées Miracles et Guérisons',
                'url' => 'http://www.laguerison.org/activites/soiree-miracles-et-guerisons',
                'image' => 'ads/toutes-les-soirees-mg.jpg',
            ],

        );

        $sub_ads = array(
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

        return $this->render('iahmLiveBundle:Default:index.html.twig', array(
            'ads' => $ads,
            'sub_ads' => $sub_ads,
            'video' => $video,
        ));
    }
}
