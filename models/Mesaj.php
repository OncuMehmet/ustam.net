<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mesaj".
 *
 * @property int $ıd
 * @property string $gonderen
 * @property string $baslik
 * @property string $icerik
 * @property string $tarih
 * @property string $dosyaadi
 */
class Mesaj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mesaj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gonderen', 'baslik', 'icerik', 'dosyaadi'], 'required'],
            [['icerik'], 'string'],
            [['tarih'], 'safe'],
            [['gonderen', 'baslik', 'dosyaadi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id'),
            'gonderen' => Yii::t('app', 'Gonderen'),
            'baslik' => Yii::t('app', 'Baslik'),
            'icerik' => Yii::t('app', 'Icerik'),
            'tarih' => Yii::t('app', 'Tarih'),
            'dosyaadi' => Yii::t('app', 'Dosyaadi'),
        ];
    }
}
