<div class="qa_item" data-qa-index="<?= $index ?>">
    <input type="hidden" name="question[<?= $index ?>][ques_id]" value="<?= !empty($item->ques_id) ? $item->ques_id : 0 ?>" />
    <table class="fieldset">
        <tr>
            <th>
                <?= str_replace('{{X}}', $index, __('Question N°{{X}}: ')) ?>
            </th>
            <td>
                <input type="text" placeholder="<?= __('Leave both question and answer empty to delete a Q&A') ?>" name="question[<?= $index ?>][ques_question]" value="<?= !empty($item->ques_question) ? $item->ques_question : '' ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <?= str_replace('{{X}}', $index, __('Answer N°{{X}}: ')) ?>
            </th>
            <td>
                <textarea name="question[<?= $index ?>][ques_answer]"><?= !empty($item->ques_answer) ? $item->ques_answer : '' ?></textarea>
            </td>
        </tr>
    </table>
</div>