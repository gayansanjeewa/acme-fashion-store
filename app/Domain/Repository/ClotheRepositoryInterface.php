<?php


namespace Domain\Repository;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
interface ClotheRepositoryInterface
{

    /**
     * @param int $page
     * @param int $limit
     * @return  /Illuminate\Database\Eloquent\Collection
     */
    public function find(int $page, int $limit);
}
