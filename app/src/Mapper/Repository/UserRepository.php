<?php

namespace App\Mapper\Repository;


use App\Mapper\User;
use Doctrine\ODM\MongoDB\DocumentRepository;
use Doctrine\ODM\MongoDB\PersistentCollection;

class UserRepository extends DocumentRepository
{

    /**
     * @param string $username
     * @param string $password
     * @return PersistentCollection\
     */
    public function getUserWithUsernamePassword(string $username, string $password) {
        return $this->dm->getRepository(User::class)->findBy(['username' => $username, 'password' => $password]);
    }
    /**
     * @param string $username
     * @param string $password
     * @return PersistentCollection\
     */
    public function getUserWithUsername(string $username) {
        return $this->dm->getRepository(User::class)->findBy(['username' => $username]);
    }

}
