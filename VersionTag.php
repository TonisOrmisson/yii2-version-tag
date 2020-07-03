<?php
namespace tonisormisson\versiontag;


use yii\base\Widget;
use tonisormisson\version\Version;
use yii\helpers\Html;


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

        if(!empty($model->author)) {
            $tooltip .= "<strong>" . Html::encode($model->author)."</strong><br/>" . PHP_EOL;
        }
        if(!empty($model->time)) {
            $tooltip .= Html::encode($model->time)."<br/>" . PHP_EOL;
        }
        if(!empty($model->subject)) {
            $tooltip .= "<strong>" . Html::encode($model->tag).":</strong><br/>" . PHP_EOL;
            $tooltip .= Html::encode($model->subject) . PHP_EOL;
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
