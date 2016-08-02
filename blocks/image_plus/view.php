<?php defined('C5_EXECUTE') or die("Access Denied.");
$ih = Core::make('helper/image');
if (is_object($f) && $f->getFileID()) {
	$thumb = $ih->getThumbnail($f, 264, 271, true);
}
?>

<?php if($linkUrl){?>
<a class="archebian-image" href="<?=$linkUrl?>">
<?php } else { ?>
<div class="archebian-image">
<?php } ?>

	<?php if($thumb){?>
	<img src="<?=$thumb->src?>" alt="">
	<?php } ?>
	<?php if ($title || $content) {?>
	<div class="archebian-image-content">
	<?php } ?>
	<?php if ($title) {?>
	<?=$title?>
	<?php } ?>

	<?php if ($content) {?>
	<?=$content?>
	<?php } ?>
	<?php if ($title || $content) {?>
	</div>
	<?php } ?>

<?php if($linkUrl){?>
</a>
<?php } else { ?>
</div>
<?php } ?>
