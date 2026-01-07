<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'surname' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            //'zone' => 'required|string|max:255',
            'playing_role' => 'required|string|max:255',
            'batting_handedness' => 'required|string|max:255',
            'preferred_bowling_style' => 'required|string|max:255',
            'preferred_batting_order' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
           'payment_screenshot' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
        ]);
echo '<pre>'; print_r($validated); echo '</pre>'; exit;
        // Handle file upload
        if ($request->hasFile('payment_screenshot')) {
            $path = $request->file('payment_screenshot')->store('payment_screenshots', 'public');
            $validated['payment_screenshot'] = $path;
        } else {
            // This should not happen due to validation, but just in case
            $validated['payment_screenshot'] = null;
        }

        $user = User::create([
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'] ?? null,
            'surname' => $validated['surname'],
            'mobile_number' => $validated['mobile_number'],
            'date_of_birth' => $validated['date_of_birth'],
            'district' => $validated['district'],
            'city' => $validated['city'],
            'zone' => 'Test',
            'playing_role' => $validated['playing_role'],
            'batting_handedness' => $validated['batting_handedness'],
            'preferred_bowling_style' => $validated['preferred_bowling_style'],
            'preferred_batting_order' => $validated['preferred_batting_order'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'payment_screenshot' => $validated['payment_screenshot'],
        ])->assignRole('user');

        // Send registration confirmation email
        Mail::raw('Thank you for registering with us. Your registration was successful.', function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Registration Successful');
        });

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
