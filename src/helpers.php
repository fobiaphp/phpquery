<?php

if (!function_exists('pq')) {
    /**
     * Shortcut to phpQuery::pq($arg1, $context)
     * Chainable.
     *
     * @see     phpQuery::pq()
     * @return  phpQueryObject
     * @author  Tobiasz Cudnik <tobiasz.cudnik/gmail.com>
     * @package phpQuery
     */
    function pq($arg1, $context = null) 
    {
        $args = func_get_args();
        return call_user_func_array(
            array('phpQuery', 'pq'),
            $args
        );
    }
}
