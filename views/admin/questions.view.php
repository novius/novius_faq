<?php
$uniqid = uniqid('questions_');
?>
<script type="text/javascript">
    //best way to load css file is to do this because it will be uploaded only once (even if several crud are open)
    require(['link!static/apps/novius_faq/css/admin.css']);
</script>
<div id="<?= $uniqid ?>" class="count-questions-js" data-nb-questions="<?= empty($item->questions) ? 1 : count($item->questions) ?>">
    <div class="qa_list">
<?php
$i = 1;
if (!empty($item->questions)) {
    $app_config = \Config::load('novius_faq::config', true);
    $questions = $item->questions;
    if (!empty($app_config['ques_order'])) {
        $order = $app_config['ques_order'];
        if (is_array($order)) {
            $questions = \Arr::sort($questions, $order[0], $order[1]);
        } else {
            $questions = \Arr::sort($questions, $order);
        }
    }
    foreach ($questions as $q) {
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

