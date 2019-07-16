<?php
/** @var \tonisormisson\versiontag\Version $model */
/** @var string $tooltip */
/** @var string $tooltipLocation */
/** @var bool $showTooltip */
?>

<span id="version-tag">
    <?php if ($showTooltip): ?>
        <span class="label label-default" data-toggle="tooltip" title="<?=$tooltip?>" data-placement="<?=$tooltipLocation?>"><?= $model->tag?></span>
    <?php else: ?>
        <span class="label label-default" ><?= $model->tag?></span>
    <?php endif; ?>
</span>
