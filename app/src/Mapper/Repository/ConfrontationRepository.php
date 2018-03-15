<?php
/**
 * Created by PhpStorm.
 * User: luisneto98
 * Date: 29/01/18
 * Time: 18:28
 */

namespace App\Mapper\Repository;

use App\Mapper\Confrontation;
use Doctrine\ODM\MongoDB\DocumentRepository;


class ConfrontationRepository extends DocumentRepository
{

    /**
     * @param $id
     * @return mixed
     */
    public function getConfrontationWithId($id) {
        return $this->dm->getRepository(Confrontation::class)->findOneBy(['id' => $id]);
    }

}