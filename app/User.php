<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NOMBRE_USER', 'EMAIL_USER', 'PASSWORD_USER','ROL_USERS',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Registrar($data)
    {
        $usr=User::create([
            'NOMBRE_USER'=> $data['Nombre'],
            'EMAIL_USER' => $data['Correo'],
            'PASSWORD_USER' =>Hash::make($data['password']),
            'ROL_USERS' => $data['Rol']
        ]);
        $usr->save();
        return $usr;
    }

    public function Iniciodesesion($data)
    {
        $query=User::where('EMAIL_USER',$data['email'])->first();
        if (Hash::check($data['password'],$query->PASSWORD_USER)) {
            $data = array('id' =>$query->ID_USER ,
                        'Nombre' => $query->NOMBRE_USER,
                        'Rol' => $query->ROL_USERS);
            return $data;
        }
    }
}
