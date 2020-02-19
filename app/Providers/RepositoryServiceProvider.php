<?php


namespace App\Providers;

use App\Repository\ClotheRepository;
use App\Repository\UserRepository;
use Domain\Repository\ClotheRepositoryInterface;
use Domain\Repository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

/**
 * @author Gayan Sanjeewa <iamgayan@gmail.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ClotheRepositoryInterface::class, ClotheRepository::class);
    }
}
