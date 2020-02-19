<?php


namespace App\Repository;

use Domain\Model\Clothe;
use Domain\Repository\ClotheRepositoryInterface;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class ClotheRepository implements ClotheRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function find(int $page, int $limit)
    {
        return Clothe::query()->offset($page)->limit($limit)->get();
    }

    /**
     * @inheritDoc
     */
    public function create(array $configurations)
    {
        Clothe::query()->insert($configurations);
    }
}
