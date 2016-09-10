<?php

namespace iahmPageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleHtml
 *
 * @ORM\Table(name="article_html")
 * @ORM\Entity(repositoryClass="iahmPageBundle\Repository\ArticleHtmlRepository")
 */
class ArticleHtml
{
    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     * @ORM\Id
     */
    private $ref;


    /**
     * Set ref
     *
     * @return ArticleHtml
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
}

