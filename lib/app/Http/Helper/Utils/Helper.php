<?php

namespace App\Http\Helper\Utils;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use App\Http\Helper\Admin\HelperBase;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Aris\LaravelLocalization\Facades\LaravelLocalization;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filter;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use Carbon\Carbon;
use App\Model;

class Helper extends HelperBase
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

    }

    public function getAllRoles()
    {
        try {
            $check = $this->hasAnyRoles(['System Admin']);
            if ($check) {
                $models = Model\Role::class;
            } else {
                $models = Model\Role::where('name', '!=', 'System Admin');
            }

            $roles = QueryBuilder::for($models)
                ->allowedIncludes('permissions')
                ->allowedFilters([
                    AllowedFilter::exact('id'),
                    'name',
                ])
                ->allowedSorts('id', 'name')->get();

            return $roles;

        } catch (\Exception $e) {
            return null;
        }
    }

    public function getUserByRoles($roles = [])
    {
        try {

            $models = Model\MUser::with('roles')
                ->where('is_delete', 0)
                ->whereHas('roles', function ($q) use ($roles) {
                    $q->whereIn('name', $roles);
                });
            $users = QueryBuilder::for($models)
                ->allowedFilters([
                    'name'
                ])
                ->allowedSorts('id', 'name')->get();

            return $users;

        } catch (\Exception $e) {
            return null;
        }
    }

}
