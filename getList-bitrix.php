<?
    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");// все, что будет в массиве
    $arFilter = Array("IBLOCK_ID"=>4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");// фильтрация, параметры по которым фильтруем данные

    $res = CIBlockElement::GetList(
        Array(), // сортировка
        $arFilter, // фильтрация
        false, // группировка
        Array("nPageSize"=>50), // постраничная навигация
        $arSelect // все, что будет в массиве
    );

    while($ob = $res->GetNextElement()){
        $arItem = $ob->GetFields();
        $arItem['PROPERTIES'] = $ob->GetProperties();
        $arResult[] = $arItem;
    }
?>
