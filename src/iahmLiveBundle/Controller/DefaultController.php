<?php

namespace iahmLiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->eventAction(3);


    }

    public function eventAction($id)
    {


        $event1 = array(
            'type' => 'honnor',
            'presentation' => array(
                'en' => array(
                    'title' => 'Special evening',
                    'intro' => 'Special meeting on the topic The Culture of Honor. This meeting is organized in collaboration with the Evangelical Church in Oron, IAHM and the Evangelical Church Provence 24.',
                    'more' => '<h2>Attend this event</h2>
                        <p>Free entrance (free participation to an offering)</p>

                        <h3>Address:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville<br/>
                            Switzerland</p>

                        <h3>Train SBB:</h3>
                        <p>Châtillens Stop. (10 minutes by foot)<br/>
                            <a target="_blank" href="http://www.sbb.ch/en/home.html">www.sbb.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Desk IAHM<br/>
                            <a target="_blank" href="mailto:info@healing-ministries.org">info@healing-ministries.org</a><br/>
                            +41 21 907 44 44 (2pm to 5:30pm)</p>',
                ),
                'fr' => array(
                    'title' => 'Soirée spéciale',
                    'intro' => 'Soirée spéciale sur le thème de "La culture de l\'honneur". Cette soirée est organisée par L\'Eglise Evangélique d\'oron, l\'AIMG et Eglise Evangélique Provence 24.',
                    'more' => '<h2>Se rendre à la soirée</h2>
                        <p>Entrée libre (participation libre à l’offrande)</p>

                        <h3>Adresse:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville</p>

                        <h3>Gare CFF:</h3>
                        <p>Arrêt Châtillens. (10 minutes à pied)<br/>
                            <a target="_blank" href="http://www.cff.ch">www.cff.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Bureau AIMG<br/>
                            <a target="_blank" href="mailto:info@laguerison.org">info@laguerison.org</a><br/>
                            +41 21 907 44 44 (14h à 17h30)</p>',
                ),
            ),
            'date' => '2016-04-06 19:30:00',
            'live' => array(
                'start_streaming' => '2016-04-06 19:00:00',
                'youtube_id' => 'IQzWj6EWXg8',
            ),
            'image' => '2016.04.06_SilkDanny',
            'speaker' => array(
                'name' => 'Danny Silk',
                'country' => 'USA',
                'presentation' => array(
                    'en' => array(
                        'bio' => 'Danny Silk is part of the leadership of Bethel Church in Redding in California, and of Jesus Culture in Sacramento as well. He is the president and to co-founder of the ministry Loving on Purpose, a ministry for families and communities worldwide. Danny has written many books. One of the most known is The culture of Honor.',
                    ),
                    'fr' => array(
                        'bio' => 'Danny Silk fait partie des responsables de l\'équipe de l\'église Bethel à Redding, en Californie, ainsi que de Jesus Culture à Sacramento. Il est président et co-fondateur du ministère Loving on Purpose, un ministère pour les familles et les communautés à travers le monde entier. Danny a aussi écrit 4 livres : La culture de l’honneur, Loving our Kids on Purpose, Powerful and Free and the top selling Keep Your Love On.',
                    ),
                ),
                'image' => 'SilkDanny.png',
                'website' => array(
                    'url' => 'http://www.lovingonpurpose.com',
                    'label' => 'lovingonpurpose.com'
                ),
            ),
        );

        $event2 = array(
            'type' => 'mg',
            'presentation' => array(
                'en' => array(
                    'title' => 'Miracles and Healings night',
                    'intro' => 'Our desire is to transmit the Gospel of Jesus Christ in a way that is accessible with a demonstration of God\'s power through signs, miracles and wonders!',
                    'more' => '<h2>Attend this event</h2>
                        <p>Free entrance (free participation to an offering)</p>

                        <h3>Address:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville<br/>
                            Switzerland</p>

                        <h3>Train SBB:</h3>
                        <p>Châtillens Stop. (10 minutes by foot)<br/>
                            <a target="_blank" href="http://www.sbb.ch/en/home.html">www.sbb.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Desk IAHM<br/>
                            <a target="_blank" href="mailto:info@healing-ministries.org">info@healing-ministries.org</a><br/>
                            +41 21 907 44 44 (2pm to 5:30pm)</p>',
                ),
                'fr' => array(
                    'title' => 'Soirée Miracles et Guérisons',
                    'intro' => 'Nous désirons transmettre l’Evangile de Jésus-Christ d’une manière accessible avec une démonstration de la puissance de Dieu au travers de signes, miracles et prodiges.',
                    'more' => '<h2>Se rendre à la soirée</h2>
                        <p>Entrée libre (participation libre à l’offrande)</p>

                        <h3>Adresse:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville</p>

                        <h3>Gare CFF:</h3>
                        <p>Arrêt Châtillens. (10 minutes à pied)<br/>
                            <a target="_blank" href="http://www.cff.ch">www.cff.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Bureau AIMG<br/>
                            <a target="_blank" href="mailto:info@laguerison.org">info@laguerison.org</a><br/>
                            +41 21 907 44 44 (14h à 17h30)</p>',
                ),
            ),
            'date' => '2016-04-09 19:30:00',
            'live' => array(
                'start_streaming' => '2016-04-09 19:00:00',
                'youtube_id' => 'lIcHn--kSS4',
            ),

            'image' => '2016.04.09_FitzgeraldBen',
            'speaker' => array(
                'name' => 'Ben Fitzgerald',
                'country' => 'AU',
                'presentation' => array(
                    'en' => array(
                        'bio' => 'Ben Fitzgerald is a Pastor at Bethel Church in Redding California. Originally from Melbourne, Australia, He met Jesus in an encountered that deeply changed him late in 2002 whilst he was dealing drugs. Since then Ben has lived passionately about one thing, showing the world Jesus in his everyday life and taking the good news of the Kingdom to the nations. As he travels extensively, Ben loves to help people live in Gods fullness of freedom and identity. He is the founder of the Empowered Evangelists network and Godfest ministries Inc, and has a deep conviction that the future of Europe will be transformed by radical believers living free and proclaiming Jesus boldly. He also enjoys to prank people, don\'t leave your food around him too long. You can check out some his adventures with God on youtube.',
                    ),
                    'fr' => array(
                        'bio' => 'Ben Fitzgerald est pasteur à l’église de Bethel à Redding en Californie. Originaire de Melbourne, en Australie, lorsqu’il a rencontré Jésus cela l’a radicalement changé tandis qu’il faisait du trafic de drogue. Depuis lors, Ben a vécu de manière passionnée au sujet d’une chose, montrer au monde Jésus dans la vie quotidienne, et amener la bonne nouvelle du Royaume aux nations. Voyageant beaucoup, Ben aime aider les gens à vivre dans la pleine liberté et identité en Dieu. Il est le fondateur du réseau Empowered Evangelists et de Godfest ministries, et a un une profonde conviction que le futur de l’Europe sera transformé par des croyants radicaux, vivant libres et proclamant Jésus avec courage. Il aime aussi beaucoup rire et blaguer. Vous pouvez retrouver ses vidéos sur Youtube.',
                    ),
                ),
                'image' => 'FitzgeraldBen.png',
                'website' => array(
                    'url' => 'http://awakeningeurope.com',
                    'label' => 'awakeningeurope.com'
                ),
            ),
        );

        $event3 = array(
            'type' => 'mg',
            'presentation' => array(
                'en' => array(
                    'title' => 'Miracles and Healings night',
                    'intro' => 'Our desire is to transmit the Gospel of Jesus Christ in a way that is accessible with a demonstration of God\'s power through signs, miracles and wonders!',
                    'more' => '<h2>Attend this event</h2>
                        <p>Free entrance (free participation to an offering)</p>

                        <h3>Address:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville<br/>
                            Switzerland</p>

                        <h3>Train SBB:</h3>
                        <p>Châtillens Stop. (10 minutes by foot)<br/>
                            <a target="_blank" href="http://www.sbb.ch/en/home.html">www.sbb.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Desk IAHM<br/>
                            <a target="_blank" href="mailto:info@healing-ministries.org">info@healing-ministries.org</a><br/>
                            +41 21 907 44 44 (2pm to 5:30pm)</p>',
                ),
                'fr' => array(
                    'title' => 'Soirée Miracles et Guérisons',
                    'intro' => 'Nous désirons transmettre l’Evangile de Jésus-Christ d’une manière accessible avec une démonstration de la puissance de Dieu au travers de signes, miracles et prodiges.',
                    'more' => '<h2>Se rendre à la soirée</h2>
                        <p>Entrée libre (participation libre à l’offrande)</p>

                        <h3>Adresse:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville</p>

                        <h3>Gare CFF:</h3>
                        <p>Arrêt Châtillens. (10 minutes à pied)<br/>
                            <a target="_blank" href="http://www.cff.ch">www.cff.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Bureau AIMG<br/>
                            <a target="_blank" href="mailto:info@laguerison.org">info@laguerison.org</a><br/>
                            +41 21 907 44 44 (14h à 17h30)</p>',
                ),
            ),
            'date' => '2016-05-14 19:30:00',
            'live' => array(
                'start_streaming' => '2016-05-14 19:00:00',
                'youtube_id' => 'GTgNSemS0OA',
            ),

            'image' => '2016.05.14_PerryMark',
            'speaker' => array(
                'name' => 'Mark Perry',
                'country' => 'US',
                'presentation' => array(
                    'en' => array(
                        'bio' => 'Mark and his wife, Cheryl, have planted churches and started businesses and ministries. Mark ministers on the Central Coast of California and travels to nations. He is currently the senior leader at Everyday, an innovative church on the Central Coast of California. He is also the founder and director of Iris Central Coast, an international missions base, and Iris Leaders School, where revivalists are trained from all over the world. Mark is an amazing pastor and apostolic leader, radically changing lives daily!',
                    ),
                    'fr' => array(
                        'bio' => 'Mark et son épouse, Cheryl, ont implanté plusieurs églises et démarré des entreprises et des ministères. Mark sert Dieu en Californie et voyage parmi les nations. Il est actuellement le responsable principal de « Everyday Church », une église innovante sur la côte californienne. Il est également le fondateur et directeur de « Iris Central Coast » (une base missionnaire internationale) et de l’école pour les leaders de « Iris » où des revivalistes du monde entier viennent se former. Mark est un excellent pasteur et responsable apostolique qui impacte des vies de manière radicale chaque jour.',
                    ),
                ),
                'image' => 'PerryMark.png',
                'website' => array(
                    'url' => 'http://www.everydayperrys.com',
                    'label' => 'everydayperrys.com'
                ),
            ),
        );


        $event4 = array(
            'type' => 'mg',
            'presentation' => array(
                'en' => array(
                    'title' => 'Miracles and Healings night',
                    'intro' => 'Our desire is to transmit the Gospel of Jesus Christ in a way that is accessible with a demonstration of God\'s power through signs, miracles and wonders!',
                    'more' => '<h2>Attend this event</h2>
                        <p>Free entrance (free participation to an offering)</p>

                        <h3>Address:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville<br/>
                            Switzerland</p>

                        <h3>Train SBB:</h3>
                        <p>Châtillens Stop. (10 minutes by foot)<br/>
                            <a target="_blank" href="http://www.sbb.ch/en/home.html">www.sbb.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Desk IAHM<br/>
                            <a target="_blank" href="mailto:info@healing-ministries.org">info@healing-ministries.org</a><br/>
                            +41 21 907 44 44 (2pm to 5:30pm)</p>',
                ),
                'fr' => array(
                    'title' => 'Soirée Miracles et Guérisons',
                    'intro' => 'Nous désirons transmettre l’Evangile de Jésus-Christ d’une manière accessible avec une démonstration de la puissance de Dieu au travers de signes, miracles et prodiges.',
                    'more' => '<h2>Se rendre à la soirée</h2>
                        <p>Entrée libre (participation libre à l’offrande)</p>

                        <h3>Adresse:</h3>
                        <p>Eglise Evangélique d’Oron-la-Ville<br/>
                            Rte du Flon 28<br/>
                            1610 Oron-la-Ville</p>

                        <h3>Gare CFF:</h3>
                        <p>Arrêt Châtillens. (10 minutes à pied)<br/>
                            <a target="_blank" href="http://www.cff.ch">www.cff.ch</a></p>

                        <h3>Contact:</h3>
                        <p>Bureau AIMG<br/>
                            <a target="_blank" href="mailto:info@laguerison.org">info@laguerison.org</a><br/>
                            +41 21 907 44 44 (14h à 17h30)</p>',
                ),
            ),
            'date' => '2016-06-11 19:30:00',
            'live' => array(
                'start_streaming' => '2016-06-11 19:00:00',
                'youtube_id' => 'GTgNSemS0OA',
            ),

            'image' => '2016.06.11_WagnerDavid',
            'speaker' => array(
                'name' => 'David Wagner',
                'country' => 'US',
                'presentation' => array(
                    'en' => array(
                        'bio' => 'David Wagner has a passion for reaching the lost, restoring the broken, and healing the hurting through the powerful Word of God and the demonstration of the Holy Spirit. David believes the church is a prophetic voice in the Earth today. He has heard the cry of the Father\'s heart to raise up spiritual sons and daughters in the church. He established Father\'s Heart Ministries in 2001 to help believers discover their identity in Christ and the destiny and purpose of God for their lives.
Dave has ministered throughout the United States and around the world equipping believers by speaking at prophetic conferences, youth and children\'s crusades, and leadership training meetings. He has ministered in a variety of denominational settings, and has personally been a part of planting churches in the nations. Throughout his ministry, he has seen thousands experience true fredom from bondage and disease.',
                    ),
                    'fr' => array(
                        'bio' => 'David Wagner a une passion pour atteindre les perdus, la restauration des personnes brisées et la guérison au travers de la puissante parole de Dieu et une démonstration du Saint-Esprit. David est convaincu que l’Eglise est une voix prophétique pour notre société. Il a entendu le cri du cœur du Père afin de lever des fils et filles spirituels dans l’Eglise. Il a créé le ministère Father’s Heart Minsitries en 2001 pour aider les croyants à découvrir leur identité en Christ leur destinée et le but de Dieu pour leurs vies.
David a voyagé dans tous les Etats-Unis et autour du monde équipant les chrétiens par des conférences prophétiques, des rencontres pour les jeunes et les enfants et des conférences de formation de leaders. Au travers de son ministère, il a vu des milliers de personne expérimenter la vraie libération de la captivité et de la maladie.',
                    ),
                ),
                'image' => 'WagnerDavid.png',
                'website' => array(
                    'url' => 'http://www.fathersheartministries.org',
                    'label' => 'fathersheartministries.org'
                ),
            ),
        );

        $next1 = array(
            [
                'id' => 1,
                'title' => 'Soirée spéciale',
                'date' => '2016-04-06 19:30:00',
                'image' => '2016.04.06_SilkDanny',
            ]
        );

        $next2 = array(
            [
                'id' => 2,
                'title' => 'Soirée Miracles et Guérisons',
                'date' => '2016-04-09 19:30:00',
                'image' => '2016.04.09_FitzgeraldBen',
            ]
        );

        $next4 = array(
            [
                'id' => 4,
                'title' => 'Soirée Miracles et Guérisons',
                'date' => '2016-06-11 19:30:00',
                'image' => '2016.06.11_WagnerDavid',
            ]
        );

        $sub_ads = array(
            [
                'title' => 'Journée Privilège',
                'url' => 'http://healing-ministries.org/fr/privilege',
                'image' => 'ads/privilege.jpg',
            ],
            [
                'title' => 'Institut de Guérison 2016-2017',
                'url' => 'http://healing-ministries.org/fr/institut',
                'image' => 'ads/institut.jpg',
            ],
            [
                'title' => 'Amsterdam 2017',
                'url' => 'http://healing-ministries.org/fr/amsterdam',
                'image' => 'ads/amsterdam.jpg',
            ],
            [
                'title' => 'Le premier livre de Jean-Luc Trachsel',
                'url' => 'http://www.gospel-diffusion.com/index.php/livres/trachsel_jean_luc_dans_les_coulisses_d_un_miracle_3192.html',
                'image' => 'ads/trachselJeanLuc_book.jpg',
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
            /*
            [
                'title' => 'Ecrivez-nous',
                'url' => 'mailto:contact@laguerison.org',
                'image' => 'ads/temoignage.jpg',
            ],
            */
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

        $event = $event4;
        $next = null;

        if ($id == 1) {
            $event = $event1;
            $next = $next2;
        }

        if ($id == 2) {
            $event = $event2;
            //$next = $next1;
            $next = null;
        }

        if ($id == 3) {
            $event = $event3;
            //$next = $next1;
            $next = $next4;
        }

        if ($id == 4) {
            $event = $event4;
            //$next = $next1;
            $next = null;
        }

        return $this->render('iahmLiveBundle:Default:index.html.twig', array(
            'event' => $event,
            'next' => $next,
            'sub_ads' => $sub_ads,
        ));
    }
}
