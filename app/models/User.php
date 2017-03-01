<?php

/**
 * Description of User
 *
 * @author Isaac
 */

class User
{
    protected $email;
    protected $password;

    public function set_variable($variable, $value) {
        $this->$variable = $value;
    }

    public function checkUser()
    {
        $hashedPass = $this->getHash();

        if (!empty(password_verify($this->password, $hashedPass))) {
            $db = new Intranet\Core\Db();
            $db->query('SELECT * FROM user WHERE user_email = :email and user_password = :password and user_active = 1');
            $sql_params = array(
                array('var' => ':email', 'value' => $this->email, 'type' => \PDO::PARAM_STR),
                array('var' => ':password', 'value' => $hashedPass, 'type' => \PDO::PARAM_STR)
            );
            $db->bind($sql_params);
            $row = $db->resultset();
            if ($db->rowCount() > 0){
                return $row[0];
            }else{
                return false;
            }
        } else {
            return false;
        }

    }

    private function getHash()
    {
        $db = new Intranet\Core\Db();
        $db->query('SELECT user_password FROM user WHERE user_email = :email and user_active = 1');
        $sql_params = array(
            array('var' => ':email', 'value' => $this->email, 'type' => \PDO::PARAM_STR)
        );
        $db->bind($sql_params);
        $row = $db->resultset();
        if ($db->rowCount() > 0){
            return $row[0]['user_password'];
        }else{
            return false;
        }
    }

    public function changeUserLang($lang, $user_id)
    {
        $db = new Intranet\Core\Db();
        $db->query('UPDATE user SET user_lang = :lang WHERE id_user = :user_id');
        $sql_params = array(
            array('var' => ':lang', 'value' => $lang, 'type' => \PDO::PARAM_STR),
            array('var' => ':user_id', 'value' => $user_id, 'type' => \PDO::PARAM_INT)
        );
        $db->bind($sql_params);
        $db->execute();
    }

    public function getRoles()
    {
        $db = new Intranet\Core\Db();
        $db->query('SELECT * FROM rol ORDER BY rol_name_es ASC');
        $sql_params = null;
        $db->bind($sql_params);

        $row = $db->resultset();
        if ($db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function saveUser($params)
    {
        $db = new Intranet\Core\Db();
        $db->query('INSERT INTO user (user_email, user_password, user_name, user_surname, user_lang, user_active) VALUES (:email, :password, :name, :surname, :lang, 1)');
        $sql_params = array(
            array('var' => ':email', 'value' => $params['email'], 'type' => \PDO::PARAM_STR),
            array('var' => ':password', 'value' => $params['cryp_password'], 'type' => \PDO::PARAM_STR),
            array('var' => ':name', 'value' => $params['name'], 'type' => \PDO::PARAM_STR),
            array('var' => ':surname', 'value' => $params['surname'], 'type' => \PDO::PARAM_STR),
            array('var' => ':lang', 'value' => $params['idioma'], 'type' => \PDO::PARAM_STR)
        );
        $db->bind($sql_params);
        $db->execute();

        return (!empty($db->lastInsertId()) ? true : false);
    }

}