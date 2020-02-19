<?php


namespace App\Repository;

use Domain\Model\Brand;
use Domain\Repository\BrandRepositoryInterface;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class BrandRepository implements BrandRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function findAll()
    {
        return Brand::query()->get();
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id)
    {
        return  Brand::query()->find($id);
    }
}
