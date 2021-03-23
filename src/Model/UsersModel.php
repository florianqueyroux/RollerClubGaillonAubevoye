<?php


namespace App\Model;


use App\Entity\User;
use NeutronStars\Neutrino\Core\Model;

class UsersModel extends Model
{
    public function __construct()
    {
        parent::__construct('users');
    }

    public function getUserByEmail(string $email):?User
    {
        /*SELECT * FROM users WHERE email = $email*/
        $result = $this->createQuery()
            ->select('*')
            ->where('email = ?')
            ->setParameters([$email])
            ->getResult();
        if($result !== NULL){
            return new User($result);
        }
        return NULL;
    }
}