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

    public function getUserById(int $id):?User
    {
        /*SELECT * FROM users WHERE email = $email*/
        $result = $this->createQuery()
            ->select('*')
            ->where('id = ?')
            ->setParameters([$id])
            ->getResult();
        if($result !== NULL){
            return new User($result);
        }
        return NULL;
    }

    public function insert()
    {
        $this->createQuery()
            ->insertInto('name, email, password, created_at','?,?,?,NOW()')
            ->setParameters([
                '',
                '',
                password_hash('',PASSWORD_ARGON2I,['cost'=>12]) //Cost permet de chiffrer le mot de passe 12 fois
            ])
            ->execute();
        // Rentrer un nouvel utilisateur -> Refresh 1 fois la page login et commentez la ligne 16 AdminController
    }
}