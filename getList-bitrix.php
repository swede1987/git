    <?
    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");// все, что будет в массиве
    $arFilter = Array("IBLOCK_ID"=>4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");// фильтрация, параметры по которым фильтруем данные
    $res = CIBlockElement::GetList(
        Array("NAME" => "ASC"), // сортировка
        $arFilter, // фильтрация
        false, // группировка
        Array("nPageSize"=>50), // постраничная навигация
        $arSelect // все, что будет в массиве
    );

    $res->NavStart(0);

    while($ob = $res->GetNextElement()){
        $arItem = $ob->GetFields();
        $arItem['PROPERTIES'] = $ob->GetProperties();
        $arResult[] = $arItem;
    }
    ?>

<!--<pre>-->
<?//var_dump($arResult);?>
<!--</pre>-->

<div class="content">
    <?foreach ($arResult as $arItem):?>
        <div class="row">
            <?=$arItem['NAME']?>
        </div>
    <?endforeach;?>
</div>

    <?echo $res->NavPrint();?>
