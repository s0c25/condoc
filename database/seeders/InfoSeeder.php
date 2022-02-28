<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Estado;
use App\Models\Ciudade;
use App\Models\sustanciasToxica;
use App\Models\malFormacione;
use App\Models\Estatu;
use App\Models\Droga;
use App\Models\Frecuencia;
use App\Models\enfermedadCronica;



class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'doctor']);
        $role3 = Role::create(['name' => 'estudiante']);
        Permission::create(['name' => 'new.paciente'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'view.reportes'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'querys'])->syncRoles([$role1, $role2, $role3]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@doctor.test',
            'password' => bcrypt('query'),
        ])->assignRole('admin');

            
        Droga::create([
          'name'=>'Heroina',
        ]);
        Droga::create([
          'name'=>'Marihuana',
        ]);
        Droga::create([
          'name'=>'Opiáceos',
        ]);
        Droga::create([
          'name'=>'Lsd',
        ]);
        Droga::create([
          'name'=>'Cocaina',
        ]);
        Droga::create([
          'name'=>'Extasis',
        ]);
        Droga::create([
          'name'=>'Anfetaminas',
        ]);
        Droga::create([
          'name'=>'Ninguna',
        ]);



        Estatu::create([
          'name'=>'Activo',
        ]);

        Estatu::create([
          'name'=>'Inactivo',
        ]);
        sustanciasToxica::create([
          'name'=>'Plomo',
        ]);

        sustanciasToxica::create([
          'name'=>'Arsénico ',
        ]);

        sustanciasToxica::create([
          'name'=>'Metilmercurio',
        ]);

        sustanciasToxica::create([
          'name'=>'Benceno',
        ]);

        sustanciasToxica::create([
          'name'=>'Asbesto',
        ]);

        sustanciasToxica::create([
          'name'=>'Carbonato de litio',
        ]);

        sustanciasToxica::create([
          'name'=>'Quinina',
        ]);

        sustanciasToxica::create([
          'name'=>'Metilmercurio',
        ]);

        sustanciasToxica::create([
          'name'=>'Cloroquina',
        ]);

        sustanciasToxica::create([
          'name'=>'Metotrexato',
        ]);
        sustanciasToxica::create([
          'name'=>'Aminopterina',
        ]);

        sustanciasToxica::create([
          'name'=>'Trimetadiona',
        ]);

        sustanciasToxica::create([
          'name'=>'Parametadiona',
        ]);

        sustanciasToxica::create([
          'name'=>'Fenobarbital',
        ]);

        sustanciasToxica::create([
          'name'=>'Difenilhidantoina',
        ]);
        
        sustanciasToxica::create([
          'name'=>'Carbamazepinala',
        ]);

        sustanciasToxica::create([
          'name'=>'Ácido valproico',
        ]);

        sustanciasToxica::create([
          'name'=>'Tetraciclinas',
        ]);

        sustanciasToxica::create([
          'name'=>'Kanamicina',
        ]);

        sustanciasToxica::create([
          'name'=>'Estreptomicina',
        ]);

        sustanciasToxica::create([
          'name'=>'Warfarina',
        ]);

        sustanciasToxica::create([
          'name'=>'Dietilestilbestrol',
        ]);

        sustanciasToxica::create([
          'name'=>'Talidomida',
        ]);
        sustanciasToxica::create([
          'name'=>'Ninguna',
        ]);

        malFormacione::create([
          'name'=>'rabdomioma',
        ]);
        malFormacione::create([
          'name'=>'ventrículo izquierdo hipoplásico',
        ]);
        malFormacione::create([
          'name'=>'transposición de grandes vasos',
        ]);
        malFormacione::create([
          'name'=>'canal aurículo ventrícular',
        ]);
        malFormacione::create([
          'name'=>'comunicación interventricular',
        ]);
        malFormacione::create([
          'name'=>'tronco arterial común',
        ]);
        malFormacione::create([
          'name'=>'tetralogía de Fallot',
        ]);
        malFormacione::create([
          'name'=>'foramen oval permeable',
        ]);
        malFormacione::create([
          'name'=>'conducto arterioso persistente',
        ]);
        malFormacione::create([
          'name'=>'anomalía de Ebstein',
        ]);
        malFormacione::create([
          'name'=>'estrechamiento aórtico',
        ]);
        malFormacione::create([
          'name'=>'comunicación interauricular',
        ]);
        malFormacione::create([
          'name'=>'estenosis valvular aórtica',
        ]);

        malFormacione::create([
          'name'=>'anencefalia',
        ]);
        malFormacione::create([
          'name'=>'agenesia del cuerpo valioso',
        ]);
        malFormacione::create([
          'name'=>'agenesia del vermis cerebeloso',
        ]);
        malFormacione::create([
          'name'=>'microcefalia',
        ]);
        malFormacione::create([
          'name'=>'macrocefalia',
        ]);
        malFormacione::create([
          'name'=>'hidrocefalia',
        ]);
        malFormacione::create([
          'name'=>'craneorraquisquisis',
        ]);
        malFormacione::create([
          'name'=>'raquisquisis',
        ]);
        malFormacione::create([
          'name'=>'esquizoencefalia',
        ]);
        malFormacione::create([
          'name'=>'holoprosencefalia',
        ]);
        malFormacione::create([
          'name'=>'meningocele',
        ]);
        malFormacione::create([
          'name'=>'mielomeningocele',
        ]);
        malFormacione::create([
          'name'=>'mielocele',
        ]);
        malFormacione::create([
          'name'=>'megacisterna magna',
        ]);
        malFormacione::create([
          'name'=>'ventriculomegalia',
        ]);
        malFormacione::create([
          'name'=>'quiste del plexo coroideo',
        ]);
        malFormacione::create([
          'name'=>'encefalocele',
        ]);
        malFormacione::create([
          'name'=>'agenesia renal',
        ]);
        malFormacione::create([
          'name'=>'hipoplasia renal',
        ]);
        malFormacione::create([
          'name'=>'poliquistosis renal',
        ]);
        malFormacione::create([
          'name'=>'riñón en herradura',
        ]);
        malFormacione::create([
          'name'=>'extrofia vesical',
        ]);
        malFormacione::create([
          'name'=>'ectopia renal',
        ]);
        malFormacione::create([
          'name'=>'ureterocele',
        ]);
        malFormacione::create([
          'name'=>'riñón supernumerario',
        ]);
        malFormacione::create([
          'name'=>'megacolon',
        ]); 
        malFormacione::create([
          'name'=>'atresia yeyunoileal',
        ]); 
        malFormacione::create([
          'name'=>'atresia duodenal',
        ]); 
        malFormacione::create([
          'name'=>'atresia de esófago',
        ]); 
        malFormacione::create([
          'name'=>'ano imperforado',
        ]); 
        malFormacione::create([
          'name'=>'hernia diafragmática',
        ]); 
        malFormacione::create([
          'name'=>'gastroquisis',
        ]); 
        malFormacione::create([
          'name'=>'onfalocele',
        ]); 

        malFormacione::create([
          'name'=>'pie equivocado',
        ]); 
        malFormacione::create([
          'name'=>'Amelia',
        ]); 
        malFormacione::create([
          'name'=>'Acondroplasia',
        ]); 
        malFormacione::create([
          'name'=>'focomelia',
        ]); 
        malFormacione::create([
          'name'=>'sindactilia',
        ]); 
        malFormacione::create([
          'name'=>'polidactilia',
        ]); 
        malFormacione::create([
          'name'=>'agenesia tráquea',
        ]); 
        malFormacione::create([
          'name'=>'agenesia pulmonar',
        ]); 
        malFormacione::create([
          'name'=>'atresia bronquial',
        ]); 
        malFormacione::create([
          'name'=>'quistes broncogénicos',
        ]); 
        malFormacione::create([
          'name'=>'secuestro pulmonar',
        ]); 
        malFormacione::create([
          'name'=>'hipoplasia pulmonar',
        ]); 
        malFormacione::create([
          'name'=>'Ninguna',
        ]);
        Frecuencia::create([
          'name'=>'Nunca',
        ]);
        Frecuencia::create([
          'name'=>'Todos los días',
        ]);
        Frecuencia::create([
          'name'=>'Una vez por semana',
        ]);
        Frecuencia::create([
          'name'=>'Fines de semana',
        ]);
        Frecuencia::create([
          'name'=>'Una vez al mes',
        ]);
       
       
        enfermedadCronica::create([
          'name'=>'Enfermedad psiquiátrica',
        ]);
        enfermedadCronica::create([
          'name'=>'Enfermedad renal crónica',
        ]);
        enfermedadCronica::create([
          'name'=>'Cáncer',
        ]);
        enfermedadCronica::create([
          'name'=>'hipertensión arterial',
        ]);
        enfermedadCronica::create([
          'name'=>'Artritis',
        ]);
        enfermedadCronica::create([
          'name'=>'Epilepsia',
        ]);  
        enfermedadCronica::create([
          'name'=>'Epoc',
        ]);
        enfermedadCronica::create([
          'name'=>'Esclerosis múltiple',
        ]);
        enfermedadCronica::create([
          'name'=>'Vih/sida',
        ]);
        enfermedadCronica::create([
          'name'=>'Diabetes',
        ]);
        enfermedadCronica::create([
          'name'=>'Asma',
        ]);
        enfermedadCronica::create([
          'name'=>'Ninguna',
        ]);
    }
}
