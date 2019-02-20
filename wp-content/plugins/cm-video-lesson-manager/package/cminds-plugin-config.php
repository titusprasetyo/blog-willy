<?php

use com\cminds\videolesson\App;

$cminds_plugin_config = array(
	'plugin-is-pro'					 => App::isPro(),
	'plugin-has-addons'      => TRUE,
	'plugin-addons'        => array(
        array( 'title' => 'Video Lessons Direct Payments', 'description' => 'Allow users to pay for viewing video channels using Easy digital downloads cart.', 'link' => 'https://www.cminds.com/wordpress-plugins-library/video-lessons-edd-payments-add-on-for-wordpress-by-creativeminds/', 'link_buy' => 'https://www.cminds.com/checkout/?edd_action=add_to_cart&download_id=86324&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1' ),
        array( 'title' => 'CM MicroPayment Platform', 'description' => 'Add your own “virtual currency“ and allow to charge for posting and answering questions.', 'link' => 'https://www.cminds.com/wordpress-plugins-library/micropayments/', 'link_buy' => 'https://www.cminds.com/checkout/?edd_action=add_to_cart&download_id=11388&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=0' ),
	),
	'plugin-version'				 => App::VERSION,
	'plugin-abbrev'					 => App::PREFIX,
	'plugin-parent-abbrev'			 => '',
	'plugin-affiliate'				 => '',
	'plugin-redirect-after-install'	 => admin_url( 'admin.php?page=cmvl-settings' ),
	'plugin-settings-url'		 	 => admin_url( 'admin.php?page=cmvl-settings' ),
	'plugin-file'					 => App::getPluginFile(),
	'plugin-dir-path'				 => plugin_dir_path( App::getPluginFile() ),
	'plugin-dir-url'				 => plugin_dir_url( App::getPluginFile() ),
	'plugin-basename'				 => plugin_basename( App::getPluginFile() ),
	'plugin-icon'					 => '',
	'plugin-name'					 => App::getPluginName( true ),
	'plugin-license-name'			 => App::getPluginName(),
	'plugin-slug'					 => App::LICENSING_SLUG,
	'plugin-short-slug'				 => App::PREFIX,
	'plugin-parent-short-slug'		 => '',
	'plugin-menu-item'				 => App::MENU_SLUG,
	'plugin-textdomain'				 => '',
	'plugin-show-shortcodes'	 => TRUE,
	'plugin-shortcodes'			 => '<p>You can use the following available shortcodes.</p>',
	'plugin-shortcodes-action'	 => 'cmvl_display_supported_shortcodes',
	'plugin-userguide-key'			 => '354-cm-video-lessons-manager-cmvlm',
	'plugin-store-url'				 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/',
	'plugin-support-url'			 => 'https://wordpress.org/support/plugin/cm-video-lesson-manager',
	'plugin-review-url'				 => 'http://wordpress.org/support/view/plugin-reviews/cm-video-lesson-manager',
	'plugin-changelog-url'			 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/#changelog',
	'plugin-licensing-aliases'		 => array( App::getPluginName( false ), App::getPluginName( true ) ),
	'plugin-show-guide'              => TRUE,
	'plugin-guide-text'              => '    <div style="display:block">
	<ol>
	<li>Go to the  <strong>"Plugin Settings"</strong></li>
	<li>Visit <strong>"Vimeo Develop Dashboard"</strong> to generate a new App</li>
	<li>Copy <strong>App keys and access tokens</strong> to plugin settings</li>
	<li>From the plugin admin menu Select <strong>"Channels" </strong>.</li>
	<li>Select <strong>Add Channel</strong> and define your first channel. Make sure to select the corresponding Vimeo album</li>
	<li>View channel or add a shortcode to embed in a post or page</li>
	</ol>
	<h3>Vimeo API instructions</h3>
	<ol>
		<li>To display more than one channel you need to have the Vimeo Plus or Pro account.
		When using the basic free account you can provide only one channel.</li>
		<li>Please go to <a href="https://developer.vimeo.com/apps/new" target="_blank">developer.vimeo.com/apps/new</a>
		(you must have a Vimeo account).</li>
		<li>Enter as the App URL: <kbd><?php echo get_home_url(); ?></kbd></li>
		<li>Leave blank the <em>App Callback URLs</em> field.</li>
		<li>When the new Application has been created, go to the <strong>Authentication</strong> tab.
		Copy the <strong>Client Identifier</strong> and <strong>Client Secret</strong> values and them put into the <?php echo App::getPluginName(); ?> Settings.</li>
		<li>On the <em>Authentication</em> tab scroll down to the <em>Generate an Access Token</em> section.
		Check the <strong>Edit</strong> and <strong>Interact</strong> permission scopes and press the <strong>Generate Token</strong> button.
		Copy <em>Your new Access token</em> value and put into the <?php echo App::getPluginName(); ?> Settings.</li>
		<br>
		For more please visit the <a href="https://creativeminds.helpscoutdocs.com/category/354-video-lessons-manager-cmvlm">user guide</a> and search for articles marked before ver 2
	</ol>
	</div>',
	'plugin-guide-video-height'      => 240,
	'plugin-guide-videos'            => array(
		array( 'title' => 'Installation tutorial', 'video_id' => '161022219' ),
	),
	   'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Why you should upgrade to Pro', 'video_time' => '0:00' ),
        array( 'title' => 'Improved importing proccess from Vimeo and Wistla', 'video_time' => '0:03' ),
        array( 'title' => 'Use shortcodes', 'video_time' => '0:32' ),
        array( 'title' => 'Lessons and courses new stracture', 'video_time' => '0:57' ),
        array( 'title' => 'Control lesson layout', 'video_time' => '1:25' ),
        array( 'title' => 'Usa statistics and rstudent eports', 'video_time' => '2:05' ),
        array( 'title' => 'Notifications ', 'video_time' => '2:40' ),
        array( 'title' => 'Localization', 'video_time' => '3:03' ),
        array( 'title' => 'Access control', 'video_time' => '3:20' ),
        array( 'title' => 'User notes', 'video_time' => '3:57' ),
        array( 'title' => 'Bookmarks', 'video_time' => '4:35' ),
        array( 'title' => 'Student dashboard', 'video_time' => '5:08' ),
        array( 'title' => 'Search videos', 'video_time' => '5:47' ),
        array( 'title' => 'Payment support ', 'video_time' => '6:03' ),
        array( 'title' => 'Quiz support ', 'video_time' => '6:57' ),
        array( 'title' => 'Cartificate support ', 'video_time' => '7:40' ),
   ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Video Lessons Premium Plugin Overview', 'video_id' => '271622775' ),
    ),

	'plugin-compare-table'			 => '
            <div class="pricing-table" id="pricing-table"><h2 style="padding-left:10px;">Upgrade The Video Lessons Manager Plugin:</h2>
            <ul>
            <li class="heading" style="background-color:red;">Current Edition</li>
            <li class="price">FREE<br /></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Read Vimeo private videos, albums and channels</li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Create multiple channels</li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Shortcode to include video List</li>
                   <hr>
                    Other CreativeMinds Offerings
                    <hr>
                 <a href="https://www.cminds.com/wordpress-plugins-library/seo-keyword-hound-wordpress/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/Hound2.png"  width="220"></a><br><br><br>
                <a href="https://www.cminds.com/store/cm-wordpress-plugins-yearly-membership/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/banner_yearly-membership_220px.png"  width="220"></a><br>
	</ul>

	<ul>
     <li class="heading">Pro<a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
     <li class="price">$39.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" target="_blank"> >>> </a></span> <br /></li>
     <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=31919&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free features are supported in the pro"></span></li>
 	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Read Vimeo or Wistia videos <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Plugin support using videos hosted in Vimeo or Wistia"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Create multiple lessons <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="You can set as many as needed lessons or video courses within the site. Each showing a different videos from Vimeo or Wistia. Displaying each can be done using a shortcode and it can be embedded on any post or page"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Shortcode to Include video list <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Displaying a lesson or a video course can be done using a shortcode and it can be embedded on any post or page"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Bookmarks support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can mark videos in his private bookmark list and see the list of all bookmarks in dashboard "></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>History and statistics <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Detailed statistics per each user and video. The user level report shows what each user has watched down to the amount of seconds in each video. The video level report shows the amount of minutes/seconds spent on each video"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>User notes support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can leave his own notes and remarks for each video. This notes are only viewable by the user. User can also search his notes using the plugin search function "></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Student dashboard <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Plugin support building a dashboard using a shortcode which display all needed information for each student including bookmarks, report and list of video lessons available"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Search within videos and notes <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="You can search video content by video description, notes and video title"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Access control <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Admin can define videos can be viewed by logged in or non logged in users"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Video courses <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Video lessons can be grouped by courses. This can support a video course structure where each chapter is divided into lessons"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Videos templates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Video lesson can be shown using several available display templates"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Edit labels <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All plugin labels are editable making them easy to customize directly from plugin setting"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Notifications support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Admin can be notified when a user has finished watching a video lesson or course"></span></li>
                  <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
  </ul>
	<ul>
    <li class="heading">Deluxe<a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
     <li class="price">$59.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" target="_blank"> >>> </a></span> <br /></li>
     <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=213734&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free and Pro Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free and pro features are supported"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Payment Support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Support purchase option for watching a video lesson. Payment is done while integrating the plugin with Easy Digital Downloads and can support more than 20 payment gateways"></span></li>
                 <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
  	</ul>

<ul>
    <li class="heading">Ultimate<a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
     <li class="price">$99.00<br /> <span style="font-size:14px;">(For one Year / Site)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-video-lessons-manager-plugin-for-wordpress/" target="_blank"> >>> </a></span> <br /></li>
     <li class="action"><a href="https://www.cminds.com/?edd_action=add_to_cart&download_id=213733&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
    <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free and Deluxe Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free and pro features are supported"></span></li>
	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Quiz Addon <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Support adding quiz knowledge test after completing a video lesson. Admin can define score for passing test and receiving a certification"></span></li>
 	<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Certificate Addon <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Create PDF certificates for lessons and courses and send it by email to the user that finished a course"></span></li>
                  <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
  	</ul>


	</div>',
);

