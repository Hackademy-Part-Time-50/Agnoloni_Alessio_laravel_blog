<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function welcome() 
    {
        return view('homepage',[
            'nome_blog'=> 'Il mio blog']);
    }

    public function articles()
    {
        return view('articles', [
            'articles' => \App\Models\Article::all(),
        ]);
    }

    public function article(\App\Models\Article $article)
    {
        return view('article', compact('article'));
    }
    // public function articoli()
    // {
    //     return(view('articoli',[$lista_articoli = \App\Models\Article::all(),
    //     ]));
        
    // }
    // --public function articoli()
    // {
    //     $lista_articoli = \App\Models\Article::all();

    //     return view('articoli',compact('lista_articoli'));
    // }

/*$lista_articoli = [
        'articolo1'=>['id'=>1,'title'=> 'Primo articolo','category' => 'PHP','description' => 'PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page"[1]) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.','visible' => true],

        'articolo2'=>['id'=>2,'title'=> 'Secondo articolo','category' => 'JS','description' => 'In informatica JavaScript è un linguaggio di programmazione multi paradigma orientato agli eventi, utilizzato sia nella programmazione lato client ','visible' => true],

        'articolo3'=>['id'=>3,'title'=> 'Terzo articolo','category' => 'CSS','description' => 'Cascading Style Sheets, meglio noto come CSS (in italiano fogli di stile a cascata), è un linguaggio usato per definire la formattazione di documenti HTML','visible' => true]
    ];

    // $lista_articoli = [];

    */
    // public function articolo(\App\Models\Article $articolo)
    // {   
    //     return view('articolo',compact('articolo'));
    // }
    // --public function articolo($id)
    // {   
    //     $articolo = \App\Models\Article::findOrFail($id);

    //     return view('articolo',[
    //         'articolo' => $articolo,
    //     ]);
    // }

    /*
        $lista_articoli = [
            1=>['id'=>1, 'title'=> 'Primo articolo', 'category' => 'PHP', 'description' => 'PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page"[1]) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.','visible' => true],

            2=>['id'=>2, 'title'=> 'Secondo articolo', 'category' => 'JS', 'description' => 'In informatica JavaScript è un linguaggio di programmazione multi paradigma orientato agli eventi, utilizzato sia nella programmazione lato client ','visible' => true],
            
            3=>['id'=>3, 'title'=> 'Terzo articolo', 'category' => 'CSS', 'description' => 'Cascading Style Sheets, meglio noto come CSS (in italiano fogli di stile a cascata), è un linguaggio usato per definire la formattazione di documenti HTML','visible' => true]
        ];

        if(! $lista_articoli[$id]['visible']){
            abort(404);
        };

        return view('articolo',[
            'title'=> $lista_articoli[$id]['title'],
            'category' => $lista_articoli[$id]['category'],
            'description' => $lista_articoli[$id]['description'],
        ]);

        */

    public function About_us()
    {
        $gruppo = [
            ['id'=>1, 'name'=> 'Alessio', 'category' => 'PHP', 'description' => 'Alessio è uno sviluppatore esperto in PHP, con oltre 10 anni di esperienza nel campo. Fin dai suoi inizi, Alessio ha dimostrato una particolare inclinazione per la programmazione backend, specializzandosi in PHP. Ha lavorato su vari progetti complessi e ha contribuito allo sviluppo di applicazioni web di grande scala. La sua passione per l\'ottimizzazione e la sicurezza lo rende un elemento fondamentale per ogni team di sviluppo.'],
            ['id'=>2, 'name'=> 'Francesco', 'category' => 'CSS', 'description' => 'Francesco è un maestro del design front-end, con una particolare predilezione per il CSS. Grazie alla sua attenzione ai dettagli e alla sua creatività, è in grado di trasformare qualsiasi progetto in un\'interfaccia utente elegante e funzionale. Francesco ha collaborato con svariate aziende, contribuendo alla creazione di siti web accattivanti e responsive. La sua conoscenza approfondita di CSS lo rende un punto di riferimento per chiunque desideri migliorare l\'aspetto visivo delle proprie applicazioni web.'],
            ['id'=>3, 'name'=> 'Giuseppe', 'category' => 'JS', 'description' => 'Giuseppe è uno sviluppatore full-stack con una forte specializzazione in JavaScript. Ha iniziato la sua carriera come sviluppatore front-end, ma la sua curiosità e il desiderio di migliorarsi lo hanno portato a esplorare anche il lato backend. Giuseppe è particolarmente abile nel creare applicazioni web dinamiche e interattive, utilizzando framework come React e Node.js.La sua capacità di risolvere problemi complessi con soluzioni innovative lo rende un membro prezioso del team.']
        ];
        if (empty($gruppo)) {
            return view('pagina_in_costruzione',[
                'titolo'=>'Pagina in costruzione'
            ]);
        }elseif (count($gruppo) === 1) {
            return view('chi-siamo',[
                'titolo'=>'Chi sono',
                'paragrafo'=>'Io sono....',
                'gruppo'=>$gruppo
            ]);
        }else {
            return view('chi-siamo',[
                'titolo'=>'Chi siamo',
                'paragrafo'=>'Noi siamo....',
                'gruppo'=>$gruppo,
            ]);
        }
    
    }

    public function Details_About_us($id)
    {
        $gruppo = [
            1 =>['id'=>1, 'name'=> 'Alessio', 'category' => 'PHP', 'description' => 'Alessio è uno sviluppatore esperto in PHP, con oltre 10 anni di esperienza nel campo. Fin dai suoi inizi, Alessio ha dimostrato una particolare inclinazione per la programmazione backend, specializzandosi in PHP. Ha lavorato su vari progetti complessi e ha contribuito allo sviluppo di applicazioni web di grande scala. La sua passione per l\'ottimizzazione e la sicurezza lo rende un elemento fondamentale per ogni team di sviluppo.'],
            2 =>['id'=>2, 'name'=> 'Francesco', 'category' => 'CSS', 'description' => 'Francesco è un maestro del design front-end, con una particolare predilezione per il CSS. Grazie alla sua attenzione ai dettagli e alla sua creatività, è in grado di trasformare qualsiasi progetto in un\'interfaccia utente elegante e funzionale. Francesco ha collaborato con svariate aziende, contribuendo alla creazione di siti web accattivanti e responsive. La sua conoscenza approfondita di CSS lo rende un punto di riferimento per chiunque desideri migliorare l\'aspetto visivo delle proprie applicazioni web.'],
            3 =>['id'=>3, 'name'=> 'Giuseppe', 'category' => 'JS', 'description' => 'Giuseppe è uno sviluppatore full-stack con una forte specializzazione in JavaScript. Ha iniziato la sua carriera come sviluppatore front-end, ma la sua curiosità e il desiderio di migliorarsi lo hanno portato a esplorare anche il lato backend. Giuseppe è particolarmente abile nel creare applicazioni web dinamiche e interattive, utilizzando framework come React e Node.js.La sua capacità di risolvere problemi complessi con soluzioni innovative lo rende un membro prezioso del team.']
        ];
    
        if (!array_key_exists($id, $gruppo)) {
            abort(404);
        }
    
        return view('infoTeam',$gruppo[$id]);
    }
}
