<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->get();
        return view('backend.users.index', compact('data'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name');
        return view('backend.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $password = Hash::make($request->password);
        $user = User::create([
            'nom' =>  $request->nom,
            'prenom' =>  $request->prenom,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => $password
        ]);
        $user->assignRole($request->input('roles'));

        Flashy::success('Utilisateur créé avec succès');
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name');
        $userRole = $user->roles->pluck('name');
        return view('backend.users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $input = $request->all();

        if (!empty($input['password']))
        {
            $input['password'] = Hash::make($input['password']);
        } else {

            $input = $request->except('password');
        }

        $user = User::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        Flashy::success('Utilisateur Modifié avec succès');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        Flashy::success('Utilisateur supprimé avec succès');
        return redirect(route('users.index'));
    }

    public function alert(User $user)
    {
        return view('backend.users.destroy', ['user' => $user]);
    }
}
