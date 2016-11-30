<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Services\UserService;
use App\Contracts\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function index(Request $request)
    {
        $data['users'] = $this->users->paginate(10);

        return view('backend.user.index', $data);
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(UserService $service, Request $request)
    {
        $data = $request->all();

        $service->store($data);

        return redirect()->route('backend.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = $this->users->findOrFail($id);

        return view('backend.user.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserService $service, Request $request, $id)
    {
        $user = $this->users->findOrFail($id);

        $data = $request->all();

        $service->update($user, $data);
        return redirect()->route('backend.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserService $service, $id)
    {
        $user = $this->users->findOrFail($id);
        
        try {
            $service->delete($user);
            $message = "Ban da xoa thanh cong";
        } catch (Exception $e) {
            $message = 'Xoa that bai';
        }
       

        return redirect()->route('backend.user.index');
    }
}
