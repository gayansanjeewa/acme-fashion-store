<?php


namespace Domain\Query;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class GetClothesQuery
{
    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $limit;

    /**
     * @param int $page
     * @param int $limit
     */
    public function __construct(int $page, int $limit = 10)
    {

        $this->page = $page;
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}
