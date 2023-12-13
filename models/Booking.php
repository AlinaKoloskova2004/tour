<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id
 * @property int $user_id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $age
 * @property string $address
 * @property string $phone
 * @property int $old_number
 * @property int $child_number
 * @property int|null $score
 * @property int $id_tour
 * @property int|null $id_discount

 *
 * @property Discount $discount
 * @property Tour $tour
 * @property User $user
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname','name','patronymic','phone','address','age','old_number','child_number','id_tour',], 'required'],
            [['surname','name','patronymic','phone','address','age'], 'string'],
            ['user_id', 'default', 'value'=>Yii::$app->user->getId()],
        ];


    }

    /**
     * {@inheritdoc}
     */
    public function saveBooking()
    {

        $booking = new Booking();
        $booking->surname = $this->surname;
        $booking->name = $this->name;
        $booking->patronymic = $this->patronymic;
        $booking->age = $this->age;
        $booking->address = $this->address;
        $booking->phone = $this->phone;
        $booking->old_number = $this->old_number;
        $booking->child_number = $this->child_number;
        $booking->id_tour = $this->id_tour;
        $booking->save();
        return $booking;
    }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'Id Пользователя'),
            'surname' => Yii::t('app', 'Фамилия'),
            'name' => Yii::t('app', 'Имя'),
            'patronymic' => Yii::t('app', 'Отчество'),
            'age' => Yii::t('app', 'Возраст'),
            'address' => Yii::t('app', 'Адрес'),
            'phone' => Yii::t('app', 'Телефон'),
            'old_number' => Yii::t('app', 'Кол-во взрослых'),
            'child_number' => Yii::t('app', 'Кол-во детей'),
            'score' => Yii::t('app', 'Счёт'),
            'id_tour' => Yii::t('app', 'Название тура'),
            'id_discount' => Yii::t('app', 'Скидка'),
            'status' => Yii::t('app', 'Статус'),
        ];
    }

    /**
     * Gets query for [[Discount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiscount()
    {
        return $this->hasOne(Discount::class, ['id' => 'id_discount']);
    }

    /**
     * Gets query for [[Tour]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::class, ['id' => 'id_tour']);
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
