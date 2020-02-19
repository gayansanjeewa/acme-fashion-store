<?php


namespace App\Providers;

use App\Repository\UserRepository;
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
    }
}
