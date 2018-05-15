<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 3/8/18
 * Time: 4:06 PM
 */
namespace App\Validator;
use Zend\Validator;

class LoginFieldsValidator extends Validator\AbstractValidator
{
    const FIELDUSER_EMPTY = 'user_empty';
    const FIELDPASSWORD_EMPTY = 'password_empty';
    const FIELDUSER_AND_PASSWORD_EMPTY = 'user_and_password_empty';
    const FIELDEUSERORPASSWORD_INVALID = 'user_or_password_invalid';

    protected $messageTemplates = array(
        self::FIELDUSER_EMPTY => "O Usuário é obrigatório.",
        self::FIELDPASSWORD_EMPTY => "A Senha é obrigatória.",
        self::FIELDUSER_AND_PASSWORD_EMPTY => "Usuário e Senha vazios.",
        self::FIELDEUSERORPASSWORD_INVALID => "Usuário ou Senha inválidos"
    );

    public function isValid($value) {


        //both empty
        if($value["user"]=='' && $value["password"]==''){
            $this->error(self::FIELDUSER_AND_PASSWORD_EMPTY);
            return false;
        }

        //email empty
        if($value['user']==''){
            $this->error(self::FIELDUSER_EMPTY);
            return false;
        }
        //pass empty
        if($value['password']==''){
            $this->error(self::FIELDPASSWORD_EMPTY);
            return false;
        }

        return true;
    }
}