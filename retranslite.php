function rus2translit($string) {
                $converter = array(
                    "YO" => "Ё",
                    "I" => "Й",
                    "TS" => "Ц",
                    "U" => "У",
                    "K" => "К",
                    "E" => "Е",
                    "N" => "Н",
                    "G" => "Г",
                    "SH" => "Ш",
                    "SCH" => "Щ",
                    "Z" => "З",
                    "H" => "Х",
                    "`" => "Ъ",
                    "yo" => "ё",
                    "i" => "й",
                    "ts" => "ц",
                    "u" => "у",
                    "k" => "к",
                    "e" => "е",
                    "n" => "н",
                    "g" => "г",
                    "sh" => "ш",
                    "sch" => "щ",
                    "z" => "з",
                    "h" => "х",
                    "`" => "ъ",
                    "F" => "Ф",
                    "I" => "Ы",
                    "V" => "В",
                    "A" => "А",
                    "P" => "П",
                    "R" => "Р",
                    "O" => "О",
                    "L" => "Л",
                    "D" => "Д",
                    "ZH" => "Ж",
                    "E" => "Э",
                    "f" => "ф",
                    "i" => "ы",
                    "v" => "в",
                    "a" => "а",
                    "p" => "п",
                    "r" => "р",
                    "o" => "о",
                    "l" => "л",
                    "d" => "д",
                    "zh" => "ж",
                    "e" => "э",
                    "YA" => "Я",
                    "CH" => "Ч",
                    "S" => "С",
                    "M" => "М",
                    "I" => "И",
                    "T" => "Т",
                    "`" => "Ь",
                    "B" => "Б",
                    "YU" => "Ю",
                    "ya" => "я",
                    "ch" => "ч",
                    "s" => "с",
                    "m" => "м",
                    "i" => "и",
                    "t" => "т",
                    "`" => "ь",
                    "b" => "б",
                    "yu" => "ю",
                );
                return strtr($string, $converter);
            }