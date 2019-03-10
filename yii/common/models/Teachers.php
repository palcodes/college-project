<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $t_id
 * @property string $t_name
 * @property string $dob
 * @property string $gender
 * @property string $department
 * @property string $education
 * @property string $subject
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t_name', 'dob', 'gender', 'department', 'education', 'subject'], 'required'],
            [['dob'], 'safe'],
            [['t_name', 'department', 'education', 'subject'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'department' => 'Department',
            'education' => 'Education',
            'subject' => 'Subject',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeachersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeachersQuery(get_called_class());
    }
}
