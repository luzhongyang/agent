<?php

namespace Luzhongyang\Agent;

/**
 * Class Agent
 * @package Luzhongyang\Agent
 */
class Agent
{
    /**
     * @return bool
     */
    public function isMobile()
    {
        return (boolean)preg_match(
            '/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i',
            strtolower($_SERVER['HTTP_USER_AGENT'])
        );
    }
}