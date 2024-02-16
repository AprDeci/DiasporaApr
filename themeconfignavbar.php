<?php 
function menu(){
    add_theme_page('title标题','DIASPORA主题','administrator','diaspora_slug','display_function');
}
add_action('admin_menu','menu'); 

function display_function(){?>
    <form method="post" name="ashu_form" id="ashu_form">   
    <h2>阿树工作室主题设置</h2>   
    <p>   
    <label>   
    <input name="ashu_copy_right" size="40" />   
    请输入文字   
    </label>   
    </p>   
    <p class="submit">   
        <input type="submit" name="option_save" value="<?php _e('保存设置'); ?>" />   
    </p>    
    </form>   
<?php } ?>