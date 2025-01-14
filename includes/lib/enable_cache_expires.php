<?php

// WPO -> Cache
//###############################
// WPO -> Cache -> Expires
//###############################
	array_push($pymlineashtaccessTemp,'# BEGIN - WPO -> Cache navegador' );
	array_push($pymlineashtaccessTemp,'####### - WPO -> Cache navegador -> Archivos permitidos' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_mime.c>' );
	array_push($pymlineashtaccessTemp,'AddType text/css .css' );
	array_push($pymlineashtaccessTemp,'AddType text/x-component .htc' );
	array_push($pymlineashtaccessTemp,'AddType application/x-javascript .js' );
	array_push($pymlineashtaccessTemp,'AddType application/javascript .js2' );
	array_push($pymlineashtaccessTemp,'AddType text/javascript .js3' );
	array_push($pymlineashtaccessTemp,'AddType text/x-js .js4' );
	array_push($pymlineashtaccessTemp,'AddType video/asf .asf .asx .wax .wmv .wmx' );
	array_push($pymlineashtaccessTemp,'AddType video/avi .avi' );
	array_push($pymlineashtaccessTemp,'AddType image/bmp .bmp' );
	array_push($pymlineashtaccessTemp,'AddType application/java .class' );
	array_push($pymlineashtaccessTemp,'AddType video/divx .divx' );
	array_push($pymlineashtaccessTemp,'AddType application/msword .doc .docx' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-fontobject .eot' );
	array_push($pymlineashtaccessTemp,'AddType application/x-msdownload .exe' );
	array_push($pymlineashtaccessTemp,'AddType image/gif .gif' );
	array_push($pymlineashtaccessTemp,'AddType application/x-gzip .gz .gzip' );
	array_push($pymlineashtaccessTemp,'AddType image/x-icon .ico' );
	array_push($pymlineashtaccessTemp,'AddType image/jpeg .jpg .jpeg .jpe' );
	array_push($pymlineashtaccessTemp,'AddType image/webp .webp' );
	array_push($pymlineashtaccessTemp,'AddType application/json .json' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-access .mdb' );
	array_push($pymlineashtaccessTemp,'AddType audio/midi .mid .midi' );
	array_push($pymlineashtaccessTemp,'AddType video/quicktime .mov .qt' );
	array_push($pymlineashtaccessTemp,'AddType audio/mpeg .mp3 .m4a' );
	array_push($pymlineashtaccessTemp,'AddType video/mp4 .mp4 .m4v' );
	array_push($pymlineashtaccessTemp,'AddType video/mpeg .mpeg .mpg .mpe' );
	array_push($pymlineashtaccessTemp,'AddType video/webm .webm' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-project .mpp' );
	array_push($pymlineashtaccessTemp,'AddType application/x-font-otf .otf' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-opentype ._otf' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.database .odb' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.chart .odc' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.formula .odf' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.graphics .odg' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.presentation .odp' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.spreadsheet .ods' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.oasis.opendocument.text .odt' );
	array_push($pymlineashtaccessTemp,'AddType audio/ogg .ogg' );
	array_push($pymlineashtaccessTemp,'AddType application/pdf .pdf' );
	array_push($pymlineashtaccessTemp,'AddType image/png .png' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-powerpoint .pot .pps .ppt .pptx' );
	array_push($pymlineashtaccessTemp,'AddType audio/x-realaudio .ra .ram' );
	array_push($pymlineashtaccessTemp,'AddType image/svg+xml .svg .svgz' );
	array_push($pymlineashtaccessTemp,'AddType application/x-shockwave-flash .swf' );
	array_push($pymlineashtaccessTemp,'AddType application/x-tar .tar' );
	array_push($pymlineashtaccessTemp,'AddType image/tiff .tif .tiff' );
	array_push($pymlineashtaccessTemp,'AddType application/x-font-ttf .ttf .ttc' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-opentype ._ttf' );
	array_push($pymlineashtaccessTemp,'AddType audio/wav .wav' );
	array_push($pymlineashtaccessTemp,'AddType audio/wma .wma' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-write .wri' );
	array_push($pymlineashtaccessTemp,'AddType application/font-woff .woff' );
	array_push($pymlineashtaccessTemp,'AddType application/font-woff2 .woff2' );
	array_push($pymlineashtaccessTemp,'AddType application/vnd.ms-excel .xla .xls .xlsx .xlt .xlw' );
	array_push($pymlineashtaccessTemp,'AddType application/zip .zip' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'####### - WPO -> Cache navegador -> Cache expires' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_expires.c>' );
	array_push($pymlineashtaccessTemp,'ExpiresActive On' );
	array_push($pymlineashtaccessTemp,'ExpiresByType text/css A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType text/x-component A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-javascript A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/javascript A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType text/javascript A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType text/x-js A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/asf A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/avi A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/bmp A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/java A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/divx A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/msword A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-fontobject A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-msdownload A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/gif A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-gzip A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/x-icon A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/jpeg A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/webp A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/json A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-access A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/midi A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/quicktime A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/mpeg A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/mp4 A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/mpeg A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType video/webm A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-project A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-font-otf A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-opentype A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.database A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.chart A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.formula A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.graphics A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.presentation A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.spreadsheet A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.oasis.opendocument.text A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/ogg A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/pdf A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/png A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-powerpoint A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/x-realaudio A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/svg+xml A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-shockwave-flash A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-tar A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType image/tiff A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/x-font-ttf A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-opentype A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/wav A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType audio/wma A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-write A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/font-woff A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/font-woff2 A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/vnd.ms-excel A31536000' );
	array_push($pymlineashtaccessTemp,'ExpiresByType application/zip A31536000' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'####### - WPO -> Cache navegador -> Gzip' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_deflate.c>' );
	array_push($pymlineashtaccessTemp,'AddOutputFilterByType DEFLATE text/css text/x-component application/x-javascript application/javascript text/javascript text/x-js text/html text/richtext text/plain text/xsd text/xsl text/xml image/bmp application/java application/msword application/vnd.ms-fontobject application/x-msdownload image/x-icon application/json application/vnd.ms-access video/webm application/vnd.ms-project application/x-font-otf application/vnd.ms-opentype application/vnd.oasis.opendocument.database application/vnd.oasis.opendocument.chart application/vnd.oasis.opendocument.formula application/vnd.oasis.opendocument.graphics application/vnd.oasis.opendocument.presentation application/vnd.oasis.opendocument.spreadsheet application/vnd.oasis.opendocument.text audio/ogg application/pdf application/vnd.ms-powerpoint image/svg+xml application/x-shockwave-flash image/tiff application/x-font-ttf application/vnd.ms-opentype audio/wav application/vnd.ms-write application/font-woff application/font-woff2 application/vnd.ms-excel' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_mime.c>' );
	array_push($pymlineashtaccessTemp,'# DEFLATE by extension' );
	array_push($pymlineashtaccessTemp,'AddOutputFilter DEFLATE js css htm html xml' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'<FilesMatch "\.(css|htc|less|js|js2|js3|js4|CSS|HTC|LESS|JS|JS2|JS3|JS4)$">' );
	array_push($pymlineashtaccessTemp,'FileETag MTime Size' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_headers.c>' );
	array_push($pymlineashtaccessTemp,'Header unset Set-Cookie' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'</FilesMatch>' );
	array_push($pymlineashtaccessTemp,'<FilesMatch "\.(html|htm|rtf|rtx|txt|xsd|xsl|xml|HTML|HTM|RTF|RTX|TXT|XSD|XSL|XML)$">' );
	array_push($pymlineashtaccessTemp,'FileETag MTime Size' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_headers.c>' );
	array_push($pymlineashtaccessTemp,'Header append Vary User-Agent env=!dont-vary' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'</FilesMatch>' );
	array_push($pymlineashtaccessTemp,'<FilesMatch "\.(asf|asx|wax|wmv|wmx|avi|bmp|class|divx|doc|docx|eot|exe|gif|gz|gzip|ico|jpg|jpeg|jpe|webp|json|mdb|mid|midi|mov|qt|mp3|m4a|mp4|m4v|mpeg|mpg|mpe|webm|mpp|otf|_otf|odb|odc|odf|odg|odp|ods|odt|ogg|pdf|png|pot|pps|ppt|pptx|ra|ram|svg|svgz|swf|tar|tif|tiff|ttf|ttc|_ttf|wav|wma|wri|woff|woff2|xla|xls|xlsx|xlt|xlw|zip|ASF|ASX|WAX|WMV|WMX|AVI|BMP|CLASS|DIVX|DOC|DOCX|EOT|EXE|GIF|GZ|GZIP|ICO|JPG|JPEG|JPE|WEBP|JSON|MDB|MID|MIDI|MOV|QT|MP3|M4A|MP4|M4V|MPEG|MPG|MPE|WEBM|MPP|OTF|_OTF|ODB|ODC|ODF|ODG|ODP|ODS|ODT|OGG|PDF|PNG|POT|PPS|PPT|PPTX|RA|RAM|SVG|SVGZ|SWF|TAR|TIF|TIFF|TTF|TTC|_TTF|WAV|WMA|WRI|WOFF|WOFF2|XLA|XLS|XLSX|XLT|XLW|ZIP)$">' );
	array_push($pymlineashtaccessTemp,'FileETag MTime Size' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_headers.c>' );
	array_push($pymlineashtaccessTemp,'Header unset Set-Cookie' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'</FilesMatch>' );
	array_push($pymlineashtaccessTemp,'<FilesMatch "\.(bmp|class|doc|docx|eot|exe|ico|json|mdb|webm|mpp|otf|_otf|odb|odc|odf|odg|odp|ods|odt|ogg|pdf|pot|pps|ppt|pptx|svg|svgz|swf|tif|tiff|ttf|ttc|_ttf|wav|wri|woff|woff2|xla|xls|xlsx|xlt|xlw|BMP|CLASS|DOC|DOCX|EOT|EXE|ICO|JSON|MDB|WEBM|MPP|OTF|_OTF|ODB|ODC|ODF|ODG|ODP|ODS|ODT|OGG|PDF|POT|PPS|PPT|PPTX|SVG|SVGZ|SWF|TIF|TIFF|TTF|TTC|_TTF|WAV|WRI|WOFF|WOFF2|XLA|XLS|XLSX|XLT|XLW)$">' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_headers.c>' );
	array_push($pymlineashtaccessTemp,'Header unset Last-Modified' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp,'</FilesMatch>' );
	array_push($pymlineashtaccessTemp,'<IfModule mod_headers.c>' );
	array_push($pymlineashtaccessTemp,'Header set Referrer-Policy "no-referrer-when-downgrade"' );
	array_push($pymlineashtaccessTemp,'</IfModule>' );
	array_push($pymlineashtaccessTemp, '# END - WPO -> Cache navegador' );


?>