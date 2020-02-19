<?php


namespace Domain\Query\Handlers;


use Domain\Model\Clothe;
use Domain\Query\GetClothesQuery;
use Domain\Query\ViewModel\Clothe as ClotheViewModel;
use Domain\Repository\ClotheRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
final class GetClothesQueryHandler
{
    /**
     * @var ClotheRepositoryInterface
     */
    private $clotheRepository;

    /**
     * @param ClotheRepositoryInterface $clotheRepository
     */
    public function __construct(ClotheRepositoryInterface $clotheRepository)
    {
        $this->clotheRepository = $clotheRepository;
    }

    /**
     * @param GetClothesQuery $query
     * @return ClotheViewModel[]|array
     */
    public function __invoke($query)
    {

        /** @var Collection $clothes */
        $clothes = $this->clotheRepository->find(($query->getPage() - 1) * $query->getLimit(), $query->getLimit());

        /** @var ClotheViewModel $clothes */
        $clotheList = $clothes->map(function (Clothe $cloth) {
            $clothViewModel = new ClotheViewModel();
            $clothViewModel->product_id = $cloth->id;
            $clothViewModel->name = $cloth->name;
            $clothViewModel->product_code = $cloth->product_code;
            $clothViewModel->brand_id = $cloth->brand_id;
            $clothViewModel->cost = $cloth->cost;
            $clothViewModel->selling_price = $cloth->selling_price;
            $clothViewModel->color = $cloth->color;
            $clothViewModel->size = $cloth->size;

            return $clothViewModel;
        })->toArray();

        return $clotheList;
    }
}
