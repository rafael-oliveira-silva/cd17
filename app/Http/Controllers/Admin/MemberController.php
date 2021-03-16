<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = User::orderBy('name')->paginate(10);

        return view('admin.members.index', [
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'password_confirmation',
            'whatsapp',
            'nickname',
            'level',
            'beasts', 
            'giant', 
            'dragon', 
            'necro', 
            'iron', 
            'crypt', 
            'toan', 
            'toah', 
            'arena', 
            'rta', 
            'special_league',
        ]);

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'unique:users', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'whatsapp' => ['required'],
            'nickname' => ['required', 'string', 'max:20'],
            'level' => ['required'],
            'beasts' => ['required', 'string'],
            'giant' => ['required', 'string'],
            'dragon' => ['required', 'string'],
            'necro' => ['required', 'string'],
            'iron' => ['required', 'string'],
            'crypt' => ['required', 'string'],
            'toan' => ['required', 'max:3'], 
            'toah' => ['required', 'max:3'], 
            'arena' => ['required', 'string'],
            'rta' => ['required', 'string'],
            'special_league' => ['required', 'string'],
        ]);

        if($validator->fails()){
            return redirect()->route('members.create')
            ->withErrors($validator)
            ->withInput();
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'whatsapp' => $data['whatsapp'],
            'nickname' => $data['nickname'],
            'level' => $data['level'],
            'beasts' => $data['beasts'],
            'giant' => $data['giant'],
            'dragon' => $data['dragon'],
            'necro' => $data['necro'],
            'iron' => $data['iron'],
            'crypt' => $data['crypt'],
            'toan' => $data['toan'],
            'toah' => $data['toah'],
            'arena' => $data['arena'],
            'rta' => $data['rta'],
            'special_league' => $data['special_league'],
        ]);

        return redirect()->route('members.index');
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
        $member = User::find($id);
        
        if($member){
            return view('admin.members.edit', [
                'member' => $member
            ]);
        }

        return redirect()->route('admin.members.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = User::find($id);

        if($member){

            $data = $request->only([
                'name',
                'email',
                'whatsapp',
                'nickname',
                'level',
                'beasts', 
                'giant', 
                'dragon', 
                'necro', 
                'iron', 
                'crypt', 
                'toan', 
                'toah', 
                'arena', 
                'rta', 
                'special_league',
            ]);

            $validator = Validator::make($data, [
                'name' => $data['name'],
                'email' => $data['email'],
                'whatsapp' => $data['whatsapp'],
                'nickname' => $data['nickname'],
                'level' => $data['level'],
                'beasts' => $data['beasts'],
                'giant' => $data['giant'],
                'dragon' => $data['dragon'],
                'necro' => $data['necro'],
                'iron' => $data['iron'],
                'crypt' => $data['crypt'],
                'toan' => $data['toan'],
                'toah' => $data['toah'],
                'arena' => $data['arena'],
                'rta' => $data['rta'],
                'special_league' => $data['special_league'],
            ], [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'whatsapp' => ['required'],
                'nickname' => ['required', 'string', 'max:20'],
                'level' => ['required'],
                'beasts' => ['required', 'string'],
                'giant' => ['required', 'string'],
                'dragon' => ['required', 'string'],
                'necro' => ['required', 'string'],
                'iron' => ['required', 'string'],
                'crypt' => ['required', 'string'],
                'toan' => ['required', 'max:3'], 
                'toah' => ['required', 'max:3'], 
                'arena' => ['required', 'string'],
                'rta' => ['required', 'string'],
                'special_league' => ['required', 'string'],
            ]);

            if($validator->fails()){
                return redirect()->route('members.edit', [
                    'member' => $id
                ])->withErrors($validator);
            }

            // 1 - Alteração do nome
            // 2 - Alteração do e-mail
            // 2.1 - Verificar se o r-mail foi alterado
            // 2.2 - Verifica se o novo e-mail já existe
            // 2.3 - Se não existir, o e-mail é alterado
            // 3 - Alteração da senha
            // 3.1 - Verifica se a confirmação de senha está OK
            // 3.2 - Altera a senha

            //$member->save();
        }

        return redirect()->route('admin.members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}