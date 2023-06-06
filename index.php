<!DOCTYPE html>
<html>
<head>
    <title>Classic Apple Sauce Emulator</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-group label {
            flex: 1;
            font-weight: bold;
            margin-right: 10px;
        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group input[type="checkbox"] {
            flex: 2;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .form-group .browse-button {
            flex: 1;
            margin-left: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group .submit-button {
            flex: 1;
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .profile-group {
            margin-top: 20px;
        }

        .profile-group h3 {
            margin-bottom: 10px;
        }

        .profile-group button, .profile-group label {
            margin-right: 10px;
        }

        .load-button {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
    </style>
    <script>
        function setFilePath(inputId, fileInput) {
            var filePathInput = document.getElementById(inputId);
            filePathInput.value = fileInput.value;
        }

        function saveProfile() {
            var profileName = prompt("Enter profile name:");
            if (profileName) {
                var profile = {
                    driveFile: document.getElementById('driveFile').value,
                    memory: document.getElementById('memory').value,
                    bootFromISO: document.getElementById('bootFromISO').checked,
                    isoFile: document.getElementById('isoFile').value,
                    newImage: document.getElementById('newImage').checked,
                    imageName: document.getElementById('imageName').value,
                    imageSize: document.getElementById('imageSize').value,
                    driveFile2: document.getElementById('driveFile2').value
                };
                var a = document.createElement('a');
                a.href = 'data:text/plain;charset=utf-8,' + encodeURIComponent(JSON.stringify(profile));
                a.download = profileName + '.txt';
                a.click();
            }
        }

        function loadProfile(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var profile = JSON.parse(e.target.result);
                document.getElementById('driveFile').value = profile.driveFile;
                document.getElementById('memory').value = profile.memory;
                document.getElementById('bootFromISO').checked = profile.bootFromISO;
                document.getElementById('isoFile').value = profile.isoFile;
                document.getElementById('newImage').checked = profile.newImage;
                document.getElementById('imageName').value = profile.imageName;
                document.getElementById('imageSize').value = profile.imageSize;
                document.getElementById('driveFile2').value = profile.driveFile2;
            };
            reader.readAsText(file);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;"><img src="logo.png"</img>Classic Apple Sauce Emulator</h2>
        <form method="post" action="run.php">
            <div class="form-group">
                <label for="driveFile">Drive File:</label>
                <input type="text" id="driveFile" name="driveFile" placeholder="Enter drive file path">
                <input type="file" id="driveFileBrowse" name="driveFileBrowse" onchange="setFilePath('driveFile', this)">
                <button class="browse-button" onclick="document.getElementById('driveFileBrowse').click()">Browse</button>
            </div>
            <div class="form-group">
                <label for="memory">Memory (MB):</label>
                <input type="text" id="memory" name="memory" placeholder="Enter memory size" value="512">
            </div>
            <div class="form-group">
                <label for="bootFromISO">Boot from ISO:</label>
                <input type="checkbox" id="bootFromISO" name="bootFromISO">
            </div>
            <div class="form-group">
                <label for="isoFile">ISO File:</label>
                <input type="text" id="isoFile" name="isoFile" placeholder="Enter ISO file path">
                <input type="file" id="isoFileBrowse" name="isoFileBrowse" onchange="setFilePath('isoFile', this)">
                <button class="browse-button" onclick="document.getElementById('isoFileBrowse').click()">Browse</button>
            </div> <div class="form-group"> <div class="form-group">
                <label for="newImage">Create New Image:</label>
                <input type="checkbox" id="newImage" name="newImage">
            </div>
                <label for="imageName">Image Name:</label>
                <input type="text" id="imageName" name="imageName" placeholder="Enter image name">
            </div>
           
           
            <div class="form-group">
                <label for="imageSize">Image Size (GB):</label> Max Size Of 2 GB
                <input type="text" id="imageSize" name="imageSize" placeholder="Enter image size" value="2">
            </div>
            <div class="form-group">
                <label for="driveFile2">Drive File 2:</label>
                <input type="text" id="driveFile2" name="driveFile2" placeholder="Enter drive file 2 path">
                <input type="file" id="driveFile2Browse" name="driveFile2Browse" onchange="setFilePath('driveFile2', this)">
                <button class="browse-button" onclick="document.getElementById('driveFile2Browse').click()">Browse</button>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-button">Run Emulator</button> <p>Default Settings Load Mac OS 9.2
            </div>
        </form>
        <div class="profile-group">
            <h3>Profile Management</h3>
            <div>
                <button onclick="saveProfile()">Save Profile</button>
                <input type="file" id="loadProfile" style="display: none;" accept=".txt" onchange="loadProfile(event)">
                <label for="loadProfile" class="load-button">Load Profile</label>
            </div>
        </div>
    </div>
</body>
</html>
