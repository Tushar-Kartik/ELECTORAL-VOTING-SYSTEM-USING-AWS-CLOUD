<!DOCTYPE html>
<html>
<head>
	<title>Scan QR Code</title>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
	<style>
		#video-container {
			display: flex;
			flex-wrap: wrap;
		}

		#video-preview {
			width: 300px;
			height: 300px;
		}

		#qr-input {
			width: 500px;
            height: 30px;
			padding: 10px;
			font-size: 20px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Scan QR Code</h1>

    
	<div id="video-container">
		<video id="video-preview"></video>
    </div>
    
    <!-- input feild  -->
    <div>
		<input type="text" id="qr-input" placeholder="Scan QR Code">
	</div>
    <!-- ----------------->


	<script>
		var scanner = new Instascan.Scanner({ video: document.getElementById('video-preview'), scanPeriod: 5 });

		scanner.addListener('scan', function (content) {
			document.getElementById('qr-input').value = content;
		});

		Instascan.Camera.getCameras().then(function (cameras) {
			if (cameras.length > 0) {
				var selectedCamera = cameras[0];
				if (cameras.length > 1) {
					// Ask user to select a camera
					// ...
				}

				scanner.start(selectedCamera);
			} else {
				console.error('No cameras found.');
			}
		}).catch(function (e) {
			console.error(e);
		});
	</script>

</body>
</html>
