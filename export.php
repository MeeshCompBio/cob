<?php
    # ##### The server-side code in PHP ####
    # Type sent as part of the URL:
    $type = $_GET['type'];
    $name = $_GET['name'];
    # Get the raw POST data:
    $data = file_get_contents('php://input');

    # Set the content type accordingly:
    if ($type == 'png') {
        header('Content-type: image/png');
    } elseif ($type == 'pdf') {
        header('Content-type: application/pdf');
    } elseif ($type == 'svg') {
       header('Content-type: image/svg+xml');
    } elseif ($type == 'xml') {
        header('Content-type: text/xml');
    } elseif ($type == 'sif'){
        header('Content-type: text/text');
    }

    # To force the browser to download the file:
    header('Content-disposition: attachment; filename="'.$name.'.'.$type .'"');
    # Send the data to the browser:
    print $data;
?>
