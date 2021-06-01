<?php
    $randomId = Cake\Utility\Security::randomString(8);
    if (isset($field['raw'])) {
        $string = $field['raw'];
    } else {
        $value = Cake\Utility\Hash::extract($data, $field['path']);
        $string = empty($value[0]) ? '' : $value[0];
    }
    echo sprintf(
        '<div class="json_container_%s"></div>',
        h($randomId)
    );
?>

<script type="text/javascript">
$(document).ready(function() {
    $('.json_container_<?php echo h($randomId);?>').html(syntaxHighlightJson(<?php echo json_encode($string); ?>, 4));
});
</script>
