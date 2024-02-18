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
        'id'      => 'main_img',
        'type'    => 'media',
        'title'   => '首页图',
        'library' => 'image',
        'placeholder' => get_template_directory_uri() .'/images/default.jpg',
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

      array(
        'id'      => 'site_info_text',
        'type'    => 'textarea',
        'title'   => '底部信息',
        'default' => ''
      ),

    )
  ) );
  CSF::createSection( $prefix, array(
    'title'  => '社交信息',
    'fields' => array(
      
      array(
        'id'      => 'Github',
        'type'    => 'text',
        'title'   => 'Github',
      ),
      array(
        'id'      => 'bilibili',
        'type'    => 'text',
        'title'   => '哔哩哔哩',
      ),
      array(
        'id'      => 'wechat',
        'type'    => 'text',
        'title'   => '微信',
        'default' => 'Hello world.'
      ),
      array(
        'id'      => 'wangyiyun',
        'type'    => 'text',
        'title'   => '网易云',
      ),
      array(
        'id'      => 'QQ',
        'type'    => 'text',
        'title'   => 'QQ',
      ),
      array(
        'id'      => 'opt-text',
        'type'    => 'text',
        'title'   => 'Text',
        'default' => 'Hello world.'
      ),

  ))
      );
}
?>