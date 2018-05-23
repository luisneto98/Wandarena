<?php

namespace App\AuthAdapters;

use App\Facilitator\App\ContainerFacilitator;
use App\Facilitator\App\JWTFacilitator;
use App\Facilitator\Database\DatabaseFacilitator;
use App\Mapper\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use SlimAuth\AuthAdapterInterface;
use SlimAuth\AuthResponse;

class AuthAdapterUser implements AuthAdapterInterface
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var DocumentManager
     */
    private $databaseConnection;

    /**
     * AuthAdapterUser constructor.
     *
     * @param $username string
     * @param $password string
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->databaseConnection = DatabaseFacilitator::getConnection();
    }

    function authenticate() : AuthResponse
    {
        $ci = ContainerFacilitator::getContainer();

        $arrayUser = $this->databaseConnection->getRepository(User::class)
            ->getUserWithUsernamePassword($this->username, $this->password);
        if (count($arrayUser) == 0) {
            return new AuthResponse(AuthResponse::AUTHRESPONSE_FAILURE, 'User not found');
        }

        $user = $arrayUser[0];
        $user->setQtdLogin($user->getQtdLogin()+1);
        $this->databaseConnection->flush();
        $arraySettings = $ci->get('settings');
        return new AuthResponse(AuthResponse::AUTHRESPONSE_SUCCESS, 'User auth success', $arraySettings['session']['name'], [ 'id' => $user->getId(), 'username' => $user->getUsername(),'admin'=>$user->isAdmin()]);
    }

}
