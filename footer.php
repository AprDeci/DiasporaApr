<div class="site-info">
  <p><?php echo apr_get_option('site_info_text'); ?></p>
  <p>Theme Diasporax  by Aprdec</p>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/static/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/plugin.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/Diaspora.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
<script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/languages/go.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.8.0/dist/highlightjs-line-numbers.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/jquery.lazyload.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<script>
document.querySelectorAll('code').forEach(el => {
  // then highlight each
  hljs.highlightElement(el);
});
$(document).ready(function() {
    $('code.hljs').each(function(i, block) {
        hljs.lineNumbersBlock(block);
    });
});
$("img.lazy").lazyload({ threshold : 200 ,effect: "fadeIn",});
</script>
