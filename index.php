<?php
// snack 1
$games = [
    [
        'casa' => 'Gianni',
        'ospite' => 'Marco',
        'risultato' => '60-48'
    ],
    [
        'casa' => 'Pancrazio',
        'ospite' => 'Perula',
        'risultato' => '55-23'
    ],
    [
        'casa' => 'Bambini',
        'ospite' => 'Adulti',
        'risultato' => '0-120'
    ],
];

// snack 2

$email = $_GET['email'];
$nome = $_GET['name'];
$age = $_GET['age'];

if(strlen($nome) > 3 && strpos('@', $email) && strpos('.', $email) && is_numeric($age)){
    $warn = 'Accesso riuscito';
} else{
    $warn = 'Accesso negato';
};

// snack 3

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// snack 4

$numbers = [];
for($i = 0; $i < 15; $i++){
    $numero = rand(1, 40);
    if(!in_array($numero, $numbers)){
        array_push($numbers, $numero);
    };
};
$results = print_r($numbers, true);

// snack 5

$testo = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc';

$tagliato = explode('.', $testo);

// snack 6

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// snack 7

$classe = [
    [
        "nome" => "Gianni",
        "cognome" => "Morandi",
        "voti" => [3, 7, 8, 10, 5, 7, 6, 5]
    ],
    [
        "nome" => "Pippo",
        "cognome" => "Baudo",
        "voti" => [4, 5, 8, 3, 2, 6, 6, 4]
    ],
    [
        "nome" => "Cristiano",
        "cognome" => "Ronaldo",
        "voti" => [3, 2, 6, 0, 5, 3, 8, 5]
    ],
    [
        "nome" => "Mio",
        "cognome" => "Padre",
        "voti" => [8, 7, 8, 10, 8, 8, 8, 8]
    ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roba snack</title>
    <style>
        .teach{
            background-color: green;
        };
        .pm{
            background-color: gray;
        }
    </style>
</head>
<body>
    <h2>Snack 1</h2>
    <ul><?php foreach($games as $value){?>
        <li>
                
        <?php echo $value["casa"].' - '.$value["ospite"].' | '.$value["risultato"]; ?>
        </li> 
    <?php } ?></ul>

    <h2>Snack 2</h2>
    <p><?php echo $warn; ?></p>

    <h2>Snack 3</h2>
    <p><?php foreach($posts as $keyOne => $valueOne){ ?>
        <li>
        <?php echo $keyOne.'-'?>
        <ul>
            <li><?php foreach($valueOne as $valueTwo => $x){
            echo $x["title"].': '.$x["author"].'- '.$x["text"].'</br>';
        }?></li>
        </ul>
        </li>
        <?php } ?>
    </p>

    <h2>Snack 4</h2>
    <pre><?php echo $results ?></pre>

    <h2>Snack 5</h2>
    <p>testo lungo: <?php echo $testo; ?></p>
    <p>testo tagliato: <?php for($i = 0; $i < count($tagliato); $i++){ ?>
        <br>
        <span><?php echo $tagliato[$i].'.' ?></p></span>
        <br>


        <?php }?> 
    </p>

    <h2>Snack 6</h2>
    <ul class="teach">
    <?php for($i = 0; $i < count($db["teachers"]); $i++){ ?>
        <li>
        <?php echo $db["teachers"][$i]["name"].' '.$db["teachers"][$i]["lastname"];?>
        </li>
        <?php };?>
    </ul>
    <ul class="pm">
    <?php for($i = 0; $i < count($db["pm"]); $i++){ ?>
        <li>
        <?php echo $db["pm"][$i]["name"].' '.$db["pm"][$i]["lastname"];?>
        </li>
        <?php };?>
    </ul>

    <h2>Snack 7</h2>
    <?php for($i = 0; $i < count($classe); $i++){ ?>
        <p>
        <?php echo $classe[$i]["nome"].' '.$classe[$i]["cognome"]; ?>
        <?php echo $average = array_sum($classe[$i]["voti"])/count($classe[$i]["voti"]); ?>
        </p>
    
    <?php }?>

    <?php 
    
    
    ?>

    
</body>
</html>