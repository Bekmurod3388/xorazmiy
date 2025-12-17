<?php

if (! function_exists('localized_url')) {
    function localized_url(string $locale): string
    {
        $segments = request()->segments();

        // birinchi segment locale bo'lsa olib tashlaymiz
        if (isset($segments[0]) && in_array($segments[0], ['uz','ru','en'], true)) {
            array_shift($segments);
        }

        $path = implode('/', $segments);
        return url(trim($locale . '/' . $path, '/'));
    }
}
