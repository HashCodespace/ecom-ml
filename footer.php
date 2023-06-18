<?php



// Close the connection
$conn->close();
?>

  <script type="text/javascript" defer>
    const toggleButton = document.getElementById('toggleChatButton');
    const toggleCloseButton = document.getElementById('chatClose');
    const chatMain = document.getElementById('chatMain');

    toggleButton.addEventListener('click', function() {
      chatMain.classList.toggle('hidden');
      // chatMain.classList.toggle('transition');
      // chatMain.classList.toggle('ease-out');
      chatMain.classList.toggle('transform');
      chatMain.classList.toggle('opacity-0');
      chatMain.classList.toggle('scale-95');
      chatMain.classList.toggle('opacity-100');
      chatMain.classList.toggle('scale-100');
    });


    toggleCloseButton.addEventListener('click', function() {
      chatMain.classList.toggle('hidden');
      // chatMain.classList.toggle('transition');
      // chatMain.classList.toggle('ease-out');
      chatMain.classList.toggle('transform');
      chatMain.classList.toggle('opacity-0');
      chatMain.classList.toggle('scale-95');
      chatMain.classList.toggle('opacity-100');
      chatMain.classList.toggle('scale-100');
    });

  </script>
  <script defer type="text/javascript" src="voice-handler.js"></script>

<script>
  const el = document.getElementById('messages')
  el.scrollTop = el.scrollHeight
</script>
</body>
</html>
