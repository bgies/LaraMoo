<?php

/**
 * Key value pair of presets with the name and dimensions to be used
 *
 * 'PRESET_NAME' => array(
 *   'width'  => INT, // in pixels
 *   'height' => INT, // in pixels
 *   'method' => STRING, // 'crop' or 'resize'
 *   'background_color' => '#000000', //  (optional) Used with resize
 * )
 *
 * eg   'presets' => array(
 *        '800x600' => array(
 *          'width' => 800,
 *          'height' => 600,
 *          'method' => 'resize',
 *          'background_color' => '#000000',
 *        )
 *      ),
 *
 */
return array(

  '80x80' => array(
    'width' => 80,
    'height' => 80,
    'method' => 'crop',
  ),

  'logo' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 450,
            'height' => 250,
            'ratio'  => 1.8
         ],
         'medium' => [
            'directory_prefix' => 'md',
            'width' => 180,
            'height' => 100,
            'ratio'  => 1.8
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 90,
            'height' => 50,
            'ratio'  => 1.8
         ]
      ],
      'locationlogo' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 450,
            'height' => 250,
            'ratio'  => 1.8
         ],
         'medium' => [
            'directory_prefix' => 'md',
            'width' => 180,
            'height' => 100,
            'ratio'  => 1.8
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 90,
            'height' => 50,
            'ratio'  => 1.8
         ]
      ],
      
      'avatar' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 250,
            'height' => 250,
            'ratio'  => 1.0
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 50,
            'height' => 50,
            'ratio'  => 1.0
         ]
      ],
      
      'menu' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 250,
            'height' => 250,
            'ratio'  => 1.0
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 100,
            'height' => 100,
            'ratio'  => 1.0
         ]
      ],
      
      'group' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 250,
            'height' => 250,
            'ratio'  => 1.0
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 50,
            'height' => 50,
            'ratio'  => 1.0
         ]
      ],
      
      'item' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 250,
            'height' => 250,
            'ratio'  => 1.0
         ],
         'medium' => [
            'directory_prefix' => 'md',
            'width' => 75,
            'height' => 75,
            'ratio'  => 1.0
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 50,
            'height' => 50,
            'ratio'  => 1.0
         ]
      ],
      
      'useritem' => [
         'large' => [
            'directory_prefix' => 'lg',
            'width' => 250,
            'height' => 250,
            'ratio'  => 1.0
         ],
         'small' => [
            'directory_prefix' => 'sm',
            'width' => 50,
            'height' => 50,
            'ratio'  => 1.0
         ]
      ]
 
   
   
   
);
