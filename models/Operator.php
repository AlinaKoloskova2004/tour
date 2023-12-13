<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operator".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $age
 * @property string $phone
 *
 * @property Tour[] $tours
 */
class Operator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'patronymic', 'age', 'phone'], 'required'],
            [['surname', 'name', 'patronymic'], 'string', 'max' => 50],
            [['age'], 'string', 'max' => 10],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'surname' => Yii::t('app', 'Фамилия'),
            'name' => Yii::t('app', 'Имя'),
            'patronymic' => Yii::t('app', 'Отчество'),
            'age' => Yii::t('app', 'Возраст'),
            'phone' => Yii::t('app', 'Телефон'),
        ];
    }

    /**
     * Gets query for [[Tours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tour::class, ['id_operator' => 'id']);
    }
}
