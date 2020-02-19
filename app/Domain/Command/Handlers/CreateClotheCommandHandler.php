<?php


namespace Domain\Command\Handlers;

use Domain\Command\CreateClotheCommand;
use Domain\Model\Clothe;
use Domain\Repository\BrandRepositoryInterface;
use Domain\Repository\ClotheRepositoryInterface;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
final class CreateClotheCommandHandler
{
    /**
     * @var ClotheRepositoryInterface
     */
    private $clotheRepository;

    /**
     * @var BrandRepositoryInterface
     */
    private $brandRepository;

    /**
     * @param ClotheRepositoryInterface $clotheRepository
     * @param BrandRepositoryInterface $brandRepository
     */
    public function __construct(ClotheRepositoryInterface $clotheRepository, BrandRepositoryInterface $brandRepository)
    {
        $this->clotheRepository = $clotheRepository;
        $this->brandRepository = $brandRepository;
    }

    /**
     * @param CreateClotheCommand $command
     */
    public function __invoke($command)
    {

        $configurations = $command->getCriteria();

        $configurations['selling_price'] = $this->calculateSellingPrice($configurations);
        $configurations['product_code'] = $this->generateProductCode();

        $this->clotheRepository->create($configurations);
    }

    /**
     * @param array $criteria
     * @return mixed
     */
    protected function calculateSellingPrice(array $criteria)
    {
        $brand = $this->brandRepository->findById($criteria['brand_id']);

        if ('Adidas' === $brand->name) {
            return $criteria['cost'] * 1.15;
        }

        if ('Nike' === $brand->name) {
            return ($criteria['cost'] * 1.15) + 100;
        }

        return $criteria['cost'] * 1.1;
    }

    /**
     * @return mixed
     */
    protected function generateProductCode()
    {
        return sprintf('CL-%s', uniqid());
    }
}
