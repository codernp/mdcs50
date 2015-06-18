<?php

/**
 * Get's the current page. Defaults to $_SERVER['REQUEST_URI'].
 *
 * @param string $current
 * @return string
 */
function getCurrentPage($current = null)
{
    if ( is_null($current) ) {
        $current = $_SERVER['REQUEST_URI'];
    }

    if ($current == '/') {
        $current = '/index.php';
    }

    return $current;
}

/**
 * Get's a carousel by the ID.
 *
 * @param string $id
 * @return array
 */
function getCarousel($id = null)
{
    if ( ! $id ) {
        return [];
    }

    $carousels = [
        '/about.php' => [
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'About Caption 1',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Two',
                'caption' => 'About Caption 2',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Three',
                'caption' => 'About Caption 3',
            ],
        ],

        '/index.php' => [
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'Home Caption 1',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Two',
                'caption' => 'Home Caption 2',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Three',
                'caption' => 'Home Caption 3',
            ],
        ],
    ];

    if ( ! isset($carousels[$id]) ) {
        return [];
    }

    return $carousels[$id];
}