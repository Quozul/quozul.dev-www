<?php
ini_set("display_errors", 1);

// Load .env
$env_file = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/.env");
$env = preg_split("/[\n\r]+/", $env_file);
foreach ($env as $item) putenv($item);

if (isset($_SERVER["HTTP_RANGE"])) {
    $video_path = getenv("PUBLIC_FOLDER") . "/test/out_dashinit.mp4";
    $size = filesize($video_path);
    $mime = mime_content_type($video_path);

    list($start, $end) = explode("-", $_SERVER["HTTP_RANGE"], 2);

    header("Content-Range: bytes $start-$end/$size");
    header("Accept-Ranges: bytes");
    header("Content-Type: $mime");

    if (0 > $start || $end > $size) {
        http_response_code(416); // Requested Range Not Satisfiable
        exit();
    }

    $length = $end - $start + 1;
    header("Content-Length: " . $length);

    $file = fopen($video_path, "rb");

    fseek($file, $start);
    http_response_code(206);

    set_time_limit(0);
    echo fread($file, $length);
    ob_flush();
    flush();
    fclose($file);
    exit();
} else {
    // Read MPD file
    $mpd_path = getenv("PUBLIC_FOLDER") . "/test/out_dash.mpd";

    header("Content-Type: application/dash+xml");

    $xml = simplexml_load_file($mpd_path);
    echo json_encode($xml);
    exit();
}