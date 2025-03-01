<?php
  require_once 'Baju.php';
  if (session_status() == PHP_SESSION_NONE) { session_start(); }
  
  if (!isset($_SESSION['list'])) {
      $_SESSION['list'] = [
        new Baju(1, "Kostum Lebah", "Kostum", "Polyester", "Kuning", "Kucing", "M", "BeeSuit", 8, 160000, "BeeSuit.jpg"),
        new Baju(2, "Kaos Bergaris", "Polos", "Katun", "Biru", "Anjing", "L", "StripePaws", 12, 55000, "StripePaws.jpg"),
        new Baju(3, "Jas Formal", "Formal", "Wool", "Hitam", "Kelinci", "XL", "BunnyTux", 2, 1200000, "BunnyTux.jpg"),
        new Baju(4, "Sweater Rajut", "Rajut", "Wool", "Abu-abu", "Hamster", "S", "HammyKnit", 5, 180000, "HammyKnit.jpg"),
        new Baju(5, "Rompi Denim", "Polos", "Denim", "Biru", "Kura-kura", "XS", "TurtleDenim", 10, 30000, "TurtleDenim.jpg"),
      ];
  }
  $images = glob('images/*.*', GLOB_BRACE);
  $list = $_SESSION['list'];
?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="_favicon.jpg">
      <title>Daneswara's Petshop</title>
      <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="font-sans">
      <nav class="flex justify-between bg-gray-800 text-white px-8 py-auto h-[10vh] flex items-center shadow-lg z-10">
        <h1 class="font-bold text-lg">Daneswara's Petshop</h1>
        <div class="flex gap-8">
          <button onclick="toggleCLI()" class="focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 2h-16C3 2 2 3 2 4v16C2 21 3 22 4 22h16C21 22 22 21 22 20v-16C22 3 21 2 20 2M6 10L11 14L6 18M13 18h5"></path>
            </svg>
          </button>
          <button onclick="toggleSidebar()" class="focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </nav>
      <aside class="fixed right-0 p-8 w-[35%] h-[90vh] bg-gray-700 text-white transition-all duration-300 transform translate-x-[100%] z-8">
        <div class="grid grid-cols-4 gap-4">
          <?php foreach ($images as $item) { ?>
          <div class="flex flex-col items-center">
            <img src="<?php echo $item; ?>" class="w-full h-[5.25rem] object-cover rounded-lg mb-1 ratio-1x1">
            <h3 class="text-sm text-semibold"><?php echo basename($item); ?></h3>
          </div>
          <?php } ?>
        </div>
      </aside>
      <main class="w-full flex h-[80vh] justify-between container my-[5vh] px-8 gap-16">
        <section class="w-full h-full overflow-y-auto shadow-lg rounded-lg outline-none"
          style="scrollbar-width: none;" id="table-container"
        >
        <?php include ('list.php'); ?>
        </section>
        <section class="fixed bottom-0 left-0 w-full transition-all duration-300 transform translate-y-[100%] z-9" id="cli-section">
          <div class="flex flex-col justify-between h-full bg-gray-900 text-white p-4">
            <div>
              <div id="cli"
                class="h-[30vh] overflow-y-auto bg-black p-2 font-mono text-sm rounded-lg"
                style="scrollbar-width: none;"
              >
                <p>Welcome to Daneswara's Petshop CLI!</p>
              </div>
            </div>
            <input type="text" id="cli-input" class="w-full mt-4 p-2 bg-gray-800 text-sm text-white border border-gray-700 rounded-lg outline-none" placeholder="Enter command...">
          </div>

        </section>
      </main>
      <script>
        const cli = document.getElementById('cli');
        const cliInput = document.getElementById('cli-input');

        cliInput.addEventListener('keydown', function(event) {
          if (event.key === 'Enter') {
            const command = cliInput.value.trim();
            if (command) {
              appendToCLI(`<br>Petshop> ${command}`);
              cliInput.value = '';

              fetch('cli_handler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ command })
              })
              .then(response => response.json())
              .then(data => {
                appendToCLI(data.message);
                if (data.refresh) refreshTable();
              });
            }
          }
        });

        function appendToCLI(message) {
          const output = document.createElement('p');
          output.innerHTML = message;
          cli.appendChild(output);
          cli.scrollTop = cli.scrollHeight;
        }

        function refreshTable() {
          fetch('list.php').then(response => response.text())
          .then(html => document.getElementById('table-container').innerHTML = html);
        }

        function toggleSidebar() {
          const sidebar = document.querySelector('aside');
            sidebar.classList.toggle('translate-x-[100%]');
        }

        function toggleCLI() {
          const cli = document.querySelector('#cli-section');
          cli.classList.toggle('translate-y-[100%]');
        }
      </script>
    </body>
  </html>
