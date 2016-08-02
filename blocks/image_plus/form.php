<?php
defined('C5_EXECUTE') or die("Access Denied.");
$ps = Core::make('helper/form/page_selector');
$al = Core::make('helper/concrete/asset_library');
$editor = Core::make('editor');
?>
<fieldset>
    <legend>
        <?=t('Image')?>
    </legend>
    <div class="form-group">
        <?php
        echo $form->label('ccm-b-image', t('Image'));
        echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);
        ?>
    </div>
</fieldset>
<fieldset>
    <legend>
        <?=t('Optional Link')?>
    </legend>
    <div class="form-group">
        <?php
        echo $form->label('internalLinkCID', t('Choose Page:'));
        echo $ps->selectPage('internalLinkCID', $internalLinkCID);
        ?>
    </div>
    <div class="form-group">
        <?php echo $form->label('customLink', t('Or Custom Link')); ?>
        <?php echo $form->text('customLink', $customLink); ?>
    </div>
</fieldset>
<fieldset>
    <legend>
        <?=t('Optional Content')?>
    </legend>
    <div class="form-group">
        <?php echo $form->label('title', t('Optional Title')); ?>
        <?php echo $form->text('title', $title); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label('content', t('Card Content')); ?>
		<?=$editor->outputStandardEditor('content', $content);?>

    </div>
</fieldset>
