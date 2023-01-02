<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Catalogs\Assistant;
use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioGender;
use App\Models\Catalogs\BioOrder;
use App\Models\Catalogs\BioSpecies;
use App\Models\Catalogs\Collector;
use App\Policies\CatalogsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::policy(BioSpecies::class, CatalogsPolicy::class);
        Gate::policy(BioGender::class, CatalogsPolicy::class);
        Gate::policy(BioFamily::class, CatalogsPolicy::class);
        Gate::policy(BioOrder::class, CatalogsPolicy::class);
        Gate::policy(Assistant::class, CatalogsPolicy::class);
        Gate::policy(Collector::class, CatalogsPolicy::class);
    }
}
