<?php

namespace App\Http\Controllers;

use App\Models\Assistant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->paginate(10)->through(
            function (User $item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'role_name' => $item->roleName
                ];
            }
        );
        // dd($users[2]->role);
        return Inertia::render('User/Index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'role' => ['required', 'integer'],
            ]
        );
        $data['password'] = Hash::make('bioteca1234');
        $user = User::create($data);
        if ($user->role_name ==  'Assistant') {
            Assistant::create(['user_id' => $user->id]);
        }
        if ($user->role_name ==  'Admin') {
        }
        return redirect(route('user.edit', $user->id), 303);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Inertia::render('User/Edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user->append('profile');
        return Inertia::render('User/Edit', compact('user'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'role' => ['required', 'integer'],
            ]
        );
        // dd($data);
        if ($data['role'] !== $user->role) {
            if ($data['role'] == 1) {
                Assistant::firstOrCreate(['user_id' => $user->id], ['user_id' => $user->id]);
            }
        }
        $done = $user->update($data);
        $user->refresh();
        // dd($user);
        return redirect(route('user.index'), 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
