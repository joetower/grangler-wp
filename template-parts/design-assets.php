<?php

$fileDownload = get_field('design_download');

if( $fileDownload ):

	// vars
	$url = $fileDownload['url'];
	$title = $fileDownload['title'];
	$caption = $fileDownload['caption'];


	// icon
	$icon = $fileDownload['icon'];

	if( $fileDownload['type'] == 'image' ) {
		$icon =  $fileDownload['sizes']['thumbnail'];
	}

	if( $caption ): ?>

	<div class="wp-caption design-asset download">

	<?php endif; ?>

	<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">
		<img src="<?php echo $icon; ?>" />
		<span>Download file</span>
	</a>

	<?php if( $caption ): ?>
			<p class="wp-caption-text"><?php echo $caption; ?></p>
		</div>

	<?php endif; ?>

<?php endif; ?>
