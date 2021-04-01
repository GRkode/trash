<?php

use Illuminate\Database\Seeder;
use App\Models\ { User, Departement, Arrondissement, Quartier, Commune, Application};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Departement::insert([
            ['title' => 'Alibori'],
            ['title' => 'Atacora'],
            ['title' => 'Atlantique'],
            ['title' => 'Borgou'],
            ['title' => 'Collines'],
            ['title' => 'Couffo'],
            ['title' => 'Donga'],
            ['title' => 'Littoral'],
            ['title' => 'Mono'],
            ['title' => 'Ouémé'],
            ['title' => 'Plateau'],
            ['title' => 'Zou'],
        ]);
        Commune::insert([
            ['title'=>'Banikoara',  'departement_id'=>1],
            ['title'=>'Gogounou', 'departement_id'=>1],
            ['title'=>'Kandi', 'departement_id'=>1],
            ['title'=>'Karimama', 'departement_id'=>1],
            ['title'=>'Malanville', 'departement_id'=>1],
            ['title'=>'Segbana', 'departement_id'=>1],
            ['title'=>'Boukoumbé', 'departement_id'=>2],
            ['title'=>'Cobly', 'departement_id'=>2],
            ['title'=>'Kérou', 'departement_id'=>2],
            ['title'=>'Kouandé', 'departement_id'=>2],
            ['title'=>'Matéri', 'departement_id'=>2],
            ['title'=>'Natitingou', 'departement_id'=>2],
            ['title'=>'Pehonko', 'departement_id'=>2],
            ['title'=>'Tanguiéta', 'departement_id'=>2],
            ['title'=>'Toucountouna', 'departement_id'=>2],
            ['title'=>'Abomey-Calavi', 'departement_id'=>3],
            ['title'=>'Allada', 'departement_id'=>3],
            ['title'=>'Kpomassè', 'departement_id'=>3],
            ['title'=>'Ouidah', 'departement_id'=>3],
            ['title'=>'Sô-Ava', 'departement_id'=>3],
            ['title'=>'Toffo', 'departement_id'=>3],
            ['title'=>'Tori-Bossito', 'departement_id'=>3],
            ['title'=>'Zè', 'departement_id'=>3],
            ['title'=>'Bembéréké', 'departement_id'=>4],
            ['title'=>'Kalalé', 'departement_id'=>4],
            ['title'=>'N\'Dali', 'departement_id'=>4],
            ['title'=>'Nikki', 'departement_id'=>4],
            ['title'=>'Parakou', 'departement_id'=>4],
            ['title'=>'Pèrèrè', 'departement_id'=>4],
            ['title'=>'Sinendé', 'departement_id'=>4],
            ['title'=>'Tchaourou', 'departement_id'=>4],
            ['title'=>'Bantè', 'departement_id'=>5],
            ['title'=>'Dassa-Zoumè', 'departement_id'=>5],
            ['title'=>'Glazoué', 'departement_id'=>5],
            ['title'=>'Ouèssè', 'departement_id'=>5],
            ['title'=>'Savalou', 'departement_id'=>5],
            ['title'=>'Savè', 'departement_id'=>5],
            ['title'=>'Aplahoué', 'departement_id'=>6],
            ['title'=>'Djakotomey', 'departement_id'=>6],
            ['title'=>'Dogbo-Tota', 'departement_id'=>6],
            ['title'=>'Klouékanmè', 'departement_id'=>6],
            ['title'=>'Lalo', 'departement_id'=>6],
            ['title'=>'Toviklin', 'departement_id'=>6],
            ['title'=>'Bassila', 'departement_id'=>7],
            ['title'=>'Copargo', 'departement_id'=>7],
            ['title'=>'Djougou', 'departement_id'=>7],
            ['title'=>'Ouaké', 'departement_id'=>7],
            ['title'=>'Cotonou', 'departement_id'=>8],
            ['title'=>'Athiémé', 'departement_id'=>9],
            ['title'=>'Bopa', 'departement_id'=>9],
            ['title'=>'Comè', 'departement_id'=>9],
            ['title'=>'Grand-Popo', 'departement_id'=>9],
            ['title'=>'Houéyogbé', 'departement_id'=>9],
            ['title'=>'Lokossa', 'departement_id'=>9],
            ['title'=>'Adjarra', 'departement_id'=>10],
            ['title'=>'Adjohoun', 'departement_id'=>10],
            ['title'=>'Aguégués', 'departement_id'=>10],
            ['title'=>'Akpro-Missérété', 'departement_id'=>10],
            ['title'=>'Avrankou', 'departement_id'=>10],
            ['title'=>'Bonou', 'departement_id'=>10],
            ['title'=>'Dangbo', 'departement_id'=>10],
            ['title'=>'Porto-Novo', 'departement_id'=>10],
            ['title'=>'Sèmè-Kpodji', 'departement_id'=>10],
            ['title'=>'Adja-Ouèrè', 'departement_id'=>11],
            ['title'=>'Ifangni', 'departement_id'=>11],
            ['title'=>'Kétou', 'departement_id'=>11],
            ['title'=>'Pobè', 'departement_id'=>11],
            ['title'=>'Sakété', 'departement_id'=>11],
            ['title'=>'Abomey', 'departement_id'=>12],
            ['title'=>'Agbangnizoun', 'departement_id'=>12],
            ['title'=>'Bohicon', 'departement_id'=>12],
            ['title'=>'Covè', 'departement_id'=>12],
            ['title'=>'Djidja', 'departement_id'=>12],
            ['title'=>'Ouinhi', 'departement_id'=>12],
            ['title'=>'Zangnanado', 'departement_id'=>12],
            ['title'=>'Za-Kpota', 'departement_id'=>12],
            ['title'=>'Zogbodomey', 'departement_id'=>12],
        ]);*/

        factory(Application::class)->create();
        factory(User::class, 5)->create();
        $user = User::find(1);
        $user->admin = true;
        $user->save();
    }
}
