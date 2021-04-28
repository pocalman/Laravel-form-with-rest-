<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Directus;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

/*La classe ci dessous définit les comportements des objets du formulaire. C'est elle qui contient la requête */

class ProductionAdminController extends Controller {

    private $dapi;

    /* Il s'agit de la variable pour accéder à l'API*/

    public function __construct(Request $request, Directus $dapi) {
        $this->dapi = $dapi;
    }

    /* Les fonctions sont ce qui va éxecuter des actions dans la requête. La fonction Show sert tout simplement à optenir certaines données
    provenant de notre base de données qui seront affichées aux utilisateurs via le formulaire)*/

    public function show() {
        return view('productionAdmin', [
            'genres' => $this->getGenres(),
            'types' => $this->getTypes(),
            'secteurs' => $this->getSecteurs(),
            'formats' => $this->getFormats(),
            'entites' => $this->getEntites(),
            'generique_categories' => $this->getCategoriesGeneriques(),
            'types_generiques' => $this->getTypesGeneriques(),
            'langues' => $this->getLangues(),
            'files' => $this->getFiles(),
            'country' => $this->getCountries(),
            'provinces' => $this->getProvinces(),

         /*   'postfiles' => $this->postFiles(), */
            'regies' => $this->getRegieVedette(),
            'country' => $this->getCountries(),
        ]);
    }

