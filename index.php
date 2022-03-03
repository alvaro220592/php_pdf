<?php

require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Configurações do Dompdf
$options = new Options;
$options->setChRoot(__DIR__); // diretório atual
$options->setIsRemoteEnabled(true);

// Instanciação do Dompdf com as opções configuradas acima
$dompdf = new Dompdf($options);

// Carregando código HTML
// $dompdf->loadHtml("<h4>Teste</h4>");

// Carregando HTML externo(recomendado)
$dompdf->loadHtmlFile(__DIR__ . "/arquivo.html");

// Orientação da página(opcional)
$dompdf->setPaper('a4', 'portrait');

// Renderização do arquivo
$dompdf->render();

// Definição do tipo de conteúdo para que possa ser mostrado no navegador pelo output()
header('Content-type:application/pdf');
echo $dompdf->output();

// Para download no lado cliente(é preciso apagar os 2 comandos anteriores)
// $dompdf->stream('arquivoPDF');

// Para download no próprio servidor ao gerar
file_put_contents(__DIR__ . '/arquivos/arquivoPDF.pdf', $dompdf->output());