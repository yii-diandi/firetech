<?php
<<<<<<< HEAD
namespace frontend\models;
=======

namespace backend\models;
>>>>>>> 0f9902b2266d0f23e4e19b628e4d62fad03644dc

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $email;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
<<<<<<< HEAD
            ['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with this email address.'
=======
            [
                'email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => '没有使用此电子邮件地址的用户。'
>>>>>>> 0f9902b2266d0f23e4e19b628e4d62fad03644dc
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return bool whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if (!$user) {
            return false;
        }
<<<<<<< HEAD
        
=======

>>>>>>> 0f9902b2266d0f23e4e19b628e4d62fad03644dc
        if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
        }

<<<<<<< HEAD
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . Yii::$app->name)
            ->send();
=======
        $template = ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'];
        $subject  = 'Password reset for ' . Yii::$app->name;


        return Yii::$app->service->commonEmailService->send($user, $this->email, $subject, $template);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => '邮箱',
        ];
>>>>>>> 0f9902b2266d0f23e4e19b628e4d62fad03644dc
    }
}
