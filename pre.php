function p($v){
    global $USER;

    if ($USER->IsAdmin()){
        echo '<pre>';
        print_r($v);
        echo '</pre>';
    }
}
