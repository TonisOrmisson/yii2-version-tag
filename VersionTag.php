<?php
namespace tonisormisson\versiontag;


use yii\base\Widget;
use tonisormisson\version\Version;

class VersionTag extends Widget
{
    public $path;

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
        ]);
    }
}