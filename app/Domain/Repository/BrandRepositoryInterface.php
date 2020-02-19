<?php


namespace Domain\Repository;

use Domain\Model\Brand;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
interface BrandRepositoryInterface
{

    /**
     * @return  /Illuminate\Database\Eloquent\Collection
     */
    public function findAll();

    /**
     * @param int $id
     * @return Brand
     */
    public function findById(int $id);
}
