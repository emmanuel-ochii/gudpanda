<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    // protected $rootView = 'app'; //Wi-fi commented out this to have multiple rootview

    public function rootView(Request $request): string
    {
        if ($request->user()) {
            if ($request->user()->is_admin) {
                return 'admin';  // Use admin.blade.php for administrators
            } elseif ($request->user()->is_seller) {
                return 'seller';  // Use seller.blade.php for sellers
            } else {
                return 'customer';  // Use customer.blade.php for regular logged-in users
            }
        }

        return 'layouts.frontend';  // Use frontend.blade.php for guests
    }

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            //
        ]);
    }
}
