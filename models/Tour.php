<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $date_depature
 * @property string|null $date_arrival
 * @property string $city_fly
 * @property int $old_number
 * @property int $child_number
 * @property int $day_number
 * @property int $is_hotter
 * @property int $id_country
 * @property int $id_operator
 * @property int $id_type
 * @property int $id_food
 * @property int $id_hotel
 *
 * @property Booking[] $bookings
 * @property Country $country
 * @property Food $food
 * @property Hotel $hotel
 * @property Operator $operator
 * @property Type $type
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'date_depature', 'city_fly', 'old_number', 'child_number', 'day_number', 'id_country', 'id_operator', 'id_type', 'id_food', 'id_hotel'], 'required'],
            [['price'], 'number'],
            [['date_depature', 'date_arrival'], 'safe'],
            [['old_number', 'child_number', 'day_number', 'is_hotter', 'id_country', 'id_operator', 'id_type', 'id_food', 'id_hotel'], 'integer'],
            [['name', 'city_fly'], 'string', 'max' => 50],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::class, 'targetAttribute' => ['id_type' => 'id']],
            [['id_food'], 'exist', 'skipOnError' => true, 'targetClass' => Food::class, 'targetAttribute' => ['id_food' => 'id']],
            [['id_operator'], 'exist', 'skipOnError' => true, 'targetClass' => Operator::class, 'targetAttribute' => ['id_operator' => 'id']],
            [['id_hotel'], 'exist', 'skipOnError' => true, 'targetClass' => Hotel::class, 'targetAttribute' => ['id_hotel' => 'id']],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => Country::class, 'targetAttribute' => ['id_country' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Название'),
            'price' => Yii::t('app', 'Цена'),
            'date_depature' => Yii::t('app', 'Дата отправления'),
            'date_arrival' => Yii::t('app', 'Дата прибытия'),
            'city_fly' => Yii::t('app', 'Город отправления'),
            'old_number' => Yii::t('app', 'Кол-во взрослых'),
            'child_number' => Yii::t('app', 'Кол-во детей'),
            'day_number' => Yii::t('app', 'Кол-во дней'),
            'is_hotter' => Yii::t('app', 'Является ли горячим предложением'),
            'id_country' => Yii::t('app', 'Страна'),
            'id_operator' => Yii::t('app', 'Оператор'),
            'id_type' => Yii::t('app', 'Тип'),
            'id_food' => Yii::t('app', 'Питание'),
            'id_hotel' => Yii::t('app', 'Отель'),
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::class, ['id_tour' => 'id']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::class, ['id' => 'id_country']);
    }

    /**
     * Gets query for [[Food]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFood()
    {
        return $this->hasOne(Food::class, ['id' => 'id_food']);
    }

    /**
     * Gets query for [[Hotel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHotel()
    {
        return $this->hasOne(Hotel::class, ['id' => 'id_hotel']);
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(Operator::class, ['id' => 'id_operator']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'id_type']);
    }
}
