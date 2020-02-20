<?php

// Coleta o nome de todos os arquivos do diretório doc

foreach (new DirectoryIterator("./doc/") as $file) {
    if ($file->isFile()) {
        print $file->getFilename() . "\n";
    }
}