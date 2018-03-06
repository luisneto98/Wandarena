<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 05/02/18
 * Time: 10:53
 */

namespace App\Mapper\Repository;

use App\Mapper\Arena;
use Doctrine\ODM\MongoDB\DocumentRepository;
use Doctrine\ODM\MongoDB\PersistentCollection;

class ArenaRepository extends DocumentRepository
{


    /**
     * @param $id
     * @return array
     */
    public function getArenaWithId($id) {
        return $this->dm->getRepository(Arena::class)->findOneBy(['id' => $id]);
    }
}