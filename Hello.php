<footer class="site-footer">
  <div id="footer-sidebar" class="secondary">
    <div id="footer-sidebar1">
      <?php
        if(is_active_sidebar('footer-sidebar-1')){
          dynamic_sidebar('footer-sidebar-1');
        }
      ?>
    </div>
    <div id="footer-sidebar2">
      <?php
        if(is_active_sidebar('footer-sidebar-2')){
          dynamic_sidebar('footer-sidebar-2');
        }
      ?>
    </div>
    <div id="footer-sidebar3">
      <?php
        if(is_active_sidebar('footer-sidebar-3')){
          dynamic_sidebar('footer-sidebar-3');
      }
    ?>
    </div>
  </div>
</footer>

</div> <!--Closing div container-->

<?php wp_footer();?>
<?php
  if(isset($_GET["h"])){
    //Hide footer
  }
  else{
        wp_nav_menu( array ( 
          'theme_location' => 'footer-menu', 
          'container_class' => 'footer-menu-class' ) 
        ); 
  }
?>

<div class='copyright-container'>
  <p class='copyright-text'>2010-<?php date('y'); ?> | &copy; HashedIn Technologies Pvt. Ltd.</p>
</div>
<!-- Uncomment the following to setup intercom in local environment -->
<!-- <script>
  window.intercomSettings = {
    app_id: "xw6ycgfo",
    custom_launcher_selector: '.launch-intercom'
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/o7muyeev';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script> -->

  <!-- To support unsupported css in ipads -->
  <!-- <script>jQuery(function () { objectFitImages() });</script> -->

  <script>jQuery(window).load(function(){objectFitImages();})</script>

 <!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o1vlo');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->

 <!-- Linkedin tag manager -->
 <script type="text/javascript">
_linkedin_partner_id = "816419";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=816419&fmt=gif" />
</noscript>

</body>
</html>
