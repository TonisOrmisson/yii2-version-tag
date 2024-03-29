<?php
/** @var \tonisormisson\versiontag\Version $model */
/** @var string $tooltip */
/** @var string $tooltipLocation */
/** @var bool $showTooltip */
?>
<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>

<span id="version-tag">
    <?php if ($showTooltip): ?>
        <span class="label label-default" data-html="true" data-toggle="tooltip" title="<?=$tooltip?>" data-placement="<?=$tooltipLocation?>"><?= $model->tag?></span>
    <?php else: ?>
        <span class="label label-default" ><?= $model->tag?></span>
    <?php endif; ?>
</span>
