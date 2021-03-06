<?php

namespace app\models\forms;

use Yii;
use app\models\User;

class PasswordResetRequestForm extends \yii\base\Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\app\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => Yii::t('app', 'There is no user with such email')
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return (new User())->attributeLabels();
    }

    /**
     * Sends an email with a link, for resetting the password
     *
     * @return boolean
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findByEmail($this->email);
        if ($user) {
            if (!User::isTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save(false)) {
                return Yii::$app->notify->sendMessage(
                    $this->email,
                    Yii::t('app', 'Password Reset'),
                    'passwordResetToken',
                    ['user' => $user]
                );
            } // @codeCoverageIgnore
        } // @codeCoverageIgnore

        return false;
    }
}
