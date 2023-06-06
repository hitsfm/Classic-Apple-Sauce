<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form inputs
    $driveFile = $_POST["driveFile"];
    $memory = $_POST["memory"];
    $bootFromISO = isset($_POST["bootFromISO"]);
    $isoFile = $_POST["isoFile"];
    $newImage = isset($_POST["newImage"]);
    $imageName = $_POST["imageName"];
    $imageSize = $_POST["imageSize"];
    $driveFile2 = $_POST["driveFile2"];

    // Default values
    $defaultDriveFile = "MacOS9.img";
    $defaultMemory = "512";
    $defaultDriveFile2 = "drive2.img";

    // If drive file is empty, use default
    if (empty($driveFile)) {
        $driveFile = $defaultDriveFile;
    }

    // If memory is empty, use default
    if (empty($memory)) {
        $memory = $defaultMemory;
    }

    // Generate the command script contents
    $commandScriptContents = '@echo off
qemu-system-ppc-screamer ^
-cpu G3 ^
-L pc-bios ^
-M mac99,via=pmu ^
-m ' . $memory . ' ^
-display sdl ^
-boot c';

    // Append drive file options
    $commandScriptContents .= ' ^
-drive file="' . $driveFile . '",format=raw,media=disk';

    // Append default drive2.img as the second drive if no user input
    if (empty($driveFile2)) {
        $driveFile2 = $defaultDriveFile2;
    }
    $commandScriptContents .= ' ^
-drive file="' . $driveFile2 . '",format=raw,media=disk';

    // If boot from ISO is selected and ISO file is provided, update the command script
    if ($bootFromISO && !empty($isoFile)) {
        $commandScriptContents .= ' ^
-boot d ^
-cdrom "' . $isoFile . '"';
    }

    // If create new image is selected and image name is provided, create the image file
    if ($newImage && !empty($imageName)) {
        $imageSizeGB = min($imageSize, 2); // Limit size to 2GB
        $imagePath = __DIR__ . '\\' . $imageName . '.img'; // Image file path
        exec('qemu-img create -f raw "' . $imagePath . '" ' . $imageSizeGB . 'G'); // Create the image file
        $commandScriptContents .= ' ^
-drive file="' . $imagePath . '",format=raw,media=disk';
    }

    // Save the command script
    file_put_contents("qemu.bat", $commandScriptContents);

    // Run the command script
    exec('start /B qemu.bat');
}
?>
