<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\ScholarshipRepositoryInterface;
use App\Repositories\ScholarshipRepository;
use App\Repositories\Interfaces\ExamRepositoryInterface;
use App\Repositories\ExamRepository;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\QuestionRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ScholarshipRepositoryInterface::class, ScholarshipRepository::class);
        $this->app->bind(ExamRepositoryInterface::class, ExamRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
