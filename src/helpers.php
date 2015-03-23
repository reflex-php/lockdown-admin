<?php

if (! function_exists('gravatar_url')) {
    /**
     * Creates a url for a Gravatar avatar
     * @param  string  $email     Email identifier
     * @param  integer $size      Size in pixels
     * @param  string  $extension Extension for the avatar
     * @return string             Generated URL 
     */
    function gravatar_url($email = '', $size = 100, $extension = 'png')
    {
        $random_image   =   ['mm', 'identicon', 'monsterid', 'wavatar', 'retro'];
        $random_bit     =   $random_image[ array_rand($random_image) ];
        $identifier     =   md5(strtolower(trim($email)));
        return '//www.gravatar.com/avatar/' . 
            $identifier . 
            '.' . ltrim($extension, '.') . 
            '?r=g&s=' . $size . 
            '&d=' . $random_bit;
    }
}

if (! function_exists('gravatar_img')) {
    /**
     * Creates a Gravatar img element
     * @param  string  $email      Email identifier
     * @param  integer $size       Size in pixels
     * @param  string  $extension  Extension for the avatar
     * @param  array   $attributes Attributes for the element
     * @return string              Generated URL 
     */
    function gravatar_img(
        $email = '',
        $size = 100,
        $extension = 'png',
        array $attributes = []
    ) {
        $url    =   gravatar_url($email, $size, $extension);

        if (! isset($attributes['style'])) {
            $attributes['style']    =   'height: ' . $size . 'px;';
        }

        return HTML::image(
            $url,
            array_get($attributes, 'alt', 'gravatar'),
            array_except($attributes, 'alt')
        );
    }
}
