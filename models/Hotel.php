<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $type
 *
 * @property Tour[] $tours
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'type'], 'required'],
            [['price'], 'number'],
            [['name', 'type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * Gets query for [[Tours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tour::class, ['id_hotel' => 'id']);
    }
}
