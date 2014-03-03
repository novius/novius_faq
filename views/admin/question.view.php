<div class="qa_item" data-qa-index="<?= $index ?>">
    <input type="hidden" name="question[<?= $index ?>][ques_id]" value="<?= !empty($item->ques_id) ? $item->ques_id : 0 ?>" />
    <input type="hidden" name="question[<?= $index ?>][ques_order]" value="<?= !empty($item->ques_order) ? $item->ques_order : $index ?>" />
    <span
        class="faq_icon faq_delete_question"
        data-question="<?= __('Are you sure you want to delete this Q&A?') ?>"
        data-removed="<?= !empty($item->ques_id) ? __('This Q&A will be deleted when the FAQ is saved') : '' ?>"
        >
    </span>
    <span class="faq_icon faq_icon_arrow qa-up-js"></span>
    <span class="faq_icon faq_icon_arrow qa-down-js"></span>
    <table>
        <tr>
            <th>
                <?= __('Q') ?>
            </th>
            <td>
                <input type="text" placeholder="<?= __('You can leave both question and answer empty to delete a Q&A') ?>" name="question[<?= $index ?>][ques_question]" value="<?= !empty($item->ques_question) ? $item->ques_question : '' ?>" />
            </td>
        </tr>
        <tr>
            <th>
                <?= __('A') ?>
            </th>
            <td>
                <textarea name="question[<?= $index ?>][ques_answer]"><?= !empty($item->ques_answer) ? $item->ques_answer : '' ?></textarea>
            </td>
        </tr>
    </table>
</div>