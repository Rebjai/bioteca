<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Catalogs\Assistant;
use App\Models\Catalogs\BioFamily;
use App\Models\Catalogs\BioGender;
use App\Models\Catalogs\BioOrder;
use App\Models\Catalogs\BioSpecies;
use App\Models\Catalogs\Collector;
use App\Models\Location\Location;
use App\Models\Location\Municipality;
use App\Models\Location\State;
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

        //catalogs policy
        Gate::policy(BioSpecies::class, CatalogsPolicy::class);
        Gate::policy(BioGender::class, CatalogsPolicy::class);
        Gate::policy(BioFamily::class, CatalogsPolicy::class);
        Gate::policy(BioOrder::class, CatalogsPolicy::class);
        Gate::policy(Assistant::class, CatalogsPolicy::class);
        Gate::policy(Collector::class, CatalogsPolicy::class);
        Gate::policy(Location::class, CatalogsPolicy::class);
        Gate::policy(Municipality::class, CatalogsPolicy::class);
        Gate::policy(State::class, CatalogsPolicy::class);
    }
}
