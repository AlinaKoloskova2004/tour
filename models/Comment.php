<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property int $text
 * @property int $status
 * @property int $user_id
 *
 * @property User $user
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
            ['user_id', 'default', 'value'=>Yii::$app->user->getId()],
        ];


    }

    public function good()
    {
        $this->status=1;
        return $this->save(false);
    }
    public function verybed()
    {
        $this->status=2;
        return $this->save(false);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Текст'),
            'status' => Yii::t('app', 'Статус'),
            'user_id' => Yii::t('app', 'ID пользователя'),
        ];
    }
    public function saveComment()
    {

        $comment = new Comment();
        $comment->text = $this->text;
        $comment->save();
        return $comment;
    }
    public function getStatus()
    {
        switch ($this->status){
            case 0:return 'Ожидание';
            case 1:return 'Принято';
            case 2:return 'Отклонено';
        }
    }
    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
