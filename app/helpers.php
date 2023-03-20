<!--
Implement the helper function for uploading images:

Create a new helper file at app/helpers.php: -->
<?php

function uploadImage($image, $destinationPath)
{
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move($destinationPath, $imageName);
    return $destinationPath . '/' . $imageName;
}

