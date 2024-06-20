<?php

    $url = 'https://mosaic.scdn.co/300/ab67616d00001e020274bdd4aca5b84e3f9dca39ab67616d00001e0219beb7ceaa4fb95633718305ab67616d00001e021a8c4618eda885a406958dd0ab67616d00001e02909a901269b0c94ce8185288';

    $content = file_get_contents($url);

    print_r($content);

?>