<?php
/**
 * Created by PhpStorm.
 * User: inisire
 * Date: 26.06.15
 * Time: 14:31
 */

namespace Tools;

class AliasGenerator
{
    /**
     * @var array
     */
    private static $transliteration = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'szh', 'ъ' => '', 'ы' => 'i', 'ь' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'і' => 'i', 'ї' => 'yi',
        'є' => 'e'
    ];

    /**
     * @param $string
     *
     * @return mixed|string
     */
    public static function generate($string)
    {
        $generated = mb_strtolower($string, 'UTF-8');
        $generated = strtr($generated, self::$transliteration);
        $generated = preg_replace(["#\\-#", "#\\s#", "#[^A-Za-z0-9\\-]#"], ['', '-', ''], $generated);
        $generated = trim($generated);

        return $generated;
    }
}