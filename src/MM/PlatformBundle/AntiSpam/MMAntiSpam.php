<?php
namespace MM\PlatformBundle\AntiSpam;

class MMAntiSpam
{
    private $mailer;
    private $locale;
    private $minLength;


    public  function __construct($mailer, $locale, $minLength)
    {
        $this->mailer    = $mailer;
        $this->locale    = $locale;
        $this->minLength = (int)$minLength;


    }


    public function isSpam($text)
{
    return strlen($text) < $this->minLength;
}



}