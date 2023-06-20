<div class="flex w-full mt-2 space-x-3 max-w-xs">
        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100"></div>
        <div>
          <div class="bg-gray-100 p-3 rounded-r-lg rounded-bl-lg">
            <p class="text-sm">Welcome to our AI-powered live chat! How can I assist you today?</p>
          </div>
          <span class="text-xs text-gray-500 leading-none">Just now</span>
        </div>
      </div>

<?php
require_once 'conn.php';
// SQL query to select data
$sql = "SELECT * FROM messages ORDER BY sent_at";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Loop through the rows of data
    while ($row = $result->fetch_assoc()) {
        // Access data fields
        $user_id = $row["user_id"];
        $message_text = $row["message_text"];
        $message_type = $row["message_type"];
        $sent_at = $row["sent_at"];

        // Do something with the data
        if ($user_id == 1) {
?>
                <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                  <div>
                    <div class="bg-gray-900 text-white p-3 rounded-l-lg rounded-br-lg">
                      <p class="text-sm flex">
                        <?php 

                        if ($message_type == 'v') {
                          echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
</svg>
 &nbsp; Voice';
                        } else {
                          echo $message_text;
                        }
                        



                    ?></p>
                    </div>
                    <span class="text-xs text-gray-500 leading-none"><?php echo $sent_at;   ?></span>
                  </div>
                  <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100"></div>
                </div>
<?php
        }elseif ($user_id == 0) {
          ?>
          <div class="flex w-full mt-2 space-x-3 max-w-xs">
        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-100"></div>
        <div>
          <div class="bg-gray-100 p-3 rounded-t-lg ">
            <p class="text-sm flex">Great! We have successfully found relevant results based on your voice command.</p>
          </div>
          
            

              <?php 

                        if ($message_type == 'u') {
                          echo '
                          <a href="'.$message_text.'" target="_blank">
                          <div class="bg-gray-200 text-gray-900 p-3  rounded-b-lg hover:bg-gray-900 hover:text-white">
                          <p class="text-sm flex">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>

                             &nbsp; Open Search Result
                             </p>
                              </div>
                             </a>
                          ';
                        } else {
                          echo $message_text;
                        }
                        



                    ?>
         
          <span class="text-xs text-gray-500 leading-none"><?php echo $sent_at;   ?></span>
        </div>
      </div>
<?php
        }

    }
} else {
    echo "Start Chating.";
}

// Close the connection
$conn->close();
?>
