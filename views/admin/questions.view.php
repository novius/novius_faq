<?php
$uniqid = uniqid('questions_');
?>
<div id="<?= $uniqid ?>" class="count-questions-js" data-nb-questions="<?= empty($item->questions) ? 1 : count($item->questions) ?>">
    <div class="qa_list">
<?php
$i = 1;
if (!empty($item->questions)) {
    foreach ($item->questions as $q) {
        echo \View::forge('novius_faq::admin/question', array(
            'index' => $i,
            'item' => $q,
        ), false);
        $i++;
    }
} else {
    //Display an empty question in case none have already been added
    echo \View::forge('novius_faq::admin/question', array(
        'index' => $i,
        'item' => \Novius\Faq\Model_Question::forge(),
    ), false);
}
?>
    </div>
    <button class="add-question-js"><?= __('Add one question') ?></button>
</div>

