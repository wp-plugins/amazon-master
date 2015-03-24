<?php
//Hook Widget
add_action( 'widgets_init', 'amazon_master_widget_deals' );
//Register Widget
function amazon_master_widget_deals() {
register_widget( 'amazon_master_widget_deals' );
}

class amazon_master_widget_deals extends WP_Widget {
	function amazon_master_widget_deals() {
	$widget_ops = array( 'classname' => 'Amazon Master Deals', 'description' => __('Amazon Master Deals let\'s you can automatically display the hottest deals from Amazon making your wordpress a money making machine. ', 'amazon_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'amazon_master_widget_deals' );
	$this->WP_Widget( 'amazon_master_widget_deals', __('Amazon Master Deals', 'amazon_master'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$amazon_title = isset( $instance['amazon_title'] ) ? $instance['amazon_title'] :false;
		$amazon_title_new = isset( $instance['amazon_title_new'] ) ? $instance['amazon_title_new'] :false;
		$amazonspacer ="'";
		$show_amazondeals = isset( $instance['show_amazondeals'] ) ? $instance['show_amazondeals'] :false;
		$amazondeals_code = $instance['amazondeals_code'];
		echo $before_widget;
		
		// Display the widget title
		if ( $amazon_title ){
			if (empty ($amazon_title_new)){
			if(is_multisite()){
			$amazon_title_new = get_site_option('amazon_master_name');
			}
			else{
			$amazon_title_new = get_option('amazon_master_name');
			}
		echo $before_title . $amazon_title_new . $after_title;
		}
		else{
		echo $before_title . $amazon_title_new . $after_title;
		}
	}
	else{
	}
	//Display Amazon Deals
	if ( $show_amazondeals ){
		echo $amazondeals_code;
	}
	else{
	}
	echo $after_widget;
	}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['amazon_title'] = strip_tags( $new_instance['amazon_title'] );
		$instance['amazon_title_new'] = $new_instance['amazon_title_new'];
		$instance['show_amazondeals'] = $new_instance['show_amazondeals'];
		$instance['amazondeals_code'] = $new_instance['amazondeals_code'];
		return $instance;
	}
	function form( $instance ) {
	//Set up some default widget settings.
	$defaults = array( 'amazon_title_new' => __('Amazon Master', 'amazon_master'), 'amazon_title' => true, 'amazon_title_new' => false, 'show_amazondeals' => false, 'amazondeals_code' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['amazon_title'], true ); ?> id="<?php echo $this->get_field_id( 'amazon_title' ); ?>" name="<?php echo $this->get_field_name( 'amazon_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'amazon_title' ); ?>"><b><?php _e('Display Widget Title', 'amazon_master'); ?></b></label></br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'amazon_title_new' ); ?>"><?php _e('Change Title:', 'amazon_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'amazon_title_new' ); ?>" name="<?php echo $this->get_field_name( 'amazon_title_new' ); ?>" value="<?php echo $instance['amazon_title_new']; ?>" style="width:auto;" />
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
	<b>Amazon Master Website</b>
	</p>
	<p><a class="button-secondary" href="http://wordpress.techgasp.com/amazon-master/" target="_blank" title="Amazon Master Info Page">Info Page</a> <a class="button-secondary" href="http://wordpress.techgasp.com/amazon-master-documentation/" target="_blank" title="Amazon Master Documentation">Documentation</a> <a class="button-primary" href="http://wordpress.techgasp.com/amazon-master/" target="_blank" title="Get Add-ons">Get Add-ons</a></p>
	<?php
	}
 }
?>