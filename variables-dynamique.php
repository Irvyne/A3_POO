<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$languages = array(
    'PHP' => "ezfzef",
    'Ruby'=> "098",
    '$$$$'=> "ujy",
    '$Lmp'=> "ezfregtrhzef",
    '$rge@rg&'=> "ezf",
);

foreach ($languages as $language => $value) {
    ${$language} = $value;
}

echo ${'$rge@rg&'};

//$listFilm->{'$'};