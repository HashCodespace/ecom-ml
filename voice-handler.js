window.onload = function() {
  const recordButton = document.getElementById('record-btn');
  const voicePulse = document.getElementById('voice-pulse');
  const chatInputText = document.getElementById('chatInputText');
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
          recordButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" /></svg>`;
          recordButton.classList.toggle('bg-gray-900');
          voicePulse.classList.toggle('hidden');
          voicePulse.classList.toggle('animate-ping');
          chatInputText.placeholder = " Listening...";

        } else {
          mediaRecorder.stop();
          recordButton.classList.toggle('bg-gray-900');
          voicePulse.classList.toggle('hidden');
          voicePulse.classList.toggle('animate-ping');
          recordButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" /></svg>`;
        }
      };

      mediaRecorder.onstop = function() {
        const blob = new Blob(chunks, { type: 'audio/wav' });
        chunks = [];
        const audioURL = URL.createObjectURL(blob);
        audioElement.src = audioURL;
        chatInputText.classList.add('hidden');
        audioElement.classList.remove('hidden');
        saveButton.onclick = function() {
          resetFeilds();
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
        console.log(response);
      } else {
        console.error('Error uploading audio file.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  }

  function resetFeilds() {
    chatInputText.classList.remove('hidden');
    audioElement.classList.add('hidden');
    chatInputText.placeholder = " Write your message!";

  }
};
