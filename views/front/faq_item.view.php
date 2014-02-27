<?php
    // Load dictionnary if we want to use __()
    // Nos\I18n::current_dictionary('faq::common');
?>
<div class="faq_faq noviusos_enhancer">
<h2><?=$faq->faq_title ?></h2>


<?= $faq->wysiwygs->introduction ?>
<?= \Nos\Nos::main_controller()->getPage()->htmlAnchor(array('text' => __('Back'))); ?></div>