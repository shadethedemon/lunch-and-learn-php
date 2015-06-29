<?php

namespace Chadicus;

final class HelloWorld
{
    private $language;

    public function __construct(Language\LanguageInterface $language)
    {
        $this->language = $language;
    }

    public function greet()
    {
        return $this->getLanguage()->getGreeting();
    }

    public function getLanguage()
    {
        return $this->language;
    }
}
