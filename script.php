<?php
// Script para innserir blog post em massa no WordPress

$queryNova = '';
$j = 0;
$pdfId = '446';
$pdfName = 2;
$postName = 2;
for ($id = 458; $id < 474; $id+=2) {
    
    $queryNova .= "INSERT INTO `wsrnp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, 
`post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, 
`to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, 
`menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES ('$id', '1', '2017-02-20 10:07:34', 
'2017-02-20 13:07:34', 
'<!-- wp:pdfemb/pdf-embedder-viewer {\"pdfID\":$pdfId,\"url\":\"http://localhost/sindsuperrn/wp-content/uploads/2020/02/doc-$pdfName.pdf\"} -->\r\n<p class=\"wp-block-pdfemb-pdf-embedder-viewer\"></p>\r\n<!-- /wp:pdfemb/pdf-embedder-viewer -->', 
'doc-$postName', '', 'draft', 'open', 'open', '', '$pdfName', '', '', '2017-02-20 10:07:34', '2017-02-20 13:07:34', '', '0', 'http://localhost/sindsuperrn/?p=$id', '0', 'post', '', '0');";
    $pdfName++;
    $pdfId++;
    $postName++;
    $queryNova .= "\n";

}

// Exporta a query para um arquivo de texto
$novoArquivo = fopen("query.txt", "w");
fwrite($novoArquivo, $queryNova);
fclose($novoArquivo);