    private function getCountries() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/country_fr', ['fields' =>'*.*'])->json();
        return $response['data'];
    }

    private function getProvinces() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/provinces')->json();
        return $response['data'];
    }

    /* On remarque ici que la fonction show ci-haut appelle d'autres fonctions ci-bas */

    /* Requête pour aller chercher les genres utilisant l'api directement  */
    private function getGenres() {
        return $this->dapi->genres();
    }

    /*Requête pour aller chercher les types utilisant l'api directement  */

    private function getTypes() {
        return $this->dapi->productionTypes();
    }

    // temporaire, à remplacer par un appel vers l'api si un jour secteur devient une table
    private function getSecteurs() {
        return [
            ['titre' => 'film'],
            ['titre' => 'television'],
            ['titre' => 'multimedia']
        ];
    }

      /*Exemple, pour aller chercher les formats, on se sert d'une requête qui utilise la méthode get qui utilise le protocole HTTP assurant
      la communication entre le seveur et l'utilisateur pour aller chercher les données via
      l'API Directus */

    /* Requête pour aller chercher les formats*/
    private function getFormats() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/formats', ['fields' =>'*.*'])->json();
        return $response['data'];
    }

     /* Requête pour aller chercher les entités, compagnies et individus*/

    private function getEntites() {

        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/entites')->json();
        return $response['data'];
    }

    /* Requête pour aller chercher les entités, compagnies et individus*/

    private function getCategoriesGeneriques() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/generique_categories', ['fields' =>'*.*'])->json();
        return $response['data'];
    }

    /* Requête pour aller chercher les catégories de génériques que sont Crédit, Technique, Détails, Artistique*/

    private function getTypesGeneriques() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/generique_types', ['fields' =>'*.*'])->json();
        return $response['data'];
    }

      /* Requête pour aller chercher les langues*/

    private function getLangues() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/langues')->json();
        return $response['data'];
    }

      /* Requête pour aller chercher les regies vedettes*/


    private function getRegieVedette() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/regie_vedettes')->json();
        return $response['data'];
    }

      /* Requête pour aller chercher les images*/

    private function getFiles() {
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/files')->json();
        return $response['data'];
    }


   /*Ceci est la fonction de la principale du formulaire, c'est par elle que passent les informations qui s'en iront vers
        l'équipe de QFQ. */

    public function createProduction(Request $request) {
        $description = $request->input('description');

        /*
            $dataFile= array(
                'filename_download' => $file,
                'filename_disk'=> $file,
                "private_hash"=>  Hash::make($file));
            ];
        */

        /* $sentFile = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->post('http://admin.electrogene.ca/dge_stage/files', array('file'=>$file))->json();
            dd($sentFile); */

        /*   $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->get('http://admin.electrogene.ca/dge_stage/items/productions/1230', ['fields' =>'*.*'])->json();
            dd($response); */


        /* Ces champs correspondent à des tableaux qui sont utilisés pour les champs qui se multiplient */
        /* Des requêtes pour avoir des valeurs multiples à partir d'un seul champ qui se multiplie dans le formulaire. */

        //-------------
        // Formats
        //-------------
        $mappedFormats = [];
        $formats = $request->input('format');
        if ($formats != NULL) {
            foreach ($formats as $f) {
                array_push($mappedFormats, array('formats_id' => array('id' => $f)));
            }
        } else {
            $formats=[];
        }

        //-------------
        // Genres
        //-------------
        $mappedGenres = [];
        $genres = $request->input('genre');
        if ($genres != NULL) {
            foreach ($genres as $g) {
                array_push($mappedGenres, array('genres_id' => array('id' => $g)));
            }
        } else {
            $genres=[];
        }


        //-------------
        // Lieux de tournage
        //-------------
        $lieuxTournage = $request->input('lieuxTournage');
        $tournage = [];
        /*
            $lt=0;
            $tournage= [];

            if ( $lieuxTournage != NULL) {
                foreach ( $lieuxTournage as $lt) {
                    array_push($tournage, array("lieu_precis"=>$lt));
                }
            } else {
                $tournage=[];
            }
        */

        //-------------
        // Mapping des langues au format attendue par l'API.
        // monté en partie par Stéphane
        //-------------
        $languages = [];

        $sousTitres = $request->input('sous-titres');
        // loop sur les valeurs du input sousTitres
        if (isset($sousTitres)) {
            foreach ($sousTitres as $subtitleLanguage) {
                if (isset($subtitleLanguage)) {
                    if (isset($languages[$subtitleLanguage])) {
                        array_push($languages[$subtitleLanguage]['disponibilite'], 'sous-titres');
                    } else {
                        $languages[$subtitleLanguage] = array(
                            'newItem' => true,
                            'langue' => $subtitleLanguage,
                            'disponibilite' => ['sous-titres']
                        );
                    }
                }
            }
        }

        $doublages = $request->input("doublage");
        // Boucle sur les valeurs du input doublage
        if (isset($doublages)) {
            foreach ($doublages as $dubLanguage) {
                if (isset($dubLanguage)) {
                    if (isset($languages[$dubLanguage])) {
                        array_push($languages[$dubLanguage]['disponibilite'] , 'doublage');
                    } else {
                        $languages[$dubLanguage] = array(
                            'newItem' => true,
                            'langue' => $dubLanguage,
                            'disponibilite' => ['doublage']
                        );
                    }
                }
            }
        }

        $versionOriginale = $request->input("vo");
        // Boucle sur les valeurs du input vo
        if (isset($versionOriginale)) {
            foreach ($versionOriginale as $vo) {
                if (isset($vo)) {
                    if (isset($languages[$vo])) {
                        array_push($languages[$vo]['disponibilite'] , 'vo');
                    } else {
                        $languages[$vo] = array(
                            'newItem' => true,
                            'langue' => $vo,
                            'disponibilite' => ['vo']
                        );
                    }
                }
            }
        }

        //--------------------
        // Request mapping, c'est à dire la grande requête qui prend en compte les valeurs du formulaire pour les envoyer dans la base de données
        // à partir du formulaire avec la méthode post qui se sert aussi du protocole HTTP décrit ci-haut.
        //--------------------

        // Valeurs ne necessitant pas de mapping.
        // Elles sont obtenues telles qu elles sont du formulaire et on deja le bon nom et le bon format
        $data = $request->only([
            'annee_production',
            'annee_sortie',
            'commentaires_client',
            'dates_timeline',
            'devise',
            'diffusions',
            'duree',
            'clienteles',
            'contacts',
            'generiques',
            'notes',
            'presentation',
            'synopsis_en',
            'timeline',
            'urls'
        ]);

        $titre = $request->input('titre');
        $saison = $request->input('saison');
        if (isset($saison)){
            $titre = "{$titre} saison {$saison}";
        }

        //-------------------
        // Valeurs mappées
        //-------------------
        $data = array_merge( $data, array(
            'titre' => $titre,
            'autre_titre' => [
                array(
                    'titre' => $request->input('autre_titre'),
                    'preciser' => $request->input('preciser'),
                    'langue' => $request->input('langueAutreTitre')
                )
            ],
            'budget_alloue' =>  $request->input('budget'),
            // 'copro' => array('id'),
            'copro_requested' => boolval($request->input('rechercheCoprod')),   // ERROR with this field
            'creation' => 0,
            'dates_timeline' => [array(
                'projet' => $request->input('dateProjet'),
                'preproduction' => $request->input('datePreproduction'),
                'production' => $request->input('dateProduction'),
                'postproduction' => $request->input('datePostproduction'),
                'termine' => $request->input('dateProductionTerminee')
            )],
            'formats' => $mappedFormats,
            'genres' => $mappedGenres,
            'langues' => $languages,
            'lieux_tournage' => $tournage,
            'maison_production' => [
                array(
                    'id' => $request->input('maison_production'),
                    'type_entite' =>'ENTREPRISE',
                    'web' => ''
                )
            ],
            'nbr_episodes' =>  $request->input('nbrepisodes'),
            'reference'  => [array(
                'titre' => $request->input('titre_reference'),
                'URL' => $request->input('URL')
            )],
            // 'regie_vedette' => array(
            //     'afficher' =>[$request->input('bandeau'), $request->input('accueil')]
            //     'date_debut' => $request->input('date_debut'),
            //     'date_fin' => $request->input('date_fin')
            // ),
            'status' =>'published',
            'type_production' => $request->input('type')
        ));

        /* $data['fichiers'] = [
            array(
                'directus_files_id' => array(
                    'id' => $sentFile->data['id'],
                    'description'=> $description,
                    'location'=>  'montreal',
                    'metadata'=>  array('credit'=> 'credit photo' ),
                    'tags'=>  array('1'=> 'selfy', '2'=> 'tag')
                )
        ]; */

        // dd($data);
        $response = Http::withToken('2Nb6XQymeiTMnTMcFyHvSiqd')->post('http://admin.electrogene.ca/dge_stage/items/productions?fields=*.*', $data)->json();
        if(isset($response['error'])){
            dd($response);
        }

        /*Il reste encore à savoir comment insérer des images dans le formulaire */
        return view('confirmCreationProduction'); /*Le formulaire ménera à cette page*/
    }
}
