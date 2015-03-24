<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class amazon_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
?>
<table class="widefat fixed" cellspacing="0">
	<thead>
		<tr>
			<th id="columnname" class="manage-column column-columnname" scope="col" width="300"><legend><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'amazon_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'amazon_master'); ?></h3></legend></th>
			<th id="columnname" class="manage-column column-columnname" scope="col"><h3><img src="<?php echo plugins_url('../images/techgasp-minilogo-16.png', __FILE__); ?>" style="float:left; height:16px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'amazon_master'); ?></h3></legend></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th class="manage-column column-columnname" scope="col" width="300"><a class="button-primary" href="http://wordpress.techgasp.com/amazon-master/" target="_blank" title="Get Add-ons" style="float:left;">Get Add-ons</a></p></th>
			<th class="manage-column column-columnname" scope="col"></th>
			<th class="manage-column column-columnname" scope="col"><a class="button-primary" href="http://wordpress.techgasp.com/amazon-master/" target="_blank" title="Get Add-ons" style="float:right;">Get Add-ons</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-widget-buttons.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Amazon Master Buttons Widget</h3><p>The perfect Widget to sell even more by linking your wordpress website with your Amazon profile.</p><p>Works great when published under any Amazon Master Deals widget.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-yes.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-widget-amazon-deals.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Amazon Master Deals Widget</h3><p>Amazon Master Deals let's you can automatically display the hottest deals from Amazon making your wordpress a money making machine. By encapsulating and cleaning the amazon script we achieved Incredible Fast Page Load Times and clean code for Perfect Google SEO, a must for professional wordpress websites.</p><p>Navigate to your wordpress widgets page and start using it.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-yes.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-shortcode-in.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Amazon Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized amazon buttons in each page or post. Easy to use it can be found when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[amazon-master]</b> anywhere inside that text.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-shortcode-un.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Universal Shortcode</h3><p>Amazon Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same amazon buttons across different pages or posts. Easy to use it can be found right here under the Shortcodes menu. Once you have created your shortcode, Just insert the shortcode <b>[amazon-master-un]</b> anywhere inside the text of your pages or posts.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-updater.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td class="column-columnname" width="300" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-amazonmaster-admin-addons-support.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td class="column-columnname"style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides 24/7 award winning professional wordpress support for all advanced version costumers and replies to support tickets usually within minutes of being received. Support Us and we will Support You.</p></td>
			<td class="column-columnname" style="vertical-align:middle"><img src="<?php echo plugins_url('../images/techgasp-check-no.png', __FILE__); ?>" alt="<?php echo get_option('amazon_master_name'); ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}