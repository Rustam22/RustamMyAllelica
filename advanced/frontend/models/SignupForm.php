<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $mobile;
    public $address;
    public $zip_code;
    public $city;
    public $note;
    public $is_active;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            ['first_name', 'trim'],
            ['first_name', 'required', 'message' => 'Il nome deve essere compilato correttamente'],
            ['first_name', 'string', 'min' => 2, 'max' => 255],

            ['last_name', 'trim'],
            ['last_name', 'required', 'message' => 'Il cognome deve essere compilato correttamente'],
            ['first_name', 'string', 'min' => 2, 'max' => 255],

            /*['username', 'trim'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],*/

            ['email', 'trim'],
            ['email', 'required', 'message' => "L'indirizzo email deve essere compilato correttamente"],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Questo indirizzo email è già stato preso.'],

            ['password', 'required', 'message' => "La lunghezza della password deve essere almeno 5"],
            ['password', 'string', 'length' => [5, 150] ],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            ['password_repeat', 'required'],
            ['password_repeat', 'string', 'length' => [5, 150]],

            ['mobile', 'required', 'message' => "Il numero di cellulare deve essere compilato correttamente"],
            ['mobile', 'string', 'length' => [5, 20]],

            ['address', 'required', 'message' => "L'indirizzo deve essere compilato"],
            ['address', 'string', 'length' => [2, 150]],

            ['zip_code', 'required', 'message' => "Il codice postale deve essere compilato"],
            ['zip_code', 'string', 'length' => [5, 20] ],

            ['city', 'required', 'message' => "Il nome della città è richiesto"],
            ['city', 'string', 'max' => 50],

            ['note', 'trim'],
            ['note', 'safe'],
            ['note', 'string', 'max' => 250 ],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->username = $this->email;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->address = $this->address;
        $user->zip_code = $this->zip_code;
        $user->city = $this->city;
        $user->note = $this->note;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->is_active = 1;

        return $user->save() ? $user : null;
    }
}
