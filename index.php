<?php
// ARRAY NUMERIC
function getIndexFromArray(string $string, array $array): int
{
    foreach ($array as $index => $language) {
        if ($string === $language) {
            return $index;
        }
    }
}
$frontLanguages = ['html', 'js', 'css'];

//var_dump(getIndexFromArray('html', $frontLanguages));
//var_dump(getIndexFromArray('html', $frontLanguages) === 1); // return TRUE => test OK

// ARRAY ASSOCIATIF
function getUsageFromArrayAssiociatif(string $string, array $array)
{
    foreach ($array as $key => $value) {
        if ($string === $key) {
            return $value;
        }
    }
}

$languageUsage = [
    'js' => 'front',
    'html' => 'front',
    'css' => 'front',
    'php' => 'back',
];

//var_dump(getUsageFromArrayAssiociatif('js', $languageUsage));
//var_dump(getUsageFromArrayAssiociatif('html', $languageUsage) === 'front'); // return TRUE => test OK
// ARRAY MULTIDIM
function getInfosFrom2DimArray(string $string, array $array)
{
    foreach ($array as $key => $languagesArray) {
        foreach ($languagesArray as $value) {
            if ($string === $value) {
                return $key;
            }
        }
    }
}

$langages = [
    'front' => ['js', 'html', 'css'],
    'back' => ['php', 'python', 'java'],
    'ui' => ['ps', 'figma'],
];

//var_dump(getInfosFrom2DimArray('js', $langages));
//var_dump(getInfosFrom2DimArray('figma', $langages) === 'ui'); // return TRUE => test OK
// ARRAY MULTIDIM
function getAllInfosFrom3DimArray(string $string, array $array): string
{
    foreach ($array as $categorie => $arrayInfos) {
        foreach ($arrayInfos as $info => $arrayLangages) {
            foreach ($arrayLangages as $index => $langage) {
                if ($string === $langage) {
                    return $langage . ' est un ' . $info . ' de ' . $categorie;
                }
            }
        }
    }
}

$infosLanguages = [
    'front' => [
        'language' => ['js', 'html', 'css',],
        'framework' => ['ReactJs', 'VueJs',],
        'library' => ['npm',],
    ],
    'back' => [
        'language' => ['php', 'python', 'java',],
        'framework' => ['symfony', 'laravel', 'zend',],
        'library' => ['composer',],
    ],
    'divers' => [
        'os' => ['MacOs', 'Ubuntu', 'Windows',],
    ],
];

// var_dump(getAllInfosFrom3DimArray('js', $infosLanguages));
// var_dump(getAllInfosFrom3DimArray('Ubuntu', $infosLanguages) === 'Ubuntu est un os de divers'); // return TRUE => test OK

include 'layouts/header.php';

foreach ($infosLanguages as $categorie => $arrayInfos) {
?>
    <div class="card">
        <h2><?php echo '#' .$categorie ?></h2>
        <div class="infos">
            <ul>
                <?php foreach ($arrayInfos as $info => $arrayLangages) { ?>
                    <li>
                        <?php echo '##' .$info . ': <br>';
                        foreach ($arrayLangages as $index => $langage) {
                            echo '<p> - ' . $langage . '</p>';
                        } ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php
}
include 'layouts/footer.php';

?>