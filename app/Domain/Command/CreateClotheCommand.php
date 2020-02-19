<?php


namespace Domain\Command;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
final class CreateClotheCommand
{

    /**
     * @var array
     */
    private $criteria;

    /**
     * @param array $criteria
     */
    public function __construct(array $criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * @return array
     */
    public function getCriteria(): array
    {
        return $this->criteria;
    }
}
