<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "more_biometrics".
 *
 * @property integer $id
 * @property integer $user_index
 * @property string $diabete1
 * @property string $diabete2
 * @property string $ipercolesterolemia
 * @property string $ipertrigliceridemia
 * @property string $ipertensione_arteriosa
 * @property string $sindrome_metabolica
 * @property string $epatite
 * @property string $pancreatite
 * @property string $morbo_di_Crohn
 * @property string $colite
 * @property string $gastrite
 * @property string $diverticolite
 * @property string $is_pregnant
 * @property string $more_lattosio
 * @property string $more_glutine_o_celiaco
 * @property string $altro
 */
class MoreBiometrics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'more_biometrics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_index'], 'required'],
            [['user_index'], 'integer'],
            [['diabete1', 'diabete2', 'ipercolesterolemia', 'ipertrigliceridemia', 'ipertensione_arteriosa', 'sindrome_metabolica', 'epatite', 'pancreatite', 'morbo_di_Crohn', 'colite', 'gastrite', 'diverticolite', 'is_pregnant', 'more_lattosio', 'more_glutine_o_celiaco', 'altro'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_index' => 'User Index',
            'diabete1' => 'Diabete1',
            'diabete2' => 'Diabete2',
            'ipercolesterolemia' => 'Ipercolesterolemia',
            'ipertrigliceridemia' => 'Ipertrigliceridemia',
            'ipertensione_arteriosa' => 'Ipertensione Arteriosa',
            'sindrome_metabolica' => 'Sindrome Metabolica',
            'epatite' => 'Epatite',
            'pancreatite' => 'Pancreatite',
            'morbo_di_Crohn' => 'Morbo Di  Crohn',
            'colite' => 'Colite',
            'gastrite' => 'Gastrite',
            'diverticolite' => 'Diverticolite',
            'is_pregnant' => 'Is Pregnant',
            'more_lattosio' => 'More Lattosio',
            'more_glutine_o_celiaco' => 'More Glutine O Celiaco',
            'altro' => 'Altro',
        ];
    }
}