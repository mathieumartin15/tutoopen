<?php
/**
 * Created by PhpStorm.
 * User: PC2
 * Date: 17/11/2016
 * Time: 10:31
 */
namespace MM\PlatformBundle\Enity;

class Advert
{
    protected $id;
    protected $content;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}