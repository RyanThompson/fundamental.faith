<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Pages\Home::class)->name('home');
Route::get('/thoughts', \App\Http\Pages\Thoughts::class)->name('map');
Route::get('/{slug}/{id}', \App\Http\Pages\Thought::class)->name('thought');

// Wildcard Route
Route::get('/{id}', \App\Http\Pages\Map::class)->name('map');


/*
|--------------------------------------------------------------------------
| Authorization
|--------------------------------------------------------------------------
*/

// Route::get('/login', \App\Http\Pages\Login::class)->name('login');

// Route::get('/logout', function () {

//     auth()->logout();

//     return redirect('/');
// })->name('logout');


/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
*/

// Route::get('/register', \App\Http\Pages\Register::class)->name('register');
// Route::get('/verify', \App\Http\Pages\VerifyEmail::class)->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

//     $request->fulfill();

//     return redirect(RouteServiceProvider::HOME);
// })->middleware(['signed'])->name('verification.verify');

// Route::get('/email/verification-notification', function (Request $request) {

//     auth()->user()->sendEmailVerificationNotification();

//     return redirect()->route('verification.notice', ['status' => 'sent']);
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

/*
|--------------------------------------------------------------------------
| Password Recovery
|--------------------------------------------------------------------------
*/

// Route::get('/forgot-password', \App\Http\Pages\ForgotPassword::class)->name('password.forgot');
// Route::get('/reset-password', \App\Http\Pages\ResetPassword::class)->name('password.reset');

// Route::post('/reset-password', function (Request $request) {

//     $request->validate([
//         'token' => 'required',
//         'email' => 'required|email',
//         'password' => 'required|min:8|confirmed',
//     ]);

//     $status = Password::reset(
//         $request->only('email', 'password', 'password_confirmation', 'token'),
//         function (User $user, string $password) {

//             $user->forceFill([
//                 'password' => Hash::make($password)
//             ])->setRememberToken(Str::random(60));

//             $user->save();

//             event(new PasswordReset($user));
//         }
//     );

//     return $status === Password::PASSWORD_RESET
//         ? redirect()->route('login')->with('status', __($status))
//         : back()->withErrors(['email' => [__($status)]]);
// })->middleware('guest')->name('password.update');
