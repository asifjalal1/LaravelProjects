<?php

namespace App\Providers;

use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot():void
    {
        // define the 'whereLike' macro
        // Builder::macro('whereLike', function ($attributes, string $searchTerm) {
        //     $this->where(function (Builder $query) use ($attributes, $searchTerm) {
        //         foreach (Arr::wrap($attributes) as $key => $attribute) {
        //             $query->when(
        //                 // check it the attribute is not an expression and contains a dot (indicating a related model)
        //                 !($attribute instanceof Expression) && str_contains((string) $attribute, '.'),
        //                 function (Builder $query) use ($attribute, $searchTerm){
        //                     // split the attribute into relation and related attribute
        //                     [$relation, $relatedAttribute] = explode('.', (string) $attribute);
        
        //                     // Perform a  'Like' search on a related model's attribute
        //                     $query->orWhereHas($relation, function (Builder $query) use ($relatedAttribute, $searchTerm){
        //                         $query->where($relatedAttribute, 'LIKE', "%{$searchTerm}%");
        //                     });
        //                 },
        //                 function(Builder $query) use ($attribute, $searchTerm){
        //                     // perform a 'LIKE' search on the current model's attribute
        //                     // also attribute can be an expression
        //                     $query->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
        //                 }
        //             );
        //         }
        //     });
        //     return $this;
        // });
    }
}

/*
example of usage

Post::query()->whereLike([

    // search in current model attributes
    'title',
    'description',

    // search in related model attributes
    'user.name',
    'user.email',

    // search in the formatted attribute
    DB::raw('DATE_FORMAT(created_at, "%d/%m/%y")'),

    // search in the concatenated attributes
    DB::raw('CONCAT(user.first_name," ", user.last_name)'),
], $request()->search)
->with('user')->get();

*/