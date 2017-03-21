<?php
    function shorten_text($text) {
        $chars_limit = 250;
        $chars_text = strlen($text);
        $text = $text.' ';
        $text = substr($text, 0 ,$chars_limit);
        $text = substr($text, 0, strrpos($text,' '));

        if ($chars_text > $chars_limit) {
            $text = $text . '...';
        }
        return $text;
    }
