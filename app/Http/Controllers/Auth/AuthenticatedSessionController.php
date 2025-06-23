<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Get the authenticated user
        $user = Auth::user();

        // Check if user came from buy-now process
        $intendedFromBuyNow = session('buy_now_redirect', false);

        if ($intendedFromBuyNow) {
            // Clear the session flag
            session()->forget('buy_now_redirect');

            // Redirect to checkout for regular users
            if (!$this->isAdmin($user)) {
                return redirect()->route('checkout');
            }
        }

        // Check if user is admin
        if ($this->isAdmin($user)) {
            return redirect()->route('admin.dashboard');
        }

        // For regular users, check if they came from buy-now
        if ($intendedFromBuyNow) {
            return redirect()->route('checkout');
        }

        // Default redirect
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Check if user is admin
     */
    private function isAdmin($user): bool
    {
        // Adjust this condition based on your admin identification logic
        return $user->role === 'admin' ||
            $user->email === 'admin@example.com' ||
            $user->is_admin === true;
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/welcome');
    }
}
