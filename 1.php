<!DOCTYPE html>
<html>
<head>
  <title>Voice Recorder</title>
  <style>
    #record-btn {
      background-color: red;
      color: white;
      padding: 10px;
      cursor: pointer;
    }

    #save-btn {
      background-color: green;
      color: white;
      padding: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Voice Recorder</h1>
  <button id="record-btn">Record</button>
  <audio id="audio" controls></audio>
  <button id="save-btn">Save</button>
  <script>
    window.onload = function() {
      const recordButton = document.getElementById('record-btn');
      const saveButton = document.getElementById('save-btn');
      const audioElement = document.getElementById('audio');
      let mediaRecorder;
      let chunks = [];

      navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
          mediaRecorder = new MediaRecorder(stream);
          mediaRecorder.ondataavailable = function(e) {
            chunks.push(e.data);
          };

          recordButton.onclick = function() {
            if (mediaRecorder.state === 'inactive') {
              mediaRecorder.start();
              recordButton.innerHTML = 'Stop';
            } else {
              mediaRecorder.stop();
              recordButton.innerHTML = 'Record';
            }
          };

          mediaRecorder.onstop = function() {
            const blob = new Blob(chunks, { type: 'audio/wav' });
            chunks = [];
            const audioURL = URL.createObjectURL(blob);
            audioElement.src = audioURL;
            saveButton.onclick = function() {
              saveAudio(blob);
            };
          };
        });

      function saveAudio(blob) {
        const formData = new FormData();
        formData.append('audio', blob, `${Date.now()}recording.wav`);

        fetch('save.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (response.ok) {
            console.log('Audio file saved successfully.');
          } else {
            console.error('Error uploading audio file.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
      }
    };
  </script>
</body>
</html>
