<?php

use Illuminate\Database\Seeder;
use LaraPok\Role;
use LaraPok\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //query para obtener la informacion que cumpla con los datos.
         
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();
        //Hasta aqui obtenemos los dos roles y ahora solo basta asignarselo a nuestro usuario
            
        //Creamos los usuarios.
        //Les asignamos sus correspondientes atributos.
        $user = new User();
        $user->name = "User";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('query');
        $user->save();

        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('query');
        $user->save();

        $user->roles()->attach($role_admin);
    }
}
