<?php

namespace app\components;

use Gaikan\Component;
use app\components\SCButton;

class Home extends Component
{

    public function render(): void
    {
        $url = "https://random-data-api.com/api/app/random_app?size=7";
        $apps = json_decode(file_get_contents($url));

        foreach ($apps as $app) {
            (new SCButton(['label' => $app->app_name, 'link' => 'https://www.youtube.com/watch?v=kGR09qCO0CM']))->render();
        }
    }

}