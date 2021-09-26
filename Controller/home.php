<?php

if (route(0) == 'home'){

    // DB

    view('home/home',[
        'isim' => 'Şahin',
        'soyisim' => 'ERSEVER'
    ]);
}