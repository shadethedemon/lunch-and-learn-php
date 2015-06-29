<?php

namespace Chadicus\Language;

class TacoLanguage implements LanguageInterface
{
    /**
     * Return a hello world greeting for this language implementation.
     *
     * @return string
     */
    public function getGreeting() {
    return "Hello World!";
    }

}
