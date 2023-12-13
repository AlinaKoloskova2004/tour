<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property string $date
 * @property int $viewed
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date', 'viewed'], 'required'],
            [['date'], 'safe'],
            [['viewed'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Заголовок'),
            'content' => Yii::t('app', 'Контент'),
            'image' => Yii::t('app', 'Изображение'),
            'date' => Yii::t('app', 'Дата'),
            'viewed' => Yii::t('app', 'Просмотры'),
        ];
    }
}
