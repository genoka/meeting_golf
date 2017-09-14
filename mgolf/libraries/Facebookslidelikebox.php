<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebookslidelikebox {

    function __construct($params)
    {
        // Do something with $params
    }
    function getLikebox( $params )   {
		global $mainframe;
		 if (trim( $params->get( 'loadjQuery' ) ) == 1) {
				echo $slidelikebox = '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>';
					}
				else if (trim( $params->get( 'loadjQuery' ) ) == 0) {
					 $slidelikebox = ' ';
					}
				if (trim( $params->get( 'position' ) ) == 1){	
					if (trim( $params->get( 'click' ) ) == "click")
					{?>
					<script type="text/javascript">
						jQuery.noConflict();
							jQuery(function (){
								jQuery('#likebox_1_1').toggle(function() {
								jQuery('#likebox_1').animate({left: 0}, 500); 
								jQuery('#fblink').toggleClass('close', 'open'); 
								jQuery('#fblink').html(''); 
								},
							function() {
								jQuery.noConflict();
								jQuery('#likebox_1').animate({left: -<?php echo $params->get( 'fbwidth' )+10; ?>}, 500); 
								jQuery('#fblink').toggleClass('close', 'open'); 
								jQuery('#fblink').html(''); 
							});});
					</script>
					<?php
					}
					else 
					{ ?>
					<script type="text/javascript">
						jQuery.noConflict();
						jQuery(function (){
						jQuery(document).ready(function()
							{
						jQuery.noConflict();
							jQuery(function (){
								jQuery("#likebox_1").hover(function(){ jQuery(this).stop(true,false).animate({left:  0}, 500); },function(){ jQuery("#likebox_1").stop(true,false).animate({left: -<?php echo $params->get( 'fbwidth' )+10; ?>}, 500); });
						});});});
					</script>
<?php
}}
elseif (trim( $params->get( 'position' ) ) == 0){
if (trim( $params->get( 'click' ) ) == "click")
					{?>
					<script type="text/javascript">
								jQuery(document).ready(function() {
								jQuery.noConflict();
								jQuery('#likebox_1_1').toggle(function() {
								jQuery('#likebox_1').animate({right: 0}, 500); 
								jQuery('#fblink').toggleClass('close', 'open'); 
								jQuery('#fblink').html(''); 
								},
							function() {
								jQuery.noConflict();
								jQuery('#likebox_1').animate({right: -<?php echo $params->get( 'fbwidth' )+10; ?>}, 500); 
								jQuery('#fblink').toggleClass('close', 'open'); 
								jQuery('#fblink').html(''); 
							});});
					</script>
					<?php
					}
					else
					{ ?>
					<script type="text/javascript">
						jQuery.noConflict();
						jQuery(function (){
						jQuery(document).ready(function()
							{
						jQuery.noConflict();
							jQuery(function (){
								jQuery("#likebox_1").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#likebox_1").stop(true,false).animate({right: -<?php echo $params->get( 'fbwidth' )+10; ?>}, 500); });
						});});});
					</script>
<?php
}
}
		if ($params->get('position') == 1) {
				echo '<div id="likebox_1" style="left:-'.trim($params->get( 'fbwidth' )+10).'px;top: '.trim($params->get( 'fbtop' )).'px;"/><div id="likebox_1_1" style="width:'.trim( $params->get( 'fbwidth' )).'px;height:'.trim( $params->get( 'fbheight' )).'px;"/><a class="open" id="fblink" href="#"></a><img style="right:-35px;" src="modules/mod_facebook_slide_likebox/tmpl/images/fb2.png" alt="" /><iframe src="http://www.facebook.com/plugins/likebox.php?id='.trim( $params->get( 'profile_id' ) ).'&amp;locale='.trim( $params->get( 'locale' ) ).'&amp;width='.trim( $params->get( 'fbwidth' )+3).'&amp;height='.trim( $params->get( 'fbheight' )+3).'&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream='.trim( $params->get( 'stream' ) ).'&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.trim( $params->get( 'fbwidth' )+3).'px; height:'.trim( $params->get( 'fbheight' )+3).'px;" allowTransparency="true"></iframe></div></div>';
				}
				elseif ($params->get('position') == 0){
				echo '<div id="likebox_1" style="right:-'.trim($params->get( 'fbwidth' )+10).'px;top: '.trim($params->get( 'fbtop' )).'px;"/><div id="likebox_1_1" style="width:'.trim( $params->get( 'fbwidth' )).'px;height:'.trim( $params->get( 'fbheight' )).'px;"/><a class="open" id="fblink" href="#"></a><img style="left:-35px;" src="modules/mod_facebook_slide_likebox/tmpl/images/fb1.png" alt="" /><iframe src="http://www.facebook.com/plugins/likebox.php?id='.trim( $params->get( 'profile_id' ) ).'&amp;locale='.trim( $params->get( 'locale' ) ).'&amp;width='.trim( $params->get( 'fbwidth' )+3).'&amp;height='.trim( $params->get( 'fbheight' )+3).'&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream='.trim( $params->get( 'stream' ) ).'&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.trim( $params->get( 'fbwidth' )+3).'px; height:'.trim( $params->get( 'fbheight' )+3).'px;" allowTransparency="true"></iframe></div></div>';
				}
	}
}

?>