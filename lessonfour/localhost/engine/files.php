<?php
function getFiles() {
    return array_splice(scandir('docs'), 2);
}

function getGallery() {
    return array_splice(scandir('gallery/small'), 2);
}
