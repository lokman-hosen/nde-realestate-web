<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Notifications\SendUserCredential;
use App\Services\DepartmentService;
use App\Services\UserGroupService;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{
    private string $redirectUrl;
    const moduleDirectory = 'admin.user.';
    public function __construct(
        protected UserService $userService,
    )
    {
         $this->middleware('auth');
         //$this->redirectUrl = 'admin/users';
    }
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function profile():view
    {
        $data = [
            'pageTitle' => 'Profile',
            'user' => Auth::user(),
        ];
        return view(self::moduleDirectory.'profile', $data);
    }

    public function profileUpdate(UpdateProfileRequest $request): RedirectResponse
    {
        $user = $this->userService->updateProfile($request);
        if ($user) {
            $request->session()->flash('success', setMessage('update', 'Profile'));
        } else {
            $request->session()->flash('error', setMessage('update.error', 'Profile'));
        }
        return to_route('admin.users.profile');
    }



    public function changePassword(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $request->validate([
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Your provided current password does not match');
                    }
                }
            ],
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $updatePassword = $user->update([
                'password' => Hash::make($request->password)
            ]);

            if ($updatePassword){
                $request->session()->flash('success', 'Password changed');
                Auth::logout();
                return redirect()->route('login');
            }else{
                $request->session()->flash('error', 'Password does not changed. Please try again');
                return redirect()->route('admin.profile');
            }

        } else {
            $request->session()->flash('error', 'Current Password does not match');
            return redirect()->route('admin.profile');
        }
    }
}
