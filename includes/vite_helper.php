<?php
define('VITE_HOST', 'http://localhost:5173');
define('VITE_BUILD_DIR', '/dist/');

function vite($entry) {
    $manifestPath = __DIR__ . '/../dist/.vite/manifest.json';
    
    // Check if Vite dev server is running
    $handle = @fopen(VITE_HOST . '/@vite/client', 'r');
    $isDev = $handle !== false;
    if ($handle) fclose($handle);

    if ($isDev) {
        echo '<script type="module" src="' . VITE_HOST . '/@vite/client"></script>';
        echo '<script type="module" src="' . VITE_HOST . '/' . $entry . '"></script>';
    } else {
        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);
            if (isset($manifest[$entry])) {
                $file = $manifest[$entry]['file'];
                echo '<link rel="stylesheet" href="' . VITE_BUILD_DIR . $manifest[$entry]['css'][0] . '">';
                echo '<script type="module" src="' . VITE_BUILD_DIR . $file . '"></script>';
            }
        }
    }
}
?>
