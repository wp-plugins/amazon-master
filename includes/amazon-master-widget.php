<?php
//Hook Widget
add_action( 'widgets_init', 'amazon_master_widget' );
//Register Widget
function amazon_master_widget() {
register_widget( 'amazon_master_widget' );
}

class amazon_master_widget extends WP_Widget {
	function amazon_master_widget() {
	$widget_ops = array( 'classname' => 'Amazon Master', 'description' => __('Amazon Master let\'s you can automatically display the hottest deals from Amazon making your wordpress a money making machine. ', 'amazon_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'amazon_master_widget' );
	$this->WP_Widget( 'amazon_master_widget', __('Amazon Master', 'amazon_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$name = "Amazon Master";
		$title = isset( $instance['title'] ) ? $instance['title'] :false;
		$amazonspacer ="'";
		$show_amazondeals = isset( $instance['show_amazondeals'] ) ? $instance['show_amazondeals'] :false;
		$amazondeals_code = $instance['amazondeals_code'];
		echo $before_widget;
		
		// Display the widget title
	if ( $title )
		echo $before_title . $name . $after_title;
	//Display Amazon Deals
	if ( $show_amazondeals )
		echo $amazondeals_code;
	echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['down_link_amazon'] = $new_instance['down_link_amazon'];
		update_option('down_link_amazon', $new_instance['down_link_amazon']);
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['show_amazondeals'] = $new_instance['show_amazondeals'];
		$instance['amazondeals_code'] = $new_instance['amazondeals_code'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'name' => __('Amazon Master', 'amazon_master'), 'title' => true, 'show_amazondeals' => false, 'amazondeals_code' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['title'], true ); ?> id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><b><?php _e('Display Widget Title', 'amazon_master'); ?></b></label>
	</p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_amazondeals'], true ); ?> id="<?php echo $this->get_field_id( 'show_amazondeals' ); ?>" name="<?php echo $this->get_field_name( 'show_amazondeals' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_amazondeals' ); ?>"><b><?php _e('Display Amazon Deals', 'amazon_master'); ?></b></label>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'amazondeals_code' ); ?>"><?php _e('insert Amazon Deals Code:', 'amazon_master'); ?></label></br>
	<textarea cols="35" rows="5" id="<?php echo $this->get_field_id( 'amazondeals_code' ); ?>" name="<?php echo $this->get_field_name( 'amazondeals_code' ); ?>" ><?php echo stripslashes ($instance['amazondeals_code']); ?></textarea>
	</p>
	<div class="description">Copy and Paste your amazon deals script code from Amazon website.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Shortcode Framework</b>
		</p>
		<div class="description">The shortcode framework allows you to insert Amazon Master inside Pages & Posts without the need of extra plugins or gimmicks. Fast page load times and top SEO. Only available in advanced version.</div>
	<br>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
	&nbsp;
	<b>Amazon Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/amazon-master/" target="_blank" title="Amazon Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/amazon-master-documentation/" target="_blank" title="Amazon Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.org/plugins/amazon-master/" target="_blank" title="Amazon Master Wordpress">RATE US *****</a></p>
<div style="background: url(<?php echo plugins_url('../images/techgasp-hr.png', __FILE__); ?>) repeat-x; height: 10px"></div>
		<p>
		<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; width:16px; vertical-align:middle;" />
		&nbsp;
		<b>Advanced Version Updater</b>
		</p>
		<div class="description">The advanced version updater allows to automatically update your advanced plugin. Only available in advanced version.</div>
		<br>
	<?php
	}
 }
?>