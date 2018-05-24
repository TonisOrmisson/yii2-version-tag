<?php
namespace tonisormisson\versiontag;


use yii\base\Widget;

class VersionTag extends Widget
{
    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $model = new Version();
        $tooltip = "";

        if(!empty($model->commit)) {
            foreach ($model->commit as $row) {
                $tooltip .= $row . PHP_EOL;
            }
        }

        return $this->render('tag', [
            'widget' => $this,
            'model' => $model,
            'tooltip' => $tooltip,
        ]);
    }
}