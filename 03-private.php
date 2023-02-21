<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 - Private</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white/80">
    <main class="w-[380px] h-[600px] bg-gray-500/70 rounded" >
        <header class="flex gap-6 justify-center items-center border-b pb-5 ">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 hover:scale-75 transition">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </a>
            <h1 class="text-2xl">03 - Private</h1>
        </header>
        <section>
            <h2 class="text-center text2x1 mb-6">Table Maker</h2>
            <form class="p-2 grid grid-cols-2 mb-4 justify-center gap-4 ring-2 bg-white/15 ring-white/50 rounded-md" action="" method="post">
                <div class="flex flex-col items-center gap-4">
                    <label>Rows:</label>
                    <input type="range" name="nr" min="1" max="13" step="1" oninput="onr.value=this.value">
                    <output id="onr">1</output>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <label>Columns:</label>
                    <input type="range" name="nc" min="1" max="13" step="1" oninput="onc.value=this.value">
                    <output id="onc">1</output>
                </div>
                <button class="p-2 bg-blue-300 w-[360px] text-black rounded-md hover:scale-95 transition-all">Make Table</button>
            </form>
            <?php 
                class Table {
                    private $nr;
                    private $nc;

                    public function __construct($nr, $nc) {
                        $this->nr = $nr;
                        $this->nc = $nc;
                        $this->makeTable();
                    }
                    private function makeTable() {
                        echo "<table class='border-collapse mx-auto'>";
                        for($r = 1; $r <= $this->nr; $r++) {
                            echo "<tr>";
                            for($c = 1; $c <= $this->nc; $c++){
                                echo "<td class='p-3 ring-1 rounded-md ring-white/50'> </td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                }
                if ($_POST) {
                    $table = new Table($_POST['nr'], $_POST['nc']);
                }
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>