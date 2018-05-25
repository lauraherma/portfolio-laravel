<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/images', function () {

    return json_encode([
        [
            "id" => 29,
            "src" => '/assets/graphicDesignThesisWork.jpg',
            "imageTitle" => 'Thesis Exhibition',
            "imageText" => "Thesis exhibition brand design in Collaboration with Iida Kaisa Urm. Estonian Design Awards Pronks 2016",
        ],
        [
            "id" => 32,
            "src" => '/assets/walkInCinema.jpg',
            "imageTitle" => 'Walk in cinema',
            "imageText" => "Second year EKA graphic design out door cinema project.",
        ],

        [
            "id" => 1,
            "src" => '/assets/CosmeticBottles.jpg',
            "imageTitle" => 'Honey Green',
            "imageText" => "Brand design for imaginary natural cosmetics company. 
            University work 2015 in exchange year at L'École de design Nantes Atlantique",
        ],
        [
            "id" => 2,
            "src" => '/assets/TIR.jpg',
            "imageTitle" => 'Project Room TIR',
            "imageText" => 'Third year EKA graphic design and interior design group project TIR draft. 2016',
        ],
        [
            "id" => 3,
            "src" => '/assets/vulpmlogo.jpg',
            "imageTitle" => 'Vulpem logo',
            "imageText" => 'Logo for music artist. 2016',

        ],
        [
            "id" => 4,
            "src" => '/assets/70ndad.jpg',
            "imageTitle" => 'Chocolate package',
            "imageText" => "First year EKA graphic design 70's history assignment. 2013.",
        ],
        [
            "id" => 6,
            "src" => '/assets/cakeBoutique.jpg',
            "imageTitle" => 'Cake Boutique',
            "imageText" => 'Cake Boutique business card. 2016',
        ],
        [
            "id" => 31,
            "src" => '/assets/visualArts.jpg',
            "imageTitle" => 'Poster',
            "imageText" => "Poster for visual arts exhibition Paper Made. University work 2015 in exchange year at L'École de design Nantes Atlantique",
        ],
        [
            "id" => 7,
            "src" => '/assets/holdYourOwnHand.jpg',
            "imageTitle" => 'Hold Your Own Hand',
            "imageText" => "Visual arts paper sculpture. University work 2015 in exchange year at L'École de design Nantes Atlantique",
        ],
        [
            "id" => 8,
            "src" => '/assets/metsWater.jpg',
            "imageTitle" => 'Mets Water',
            "imageText" => "Brand design for water bottle. University workshop 2015 in exchange year at L'École de design Nantes Atlantique. 
            In collaboration Yuli Choi",
        ],
        [
            "id" => 9,
            "src" => '/assets/bagDrawing.jpg',
            "imageTitle" => 'Bag Sketch',
            "imageText" => "Sketch for art project. University work 2015 in exchange year at L'École de design Nantes Atlantique",
        ],
        [
            "id" => 10,
            "src" => '/assets/hapiloans1.jpg',
            "imageTitle" => 'Background Image',
            "imageText" => 'Background image exercise. 2015',
        ],
        [
            "id" => 11,
            "src" => '/assets/hapiloans2.jpg',
            "imageTitle" => 'Background Image',
            "imageText" => 'Background image exercise. 2015',
        ],
        [
            "id" => 12,
            "src" => '/assets/hapiloans3.jpg',
            "imageTitle" => 'Background Image',
            "imageText" => 'Background image exercise. 2015',
        ],
        [
            "id" => 13,
            "src" => '/assets/hapiloans4.jpg',
            "imageTitle" => 'Background Image',
            "imageText" => 'Background image exercise. 2015',
        ],
        [
            "id" => 14,
            "src" => '/assets/hapiloans5.jpg',
            "imageTitle" => 'Background Image',
            "imageText" => 'Background image exercise. 2015',
        ],
        [
            "id" => 15,
            "src" => '/assets/kotkas.jpg',
            "imageTitle" => 'Kotkapesa',
            "imageText" => 'Logo for home cafe. 2015',
        ],
        [
            "id" => 16,
            "src" => '/assets/burgerbox1.jpg',
            "imageTitle" => 'Burger Box brand design',
            "imageText" => 'Second year EKA graphic design and interior design group project outdoor cafe making and brand design for Burger Box. 2015',
        ],
        [
            "id" => 17,
            "src" => '/assets/kohukesed.jpg',
            "imageTitle" => 'Kohuke packages',
            "imageText" => 'First year EKA graphic design history  assignment. 2013.',
        ],
        [
            "id" => 18,
            "src" => '/assets/sirkelEsimeneKursus.jpg',
            "imageTitle" => 'The Century of the Self',
            "imageText" => 'First year EKA graphic design assignment about documentary The Century of the Self. 2014',
        ],
        [
            "id" => 19,
            "src" => '/assets/valimiskampaania2.jpg',
            "imageTitle" => 'Election Campaign',
            "imageText" => 'Design for artist. 2015',
        ],
        [
            "id" => 20,
            "src" => '/assets/aimeLogo.jpg',
            "imageTitle" => 'Aime logo',
            "imageText" => 'Brand logo for flower shop. 2014',
        ],
        [
            "id" => 21,
            "src" => '/assets/nopiPoster1.jpg',
            "imageTitle" => 'Poster',
            "imageText" => 'Poster for Nop cafe. 2013',
        ],
        [
            "id" => 22,
            "src" => '/assets/installatsioon.jpg',
            "imageTitle" => 'City Installation',
            "imageText" => 'Second year EKA graphic design urban space installation. 2014',
        ],
        [
            "id" => 23,
            "src" => '/assets/manifesto.jpg',
            "imageTitle" => 'Manifesto',
            "imageText" => 'First year EKA graphic design manifesto project. 2013',
        ],
        [
            "id" => 24,
            "src" => '/assets/guy.jpg',
            "imageTitle" => 'Sketch',
            "imageText" => 'Sketch with Wacome tablet. 2013',
        ],
        [
            "id" => 26,
            "src" => '/assets/christmasCard.jpg',
            "imageTitle" => 'Christmas card',
            "imageText" => 'First year EKA graphic design assignment to make uncommon christmas card. 2013',
        ],
        [
            "id" => 27,
            "src" => '/assets/posterDreamingSculptor.jpg',
            "imageTitle" => 'Poster',
            "imageText" => 'First year EKA graphic design workshop. 2013',
        ],
        [
            "id" => 28,
            "src" => '/assets/PosterCrazy.jpg',
            "imageTitle" => 'Poster',
            "imageText" => 'First year EKA graphic design workshop. 2013',
        ],

    ]);
});

Route::get('/', function () {
    return view('react');
});
