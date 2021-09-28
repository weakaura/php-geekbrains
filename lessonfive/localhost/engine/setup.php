<?php


function getGallery() {
    return getAssocResult("SELECT * FROM gallery order by likes desc");
}
function getOnePhoto($id) {
    return getOneResult("SELECT * FROM gallery WHERE id = {$id}");
}


// Здесь я не до конца понял как автозаполнить таблицу :(

//$dir = array_splice(scandir("./" . IMG_SMALL),2);
//var_dump($dir);
//foreach ($dir as $file) {
//    getAssocResult("INSERT INTO `gallery`(`name`) VALUES ('{$file}')");
//}




