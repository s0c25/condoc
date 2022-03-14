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
use App\Models\farmacos;
use App\Models\nombremalformacion;
use App\Models\formaciones;
use App\Models\MFME;
use App\Models\MFR;
use App\Models\MFSR;
use App\Models\MSNC;


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
      'name' => 'serviciodeperinatologiahulr',
      'email' => 'admin@doctor.test',
      'password' => bcrypt('malformaciones1234'),
    ])->assignRole('admin');


    Droga::create([
      'name' => 'Heroina',
    ]);
    Droga::create([
      'name' => 'Marihuana',
    ]);
    Droga::create([
      'name' => 'Opiáceos',
    ]);
    Droga::create([
      'name' => 'Lsd',
    ]);
    Droga::create([
      'name' => 'Cocaina',
    ]);
    Droga::create([
      'name' => 'Extasis',
    ]);
    Droga::create([
      'name' => 'Anfetaminas',
    ]);
    Droga::create([
      'name' => 'Ninguna',
    ]);



    Estatu::create([
      'name' => 'Activo',
    ]);

    Estatu::create([
      'name' => 'Inactivo',
    ]);

    sustanciasToxica::create([
      'name' => 'Plomo',
    ]);

    sustanciasToxica::create([
      'name' => 'Arsénico ',
    ]);

    sustanciasToxica::create([
      'name' => 'Metilmercurio',
    ]);

    sustanciasToxica::create([
      'name' => 'Benceno',
    ]);

    sustanciasToxica::create([
      'name' => 'Asbesto',
    ]);


    farmacos::create([
      'name' => 'Carbonato de litio',
    ]);

    farmacos::create([
      'name' => 'Quinina',
    ]);

    farmacos::create([
      'name' => 'Metilmercurio',
    ]);

    farmacos::create([
      'name' => 'Cloroquina',
    ]);

    farmacos::create([
      'name' => 'Metotrexato',
    ]);
    farmacos::create([
      'name' => 'Aminopterina',
    ]);

    farmacos::create([
      'name' => 'Trimetadiona',
    ]);

    farmacos::create([
      'name' => 'Parametadiona',
    ]);

    farmacos::create([
      'name' => 'Fenobarbital',
    ]);

    farmacos::create([
      'name' => 'Difenilhidantoina',
    ]);

    farmacos::create([
      'name' => 'Carbamazepinala',
    ]);

    farmacos::create([
      'name' => 'Ácido valproico',
    ]);

    farmacos::create([
      'name' => 'Tetraciclinas',
    ]);

    farmacos::create([
      'name' => 'Kanamicina',
    ]);

    farmacos::create([
      'name' => 'Estreptomicina',
    ]);

    farmacos::create([
      'name' => 'Warfarina',
    ]);

    farmacos::create([
      'name' => 'Dietilestilbestrol',
    ]);

    farmacos::create([
      'name' => 'Talidomida',
    ]);
    farmacos::create([
      'name' => 'Ninguna',
    ]);

    formaciones::create([
      'name'=>'MFC',
      'descripcion'=>'MalFormacion Cardiaca',
    ]);
    formaciones::create([
      'name'=>'MSNC',
      'descripcion'=>'MalFormacion sistema nervioso central',
    ]);
    formaciones::create([
      'name'=>'MFR',
      'descripcion'=>'MalFormacion renal',
    ]);
    formaciones::create([
      'name'=>'MFG',
      'descripcion'=>'MalFormacion Gastrointestinales',
    ]);
    formaciones::create([
      'name'=>'MFME',
      'descripcion'=>'MalFormacion Musculo esqueléticas',
    ]);
    formaciones::create([
      'name'=>'MFSR',
      'descripcion'=>'MalFormacion Sistema Respiratorio',
    ]);
    formaciones::create([
      'name'=>'MFSRP',
      'descripcion'=>'MalFormacion Sistema Reproducto',
    ]);



    //mfc
    nombremalformacion::create([
      'name' => 'rabdomioma',

    ]);
    nombremalformacion::create([
      'name' => 'ventrículo izquierdo hipoplásico',
    ]);
    nombremalformacion::create([
      'name' => 'transposición de grandes vasos',
    ]);
    nombremalformacion::create([
      'name' => 'canal aurículo ventrícular',
    ]);
    nombremalformacion::create([
      'name' => 'comunicación interventricular',
    ]);
    nombremalformacion::create([
      'name' => 'tronco arterial común',
    ]);
    nombremalformacion::create([
      'name' => 'tetralogía de Fallot',
    ]);
    nombremalformacion::create([
      'name' => 'foramen oval permeable',
    ]);
    nombremalformacion::create([
      'name' => 'conducto arterioso persistente',
    ]);
    nombremalformacion::create([
      'name' => 'anomalía de Ebstein',
    ]);
    nombremalformacion::create([
      'name' => 'estrechamiento aórtico',
    ]);
    nombremalformacion::create([
      'name' => 'comunicación interauricular',
    ]);
    nombremalformacion::create([
      'name' => 'estenosis valvular aórtica',
    ]);
    //mfc


    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '1',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '2',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '3',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '4',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '5',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '6',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '7',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '8',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '9',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '10',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '11',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '12',
    ]);
    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '13',
    ]);

    //MSNC
    nombremalformacion::create([
      'name' => 'anencefalia',
    ]);
    nombremalformacion::create([
      'name' => 'agenesia del cuerpo valioso',
    ]);
    nombremalformacion::create([
      'name' => 'agenesia del vermis cerebeloso',
    ]);
    nombremalformacion::create([
      'name' => 'microcefalia',
    ]);
    nombremalformacion::create([
      'name' => 'macrocefalia',
    ]);
    nombremalformacion::create([
      'name' => 'hidrocefalia',
    ]);
    nombremalformacion::create([
      'name' => 'craneorraquisquisis',
    ]);
    nombremalformacion::create([
      'name' => 'raquisquisis',
    ]);
    nombremalformacion::create([
      'name' => 'esquizoencefalia',
    ]);
    nombremalformacion::create([
      'name' => 'holoprosencefalia',
    ]);
    nombremalformacion::create([
      'name' => 'meningocele',
    ]);
    nombremalformacion::create([
      'name' => 'mielomeningocele',
    ]);
    nombremalformacion::create([
      'name' => 'mielocele',
    ]);
    nombremalformacion::create([
      'name' => 'megacisterna magna',
    ]);
    nombremalformacion::create([
      'name' => 'ventriculomegalia',
    ]);
    nombremalformacion::create([
      'name' => 'quiste del plexo coroideo',
    ]);
    nombremalformacion::create([
      'name' => 'encefalocele',
    ]);


    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '14',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '15',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '16',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '17',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '18',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '19',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '20',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '21',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '22',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '23',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '24',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '25',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '26',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '27',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '28',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '29',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion sistema nervioso central',
      'id_nombremalformacion' => '30',
    ]);


    //MSNC




    //MFR
    nombremalformacion::create([
      'name' => 'agenesia renal',
    ]);
    nombremalformacion::create([
      'name' => 'hipoplasia renal',
    ]);
    nombremalformacion::create([
      'name' => 'poliquistosis renal',
    ]);
    nombremalformacion::create([
      'name' => 'riñón en herradura',
    ]);
    nombremalformacion::create([
      'name' => 'extrofia vesical',
    ]);
    nombremalformacion::create([
      'name' => 'ectopia renal',
    ]);
    nombremalformacion::create([
      'name' => 'ureterocele',
    ]);
    nombremalformacion::create([
      'name' => 'riñón supernumerario',
    ]);


    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '31',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '32',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '33',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '34',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '35',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '36',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '37',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion renal',
      'id_nombremalformacion' => '38',
    ]);

    //MFR



    //MFG

    nombremalformacion::create([
      'name' => 'megacolon',
    ]);
    nombremalformacion::create([
      'name' => 'atresia yeyunoileal',
    ]);
    nombremalformacion::create([
      'name' => 'atresia duodenal',
    ]);
    nombremalformacion::create([
      'name' => 'atresia de esófago',
    ]);
    nombremalformacion::create([
      'name' => 'ano imperforado',
    ]);
    nombremalformacion::create([
      'name' => 'hernia diafragmática',
    ]);
    nombremalformacion::create([
      'name' => 'gastroquisis',
    ]);
    nombremalformacion::create([
      'name' => 'onfalocele',
    ]);


    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '39',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '40',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '41',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '42',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '43',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '44',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '45',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '46',
    ]);
    //MFG



    //MFME
    nombremalformacion::create([
      'name' => 'pie equivocado',
    ]);
    nombremalformacion::create([
      'name' => 'Amelia',
    ]);
    nombremalformacion::create([
      'name' => 'Acondroplasia',
    ]);
    nombremalformacion::create([
      'name' => 'focomelia',
    ]);
    nombremalformacion::create([
      'name' => 'sindactilia',
    ]);
    nombremalformacion::create([
      'name' => 'polidactilia',
    ]);

    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '47',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '48',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '49',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '50',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '51',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion Musculo esqueléticas',
      'id_nombremalformacion' => '52',
    ]);
    //MFME


    //MFSR

    nombremalformacion::create([
      'name' => 'agenesia tráquea',
    ]);
    nombremalformacion::create([
      'name' => 'agenesia pulmonar',
    ]);
    nombremalformacion::create([
      'name' => 'atresia bronquial',
    ]);
    nombremalformacion::create([
      'name' => 'quistes broncogénicos',
    ]);
    nombremalformacion::create([
      'name' => 'secuestro pulmonar',
    ]);
    nombremalformacion::create([
      'name' => 'hipoplasia pulmonar',
    ]);

    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '53',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '54',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '55',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '56',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '57',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '58',
    ]);

    nombremalformacion::create([
      'name' => 'Ninguna',
    ]);




    Malformacione::create([
      'formacione_id' => '1',
      'descripcion' => 'MalFormacion Cardiaca',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '2',
      'descripcion' => 'MalFormacion Sistema Nervioso Central',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '3',
      'descripcion' => 'MalFormacion Renales',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '4',
      'descripcion' => 'MalFormacion Gastrointestinales',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '5',
      'descripcion' => 'MalFormacion musculo Esqueléticas',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '6',
      'descripcion' => 'MalFormacion Sistema Respiratorio',
      'id_nombremalformacion' => '59',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
    'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '59',
    ]);
    //MFSR
   

    //Malformaciones del sistema reproductor:

    nombremalformacion::create([
      'name' => 'hipospadia',
    ]);
    nombremalformacion::create([
      'name' => 'epispadia',
    ]);
    nombremalformacion::create([
      'name' => 'sinorquia',
    ]);
    nombremalformacion::create([
      'name' => 'anorquia',
    ]);
    nombremalformacion::create([
      'name' => 'monorquia',
    ]);
    nombremalformacion::create([
      'name' => 'difalia',
    ]);
    nombremalformacion::create([
      'name' => 'afalia',
    ]);
    nombremalformacion::create([
      'name' => 'agenesia vaginal',
    ]);
    nombremalformacion::create([
      'name' => 'tabique vaginal',
    ]);
    nombremalformacion::create([
      'name' => 'agenesia mulleriana',
    ]);
    nombremalformacion::create([
      'name' => 'tumor de ovario',
    ]);
    nombremalformacion::create([
      'name' => 'aplasia o hipoplasia de utero',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '60',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '61',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '62',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '63',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '64',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '65',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '66',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '67',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '68',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '69',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '70',
    ]);
    Malformacione::create([
      'formacione_id' => '7',
      'descripcion' => 'MalFormacion Sistema Reproducto',
      'id_nombremalformacion' => '71',
    ]);


    //ninguna


    //ninguna



    Frecuencia::create([
      'name' => 'Nunca',
    ]);
    Frecuencia::create([
      'name' => 'Todos los días',
    ]);
    Frecuencia::create([
      'name' => 'Una vez por semana',
    ]);
    Frecuencia::create([
      'name' => 'Fines de semana',
    ]);
    Frecuencia::create([
      'name' => 'Una vez al mes',
    ]);


    enfermedadCronica::create([
      'name' => 'Enfermedad psiquiátrica',
    ]);
    enfermedadCronica::create([
      'name' => 'Enfermedad renal crónica',
    ]);
    enfermedadCronica::create([
      'name' => 'Cáncer',
    ]);
    enfermedadCronica::create([
      'name' => 'hipertensión arterial',
    ]);
    enfermedadCronica::create([
      'name' => 'Artritis',
    ]);
    enfermedadCronica::create([
      'name' => 'Epilepsia',
    ]);
    enfermedadCronica::create([
      'name' => 'Epoc',
    ]);
    enfermedadCronica::create([
      'name' => 'Esclerosis múltiple',
    ]);
    enfermedadCronica::create([
      'name' => 'Vih/sida',
    ]);
    enfermedadCronica::create([
      'name' => 'Diabetes',
    ]);
    enfermedadCronica::create([
      'name' => 'Asma',
    ]);
    enfermedadCronica::create([
      'name' => 'Ninguna',
    ]);
  }
}
