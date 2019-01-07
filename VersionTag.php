<?php
namespace tonisormisson\versiontag;


use yii\base\Widget;
use tonisormisson\version\Version;

class VersionTag extends Widget
{

    const LOCATION_TOP = 'top';
    const LOCATION_LEFT = 'left';
    const LOCATION_RIGHT = 'right';
    const LOCATION_BOTTOM = 'bottom';

    /** @var string */
    public $path;

    /** @var string  */
    public $tooltipLocation = 'top';

    /** @var bool  */
    public $showToolTip = true;


    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $model = new Version($this->path);
        $tooltip = "";

        if(!empty($model->commit)) {
            $tooltip .= $model->commit . PHP_EOL;
        }

        return $this->render('tag', [
            'widget' => $this,
            'model' => $model,
            'tooltip' => $tooltip,
            'tooltipLocation' => $this->tooltipLocation,
            'showTooltip' => $this->showToolTip,
        ]);
    }
}