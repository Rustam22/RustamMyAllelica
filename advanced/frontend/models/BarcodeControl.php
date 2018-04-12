<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 26.01.18
 * Time: 17:50
 */

namespace frontend\models;

use yii\base\Model;


class BarcodeControl extends Model {
    public $barcode;

    /**
     * @inheritdoc
     *
     */

    public function rules()
    {
        return [
            ['barcode', 'required'],
            ['barcode', 'required'],
            [['barcode'], 'string', 'max' => 80, 'min' => 10],
        ];
    }

}