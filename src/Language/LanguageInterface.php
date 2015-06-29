<?php

namespace Chadicus\Language;

interface LanguageInterface
{
    /**
     * Return a hello world greeting for this language implementation.
     *
     * @return string
     */
    public function getGreeting();
}
