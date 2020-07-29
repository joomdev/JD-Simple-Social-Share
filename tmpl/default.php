<?php
/*-------------------------------------------------------------------------------
# JD Simple Social Share module for Joomla 3.x v1.0.0
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct accessdefined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
$path			= $params->get('path');?>
<!--http://sharingbuttons.io/-->
<!-- Small Icons -->
<?php if ($styleSize == "1") : ?>
<!-- Sharingbutton Facebook -->
<?php if ($showFacebook == "1"): ?>
	<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
	  		<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
	  	    	<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
	  	        	<g>
						<path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
	  	        	</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Twitter -->
<?php if ($showTwitter == "1"): ?>
	<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?php echo $params->get('textValue') ?>&amp;url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Google+ -->
<?php if ($showGoogle == "1"): ?>
	<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
							<polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5 	"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Tumblr -->
<?php if ($showTumblr == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=<?php echo $params->get('textValue') ?>&amp;caption=<?php echo $params->get('textValue') ?>&amp;content=http://<?php echo $params->get('urlValue') ?>&amp;canonicalUrl=http://<?php echo $params->get('urlValue') ?>&amp;shareSource=tumblr_share_button" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M13.5,0.5v5h5v4h-5v5.515c0,5.028,3.52,4.427,6,2.798v4.433c-6.728,3.172-12-0.064-12-4.255V9.5h-3V6.668 c0.903-0.293,2.245-0.714,2.889-1.261c0.646-0.551,1.162-1.208,1.551-1.976C9.331,2.664,9.6,1.686,9.746,0.5H13.5z"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton E-Mail -->
<?php if ($showEmail == "1"): ?>
	<a class="resp-sharing-button__link" href="mailto:?subject=<?php echo $params->get('textValue') ?>&amp;body=http://<?php echo $params->get('urlValue') ?>" target="_self" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M22,4H2C0.897,4,0,4.897,0,6v12c0,1.103,0.897,2,2,2h20c1.103,0,2-0.897,2-2V6C24,4.897,23.103,4,22,4z M7.248,14.434 l-3.5,2C3.67,16.479,3.584,16.5,3.5,16.5c-0.174,0-0.342-0.09-0.435-0.252c-0.137-0.239-0.054-0.545,0.186-0.682l3.5-2 c0.24-0.137,0.545-0.054,0.682,0.186C7.571,13.992,7.488,14.297,7.248,14.434z M12,14.5c-0.094,0-0.189-0.026-0.271-0.08l-8.5-5.5 C2.997,8.77,2.93,8.46,3.081,8.229c0.15-0.23,0.459-0.298,0.691-0.147L12,13.405l8.229-5.324c0.232-0.15,0.542-0.084,0.691,0.147 c0.15,0.232,0.083,0.542-0.148,0.691l-8.5,5.5C12.189,14.474,12.095,14.5,12,14.5z M20.934,16.248 C20.842,16.41,20.673,16.5,20.5,16.5c-0.084,0-0.169-0.021-0.248-0.065l-3.5-2c-0.24-0.137-0.323-0.442-0.186-0.682 s0.443-0.322,0.682-0.186l3.5,2C20.988,15.703,21.071,16.009,20.934,16.248z"/>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Pinterest -->
<?php if ($showPinterest == "1"): ?>
	<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http://<?php echo $params->get('urlValue') ?>&amp;media=http://<?php echo $params->get('urlValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<g stroke-width="2px" stroke-linejoin="round" stroke-miterlimit="10">
						<circle stroke-linecap="round" cx="12" cy="12" r="11.5"/>
						<path d="M8.003 11.215c-.157-.342-.249-.748-.249-1.246 0-2.32 1.738-4.4 4.525-4.4 2.468 0 3.824 1.509 3.824 3.521 0 2.649-1.173 4.888-2.914 4.888-.961 0-1.682-.796-1.451-1.772.277-1.163.813-2.42.813-3.261 0-.752-.404-1.378-1.24-1.378-.982 0-1.772 1.016-1.772 2.378 0 .866.294 1.454.294 1.454l-1.183 5.008c-.351 1.487-.053 3.309-.027 3.492.015.11.154.137.218.053.091-.118 1.262-1.563 1.66-3.007.111-.409.646-2.526.646-2.526.318.609 1.252 1.145 2.244 1.145 2.955 0 4.959-2.693 4.959-6.297 0-2.728-2.309-5.267-5.819-5.267-4.366 0-6.568 3.13-6.568 5.74 0 .846.172 1.643.527 2.279l1.513-.804z"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Linkedin -->
<?php if ($showLinkedin == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://<?php echo $params->get('urlValue') ?>&amp;title=<?php echo $params->get('textValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>&amp;source=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<g stroke-width="2px" stroke-linejoin="round" stroke-miterlimit="10">
					<circle stroke-linecap="round" cx="12" cy="12" r="11.5"/>
					<path d="M15 12.5c-.276 0-.5.223-.5.5v3.5h-3s.031-6.478 0-7h3v.835s.457-.753 1.707-.753c1.55 0 2.293 1.12 2.293 3.296v3.622h-3v-3.5c0-.277-.225-.5-.5-.5zM7.5 9.5h2v7h-2z"/>
					<circle cx="8.5" cy="6.5" r="1"/>
				</g>
			</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Reddit -->
<?php if ($showReddit == "1"): ?>
	<a class="resp-sharing-button__link" href="https://reddit.com/submit/?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<g stroke-width="2px" stroke-linejoin="round" stroke-miterlimit="10" fill="none">
						<circle stroke-linecap="round" cx="12" cy="12" r="11.5"/>
						<ellipse cx="12" cy="14.369" rx="6.195" ry="4.239"/>
						<path stroke-linecap="round" d="M14.307 16.248c-.623.359-1.428.576-2.307.576-.883 0-1.691-.217-2.316-.58"/>
						<circle cx="14.609" cy="13.392" r=".979"/>
						<circle cx="9.391" cy="13.392" r=".978"/>
						<path stroke-linecap="round" d="M16.398 11.385c.262-.55.822-.929 1.471-.929.9 0 1.631.73 1.631 1.631 0 .816-.6 1.492-1.383 1.612"/>
						<circle stroke-linecap="round" cx="17.218" cy="7.521" r="1.63"/>
						<path stroke-linecap="round" d="M7.603 11.385c-.263-.549-.823-.929-1.472-.929-.9 0-1.631.73-1.631 1.631 0 .816.6 1.492 1.383 1.612M12 10.13s-.082-4.824 3.588-2.609"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton XING -->
<?php if ($showXING == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.xing.com/app/user?op=share;url=http://<?php echo $params->get('urlValue') ?>;title=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--xing resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<g stroke-width="2px" stroke-linejoin="round" stroke-miterlimit="10">
						<circle stroke-linecap="round" cx="12" cy="12" r="11.5"/>
						<path d="M8.406 8.5h-3.084l1.676 2.754-2.238 3.277h3.084l2.238-3.277zM18.432 5.5h-3.272l-4.858 8.511 3.131 5.489h3.27l-3.131-5.489z"/>
					</g>
				</svg>
			</div>
		</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Whatsapp -->
<?php if ($showWhatsapp == "1"): ?>
	<a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo $params->get('urlValue') ?>%20http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="">
		<div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<g xmlns="http://www.w3.org/2000/svg" stroke-linejoin="round" stroke-miterlimit="10" fill="none">
						<circle class="st0" cx="12" cy="12" r="11.5"/>
					</g>
					<g>
						<path d="M17.6,6.2c-1.5-1.5-3.4-2.3-5.5-2.3c-4.3,0-7.8,3.5-7.8,7.8c0,1.4,0.4,2.7,1,3.9l-1.1,4l4.1-1.1c1.1,0.6,2.4,0.9,3.7,0.9l0,0l0,0c4.3,0,7.8-3.5,7.8-7.8C19.9,9.6,19.1,7.7,17.6,6.2z M12.1,18.1L12.1,18.1c-1.2,0-2.3-0.3-3.3-0.9l-0.2-0.1l-2.4,0.6l0.7-2.4l-0.2-0.2c-0.6-1-1-2.2-1-3.4c0-3.6,2.9-6.5,6.5-6.5c1.7,0,3.3,0.7,4.6,1.9c1.2,1.2,1.9,2.8,1.9,4.6C18.6,15.2,15.7,18.1,12.1,18.1z M15.6,13.3c-0.2-0.1-1.1-0.6-1.3-0.6c-0.2-0.1-0.3-0.1-0.4,0.1c-0.1,0.2-0.5,0.6-0.6,0.8c-0.1,0.1-0.2,0.1-0.4,0s-0.8-0.3-1.6-1c-0.6-0.5-1-1.2-1.1-1.3c-0.1-0.2,0-0.3,0.1-0.4c0.1-0.1,0.2-0.2,0.3-0.3s0.1-0.2,0.2-0.3c0.1-0.1,0-0.2,0-0.3s-0.4-1.1-0.6-1.4C10,8.2,9.9,8.3,9.8,8.3c-0.1,0-0.2,0-0.4,0s-0.3,0-0.5,0.2s-0.7,0.7-0.7,1.6c0,1,0.7,1.9,0.8,2s1.4,2.1,3.3,2.9c0.5,0.2,0.8,0.3,1.1,0.4c0.5,0.1,0.9,0.1,1.2,0.1c0.4-0.1,1.1-0.5,1.3-0.9c0.2-0.5,0.2-0.8,0.1-0.9C16,13.5,15.8,13.4,15.6,13.3z"/>
					</g>
				</svg>
			</div>
		</div>
	</a><?php endif ; ?>
<?php endif ; ?>
<!-- Medium Icons -->
<?php if ($styleSize == "2") : ?>
<!-- Sharingbutton Facebook -->
<?php if ($showFacebook == "1"): ?>
	<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Facebook">
		<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
					</g>
				</svg>
			</div>Facebook</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Twitter -->
<?php if ($showTwitter == "1"): ?>
	<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?php echo $params->get('textValue') ?>.&amp;url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Twitter">
		<div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
					</g>
				</svg>
			</div>Twitter</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Google+ -->
<?php if ($showGoogle == "1"): ?>
	<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Google+">
		<div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
						<polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5   "/>
					</g>
				</svg>
			</div>Google+</div>
	</a><?php endif ; ?>
<!-- Sharingbutton Tumblr -->
<?php if ($showTumblr == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=<?php echo $params->get('textValue') ?>&amp;caption=<?php echo $params->get('textValue') ?>&amp;content=http://<?php echo $params->get('urlValue') ?>&amp;canonicalUrl=http://<?php echo $params->get('urlValue') ?>&amp;shareSource=tumblr_share_button" target="_blank" aria-label="Tumblr">
		<div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M13.5,0.5v5h5v4h-5v5.515c0,5.028,3.52,4.427,6,2.798v4.433c-6.728,3.172-12-0.064-12-4.255V9.5h-3V6.668 c0.903-0.293,2.245-0.714,2.889-1.261c0.646-0.551,1.162-1.208,1.551-1.976C9.331,2.664,9.6,1.686,9.746,0.5H13.5z"/>
					</g>
				</svg>
			</div>Tumblr</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton E-Mail -->
<?php if ($showEmail == "1"): ?>
	<a class="resp-sharing-button__link" href="mailto:?subject=<?php echo $params->get('textValue') ?>&amp;body=http://<?php echo $params->get('urlValue') ?>" target="_self" aria-label="E-Mail">
		<div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M22,4H2C0.897,4,0,4.897,0,6v12c0,1.103,0.897,2,2,2h20c1.103,0,2-0.897,2-2V6C24,4.897,23.103,4,22,4z M7.248,14.434 l-3.5,2C3.67,16.479,3.584,16.5,3.5,16.5c-0.174,0-0.342-0.09-0.435-0.252c-0.137-0.239-0.054-0.545,0.186-0.682l3.5-2 c0.24-0.137,0.545-0.054,0.682,0.186C7.571,13.992,7.488,14.297,7.248,14.434z M12,14.5c-0.094,0-0.189-0.026-0.271-0.08l-8.5-5.5 C2.997,8.77,2.93,8.46,3.081,8.229c0.15-0.23,0.459-0.298,0.691-0.147L12,13.405l8.229-5.324c0.232-0.15,0.542-0.084,0.691,0.147 c0.15,0.232,0.083,0.542-0.148,0.691l-8.5,5.5C12.189,14.474,12.095,14.5,12,14.5z M20.934,16.248 C20.842,16.41,20.673,16.5,20.5,16.5c-0.084,0-0.169-0.021-0.248-0.065l-3.5-2c-0.24-0.137-0.323-0.442-0.186-0.682 s0.443-0.322,0.682-0.186l3.5,2C20.988,15.703,21.071,16.009,20.934,16.248z"/>
				</svg>
			</div>E-Mail</div>
	</a><?php endif ; ?>
<!-- Sharingbutton Pinterest -->
<?php if ($showPinterest == "1"): ?>
	<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http://<?php echo $params->get('urlValue') ?>&amp;media=http://<?php echo $params->get('urlValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="Pinterest">
		<div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M12.137,0.5C5.86,0.5,2.695,5,2.695,8.752c0,2.272,0.8 ,4.295,2.705,5.047c0.303,0.124,0.574,0.004,0.661-0.33 c0.062-0.231,0.206-0.816,0.271-1.061c0.088-0.331,0.055-0.446-0.19-0.736c-0.532-0.626-0.872-1.439-0.872-2.59 c0-3.339,2.498-6.328,6.505-6.328c3.548,0,5.497,2.168,5.497,5.063c0,3.809-1.687,7.024-4.189,7.024 c-1.382,0-2.416-1.142-2.085-2.545c0.397-1.675,1.167-3.479,1.167-4.688c0-1.081-0.58-1.983-1.782-1.983 c-1.413,0-2.548,1.461-2.548,3.42c0,1.247,0.422,2.09,0.422,2.09s-1.445,6.126-1.699,7.199c-0.505,2.137-0.076,4.756-0.04,5.02 c0.021,0.157,0.224,0.195,0.314,0.078c0.13-0.171,1.813-2.25,2.385-4.325c0.162-0.589,0.929-3.632,0.929-3.632 c0.459,0.876,1.801,1.646,3.228,1.646c4.247,0,7.128-3.871,7.128-9.053C20.5,4.15,17.182,0.5,12.137,0.5z"/>
				</svg>
			</div>Pinterest</div>
	</a><?php endif ; ?>
<!-- Sharingbutton LinkedIn -->
<?php if ($showLinkedin == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://<?php echo $params->get('urlValue') ?>&amp;title=<?php echo $params->get('textValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>&amp;source=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="LinkedIn">
		<div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M6.527,21.5h-5v-13h5V21.5z M4.018,6.5H3.988C2.478,6.5,1.5,5.318,1.5,4.019c0-1.329,1.008-2.412,2.547-2.412 c1.541,0,2.488,1.118,2.519,2.447C6.565,5.354,5.588,6.5,4.018,6.5z M15.527,12.5c-1.105,0-2,0.896-2,2v7h-5c0,0,0.059-12,0-13h5 v1.485c0,0,1.548-1.443,3.938-1.443c2.962,0,5.062,2.144,5.062,6.304V21.5h-5v-7C17.527,13.396,16.632,12.5,15.527,12.5z"/>
					</g>
				</svg>
			</div>LinkedIn</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Reddit -->
<?php if ($showReddit == "1"): ?>
	<a class="resp-sharing-button__link" href="https://reddit.com/submit/?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Reddit">
		<div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M24,11.5c0-1.654-1.346-3-3-3c-0.964,0-1.863,0.476-2.422,1.241c-1.639-1.006-3.747-1.64-6.064-1.723 c0.064-1.11,0.4-3.049,1.508-3.686c0.72-0.414,1.733-0.249,3.01,0.478C17.189,6.317,18.452,7.5,20,7.5c1.654,0,3-1.346,3-3 s-1.346-3-3-3c-1.382,0-2.536,0.944-2.883,2.217C15.688,3,14.479,2.915,13.521,3.466c-1.642,0.945-1.951,3.477-2.008,4.551 C9.186,8.096,7.067,8.731,5.422,9.741C4.863,8.976,3.964,8.5,3,8.5c-1.654,0-3,1.346-3,3c0,1.319,0.836,2.443,2.047,2.844 C2.019,14.56,2,14.778,2,15c0,3.86,4.486,7,10,7s10-3.14,10-7c0-0.222-0.019-0.441-0.048-0.658C23.148,13.938,24,12.795,24,11.5z  M2.286,13.366C1.522,13.077,1,12.351,1,11.5c0-1.103,0.897-2,2-2c0.635,0,1.217,0.318,1.59,0.816 C3.488,11.17,2.683,12.211,2.286,13.366z M6,13.5c0-1.103,0.897-2,2-2s2,0.897,2,2c0,1.103-0.897,2-2,2S6,14.603,6,13.5z  M15.787,18.314c-1.063,0.612-2.407,0.949-3.787,0.949c-1.387,0-2.737-0.34-3.803-0.958c-0.239-0.139-0.321-0.444-0.182-0.683 c0.139-0.24,0.444-0.322,0.683-0.182c1.828,1.059,4.758,1.062,6.59,0.008c0.239-0.138,0.545-0.055,0.683,0.184 C16.108,17.871,16.026,18.177,15.787,18.314z M16,15.5c-1.103,0-2-0.897-2-2c0-1.103,0.897-2,2-2s2,0.897,2,2 C18,14.603,17.103,15.5,16,15.5z M21.713,13.365c-0.397-1.155-1.201-2.195-2.303-3.048C19.784,9.818,20.366,9.5,21,9.5 c1.103,0,2,0.897,2,2C23,12.335,22.468,13.073,21.713,13.365z"/>
				</svg>
			</div>Reddit</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton XING -->
<?php if ($showXING == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.xing.com/app/user?op=share;url=http://<?php echo $params->get('urlValue') ?>;title=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="XING">
		<div class="resp-sharing-button resp-sharing-button--xing resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M10.221,9.711L7.228,4.259C7.14,4.1,6.972,4,6.789,4H1.723c-0.177,0-0.34,0.093-0.43,0.245 c-0.09,0.153-0.093,0.341-0.008,0.496l2.854,5.198l-3.84,6.301c-0.094,0.154-0.098,0.348-0.009,0.505 C0.377,16.902,0.544,17,0.725,17h5.066c0.174,0,0.336-0.091,0.427-0.239l3.991-6.548C10.302,10.06,10.307,9.869,10.221,9.711z"/>
						<path d="M23.933,0.249C23.843,0.095,23.678,0,23.5,0h-5.374c-0.18,0-0.345,0.096-0.434,0.252L9.708,14.235 c-0.088,0.154-0.088,0.342,0,0.496l5.145,9.017C14.942,23.904,15.107,24,15.287,24h5.374c0.178,0,0.343-0.095,0.432-0.249 c0.09-0.154,0.09-0.344,0.002-0.499l-5.003-8.769l7.842-13.736C24.022,0.593,24.022,0.403,23.933,0.249z"/>
					</g>
				</svg>
			</div>XING</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton WhatsApp -->
<?php if ($showWhatsapp == "1"): ?>
	<a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo $params->get('textValue') ?>%20http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="WhatsApp">
		<div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<path stroke="none" d="M20.1,3.9C17.9,1.7,15,0.5,12,0.5C5.8,0.5,0.7,5.6,0.7,11.9c0,2,0.5,3.9,1.5,5.6l-1.6,5.9l6-1.6c1.6,0.9,3.5,1.3,5.4,1.3l0,0l0,0c6.3,0,11.4-5.1,11.4-11.4C23.3,8.9,22.2,6,20.1,3.9z M12,21.4L12,21.4c-1.7,0-3.3-0.5-4.8-1.3l-0.4-0.2l-3.5,1l1-3.4L4,17c-1-1.5-1.4-3.2-1.4-5.1c0-5.2,4.2-9.4,9.4-9.4c2.5,0,4.9,1,6.7,2.8c1.8,1.8,2.8,4.2,2.8,6.7C21.4,17.2,17.2,21.4,12,21.4z M17.1,14.3c-0.3-0.1-1.7-0.9-1.9-1c-0.3-0.1-0.5-0.1-0.7,0.1c-0.2,0.3-0.8,1-0.9,1.1c-0.2,0.2-0.3,0.2-0.6,0.1c-0.3-0.1-1.2-0.5-2.3-1.4c-0.9-0.8-1.4-1.7-1.6-2c-0.2-0.3,0-0.5,0.1-0.6s0.3-0.3,0.4-0.5c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0-0.4,0-0.5c0-0.1-0.7-1.5-1-2.1C8.9,6.6,8.6,6.7,8.5,6.7c-0.2,0-0.4,0-0.6,0S7.5,6.8,7.2,7c-0.3,0.3-1,1-1,2.4s1,2.8,1.1,3c0.1,0.2,2,3.1,4.9,4.3c0.7,0.3,1.2,0.5,1.6,0.6c0.7,0.2,1.3,0.2,1.8,0.1c0.6-0.1,1.7-0.7,1.9-1.3c0.2-0.7,0.2-1.2,0.2-1.3C17.6,14.5,17.4,14.4,17.1,14.3z"/>
				</svg>
			</div>WhatsApp</div>
	</a>
<?php endif ; ?>
<?php endif ; ?>
<!-- Large Icons -->
<?php if ($styleSize == "3") : ?>
<!-- Sharingbutton Facebook -->
<?php if ($showFacebook == "1"): ?>
	<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on Facebook">
		<div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
					</g>
				</svg>
			</div>Share on Facebook</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Twitter -->
<?php if ($showTwitter == "1"): ?>
	<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?php echo $params->get('textValue') ?>&amp;url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on Twitter">
		<div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
					</g>
				</svg>
			</div>Share on Twitter</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Google+ -->
<?php if ($showGoogle == "1"): ?>
	<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on Google+">
		<div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
						<polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5   "/>
					</g>
				</svg>
			</div>Share on Google+</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Tumblr -->
<?php if ($showTumblr == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=<?php echo $params->get('textValue') ?>&amp;caption=<?php echo $params->get('textValue') ?>&amp;content=http://URL&amp;canonicalUrl=http://<?php echo $params->get('urlValue') ?>&amp;shareSource=tumblr_share_button" target="_blank" aria-label="Share on Tumblr">
		<div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M13.5,0.5v5h5v4h-5v5.515c0,5.028,3.52,4.427,6,2.798v4.433c-6.728,3.172-12-0.064-12-4.255V9.5h-3V6.668 c0.903-0.293,2.245-0.714,2.889-1.261c0.646-0.551,1.162-1.208,1.551-1.976C9.331,2.664,9.6,1.686,9.746,0.5H13.5z"/>
					</g>
				</svg>
			</div>Share on Tumblr</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton E-Mail -->
<?php if ($showEmail == "1"): ?>
	<a class="resp-sharing-button__link" href="mailto:?subject=<?php echo $params->get('textValue') ?>&amp;body=http://<?php echo $params->get('urlValue') ?>" target="_self" aria-label="Share by E-Mail">
		<div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M22,4H2C0.897,4,0,4.897,0,6v12c0,1.103,0.897,2,2,2h20c1.103,0,2-0.897,2-2V6C24,4.897,23.103,4,22,4z M7.248,14.434 l-3.5,2C3.67,16.479,3.584,16.5,3.5,16.5c-0.174,0-0.342-0.09-0.435-0.252c-0.137-0.239-0.054-0.545,0.186-0.682l3.5-2 c0.24-0.137,0.545-0.054,0.682,0.186C7.571,13.992,7.488,14.297,7.248,14.434z M12,14.5c-0.094,0-0.189-0.026-0.271-0.08l-8.5-5.5 C2.997,8.77,2.93,8.46,3.081,8.229c0.15-0.23,0.459-0.298,0.691-0.147L12,13.405l8.229-5.324c0.232-0.15,0.542-0.084,0.691,0.147 c0.15,0.232,0.083,0.542-0.148,0.691l-8.5,5.5C12.189,14.474,12.095,14.5,12,14.5z M20.934,16.248 C20.842,16.41,20.673,16.5,20.5,16.5c-0.084,0-0.169-0.021-0.248-0.065l-3.5-2c-0.24-0.137-0.323-0.442-0.186-0.682 s0.443-0.322,0.682-0.186l3.5,2C20.988,15.703,21.071,16.009,20.934,16.248z"/>
				</svg>
			</div>Share by E-Mail</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Pinterest -->
<?php if ($showPinterest == "1"): ?>
	<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http://<?php echo $params->get('urlValue') ?>&amp;media=http://<?php echo $params->get('urlValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="Share on Pinterest">
		<div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M12.137,0.5C5.86,0.5,2.695,5,2.695,8.752c0,2.272,0.8 ,4.295,2.705,5.047c0.303,0.124,0.574,0.004,0.661-0.33 c0.062-0.231,0.206-0.816,0.271-1.061c0.088-0.331,0.055-0.446-0.19-0.736c-0.532-0.626-0.872-1.439-0.872-2.59 c0-3.339,2.498-6.328,6.505-6.328c3.548,0,5.497,2.168,5.497,5.063c0,3.809-1.687,7.024-4.189,7.024 c-1.382,0-2.416-1.142-2.085-2.545c0.397-1.675,1.167-3.479,1.167-4.688c0-1.081-0.58-1.983-1.782-1.983 c-1.413,0-2.548,1.461-2.548,3.42c0,1.247,0.422,2.09,0.422,2.09s-1.445,6.126-1.699,7.199c-0.505,2.137-0.076,4.756-0.04,5.02 c0.021,0.157,0.224,0.195,0.314,0.078c0.13-0.171,1.813-2.25,2.385-4.325c0.162-0.589,0.929-3.632,0.929-3.632 c0.459,0.876,1.801,1.646,3.228,1.646c4.247,0,7.128-3.871,7.128-9.053C20.5,4.15,17.182,0.5,12.137,0.5z"/>
				</svg>
			</div>Share on Pinterest</div>
	</a><?php endif ; ?>
<!-- Sharingbutton LinkedIn -->
<?php if ($showLinkedin == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://<?php echo $params->get('urlValue') ?>&amp;title=<?php echo $params->get('textValue') ?>&amp;summary=<?php echo $params->get('textValue') ?>&amp;source=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on LinkedIn">
		<div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<g>
						<path d="M6.527,21.5h-5v-13h5V21.5z M4.018,6.5H3.988C2.478,6.5,1.5,5.318,1.5,4.019c0-1.329,1.008-2.412,2.547-2.412 c1.541,0,2.488,1.118,2.519,2.447C6.565,5.354,5.588,6.5,4.018,6.5z M15.527,12.5c-1.105,0-2,0.896-2,2v7h-5c0,0,0.059-12,0-13h5 v1.485c0,0,1.548-1.443,3.938-1.443c2.962,0,5.062,2.144,5.062,6.304V21.5h-5v-7C17.527,13.396,16.632,12.5,15.527,12.5z"/>
					</g>
				</svg>
			</div>Share on LinkedIn</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton Reddit -->
<?php if ($showReddit == "1"): ?>
	<a class="resp-sharing-button__link" href="https://reddit.com/submit/?url=http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on Reddit">
		<div class="resp-sharing-button resp-sharing-button--reddit resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
					<path d="M24,11.5c0-1.654-1.346-3-3-3c-0.964,0-1.863,0.476-2.422,1.241c-1.639-1.006-3.747-1.64-6.064-1.723 c0.064-1.11,0.4-3.049,1.508-3.686c0.72-0.414,1.733-0.249,3.01,0.478C17.189,6.317,18.452,7.5,20,7.5c1.654,0,3-1.346,3-3 s-1.346-3-3-3c-1.382,0-2.536,0.944-2.883,2.217C15.688,3,14.479,2.915,13.521,3.466c-1.642,0.945-1.951,3.477-2.008,4.551 C9.186,8.096,7.067,8.731,5.422,9.741C4.863,8.976,3.964,8.5,3,8.5c-1.654,0-3,1.346-3,3c0,1.319,0.836,2.443,2.047,2.844 C2.019,14.56,2,14.778,2,15c0,3.86,4.486,7,10,7s10-3.14,10-7c0-0.222-0.019-0.441-0.048-0.658C23.148,13.938,24,12.795,24,11.5z  M2.286,13.366C1.522,13.077,1,12.351,1,11.5c0-1.103,0.897-2,2-2c0.635,0,1.217,0.318,1.59,0.816 C3.488,11.17,2.683,12.211,2.286,13.366z M6,13.5c0-1.103,0.897-2,2-2s2,0.897,2,2c0,1.103-0.897,2-2,2S6,14.603,6,13.5z  M15.787,18.314c-1.063,0.612-2.407,0.949-3.787,0.949c-1.387,0-2.737-0.34-3.803-0.958c-0.239-0.139-0.321-0.444-0.182-0.683 c0.139-0.24,0.444-0.322,0.683-0.182c1.828,1.059,4.758,1.062,6.59,0.008c0.239-0.138,0.545-0.055,0.683,0.184 C16.108,17.871,16.026,18.177,15.787,18.314z M16,15.5c-1.103,0-2-0.897-2-2c0-1.103,0.897-2,2-2s2,0.897,2,2 C18,14.603,17.103,15.5,16,15.5z M21.713,13.365c-0.397-1.155-1.201-2.195-2.303-3.048C19.784,9.818,20.366,9.5,21,9.5 c1.103,0,2,0.897,2,2C23,12.335,22.468,13.073,21.713,13.365z"/>
				</svg>
			</div>Share on Reddit</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton XING -->
<?php if ($showXING == "1"): ?>
	<a class="resp-sharing-button__link" href="https://www.xing.com/app/user?op=share;url=http://<?php echo $params->get('urlValue') ?>;title=<?php echo $params->get('textValue') ?>" target="_blank" aria-label="Share on XING">
		<div class="resp-sharing-button resp-sharing-button--xing resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
				<g>
					<path d="M10.221,9.711L7.228,4.259C7.14,4.1,6.972,4,6.789,4H1.723c-0.177,0-0.34,0.093-0.43,0.245 c-0.09,0.153-0.093,0.341-0.008,0.496l2.854,5.198l-3.84,6.301c-0.094,0.154-0.098,0.348-0.009,0.505 C0.377,16.902,0.544,17,0.725,17h5.066c0.174,0,0.336-0.091,0.427-0.239l3.991-6.548C10.302,10.06,10.307,9.869,10.221,9.711z"/>
					<path d="M23.933,0.249C23.843,0.095,23.678,0,23.5,0h-5.374c-0.18,0-0.345,0.096-0.434,0.252L9.708,14.235 c-0.088,0.154-0.088,0.342,0,0.496l5.145,9.017C14.942,23.904,15.107,24,15.287,24h5.374c0.178,0,0.343-0.095,0.432-0.249 c0.09-0.154,0.09-0.344,0.002-0.499l-5.003-8.769l7.842-13.736C24.022,0.593,24.022,0.403,23.933,0.249z"/>
				</g>
			</svg>
		</div>Share on XING</div>
	</a>
<?php endif ; ?>
<!-- Sharingbutton WhatsApp -->
<?php if ($showWhatsapp == "1"): ?>
	<a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo $params->get('textValue') ?>%20http://<?php echo $params->get('urlValue') ?>" target="_blank" aria-label="Share on WhatsApp">
		<div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--large" style="font-size:<?php echo $params->get('iconSize') ?>">
			<div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<path stroke="none" d="M20.1,3.9C17.9,1.7,15,0.5,12,0.5C5.8,0.5,0.7,5.6,0.7,11.9c0,2,0.5,3.9,1.5,5.6l-1.6,5.9l6-1.6c1.6,0.9,3.5,1.3,5.4,1.3l0,0l0,0c6.3,0,11.4-5.1,11.4-11.4C23.3,8.9,22.2,6,20.1,3.9z M12,21.4L12,21.4c-1.7,0-3.3-0.5-4.8-1.3l-0.4-0.2l-3.5,1l1-3.4L4,17c-1-1.5-1.4-3.2-1.4-5.1c0-5.2,4.2-9.4,9.4-9.4c2.5,0,4.9,1,6.7,2.8c1.8,1.8,2.8,4.2,2.8,6.7C21.4,17.2,17.2,21.4,12,21.4z M17.1,14.3c-0.3-0.1-1.7-0.9-1.9-1c-0.3-0.1-0.5-0.1-0.7,0.1c-0.2,0.3-0.8,1-0.9,1.1c-0.2,0.2-0.3,0.2-0.6,0.1c-0.3-0.1-1.2-0.5-2.3-1.4c-0.9-0.8-1.4-1.7-1.6-2c-0.2-0.3,0-0.5,0.1-0.6s0.3-0.3,0.4-0.5c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0-0.4,0-0.5c0-0.1-0.7-1.5-1-2.1C8.9,6.6,8.6,6.7,8.5,6.7c-0.2,0-0.4,0-0.6,0S7.5,6.8,7.2,7c-0.3,0.3-1,1-1,2.4s1,2.8,1.1,3c0.1,0.2,2,3.1,4.9,4.3c0.7,0.3,1.2,0.5,1.6,0.6c0.7,0.2,1.3,0.2,1.8,0.1c0.6-0.1,1.7-0.7,1.9-1.3c0.2-0.7,0.2-1.2,0.2-1.3C17.6,14.5,17.4,14.4,17.1,14.3z"/>
				</svg>
			</div>Share on WhatsApp</div>
	</a>
<?php endif ; ?>
<?php endif ; ?>