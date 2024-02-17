<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'diaspora_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Diaspora Options',
    'menu_slug'  => 'Diaspora Options',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => '网站设置',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'featuer_img_api',
        'type'  => 'text',
        'title' => '缩略图API',
      ),

      array(
        'id'      => 'logo_mode',
        'type'    => 'select',
        'title'   => 'logo模式',
        'options' => array(
          'img' => '图片模式',
          'text' => '文字模式',
        ),
        'default' => 'img',
        'desc'    => '默认图片模式',
      ),

      array(
        'id'      => 'logo',
        'type'    => 'media',
        'title'   => 'logo',
        'library' => 'image',
      ),
      array(
        'id'      => 'logo_text',
        'type'    => 'text',
        'title'   => 'logo文字',
        'default' => '素锦',
      ),

      array(
        'id'      => 'icon',
        'type'    => 'media',
        'title'   => 'icon',
        'library' => 'image',
        'desc'    => '建议尺寸: 48px*48px',
      ),
    )
  ) );

  

}
?>