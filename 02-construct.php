<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white/80">
    <main class="w-[380px] rounded" >
        <header class="flex gap-6 justify-center items-center border-b pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 hover:scale-75 transition">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </a>
            <h1 class="text-2xl">02 - Construct</h1>
        </header>
        <section class='max-h-[90vh] overflow-y-auto'>
            <?php
                class Playlist {
                    // Attributes
                    private $name;
                    private $artist = Array();
                    private $album = Array();
                    private $cover  = Array();
                    private $year   = Array();

                    // Methods

                    public function __construct($name) {
                        $this->name = $name;
                    }

                    public function setPlaylist($artist, $album, $cover, $year){
                        $this->artist[] = $artist;
                        $this->album[] = $album;
                        $this->cover[]  = $cover;
                        $this->year[]   = $year;
                    }

                    public function getPlaylist(){
                        echo "<div class='p-2 ring-1 rounded-md'> 
                                <h2 class='text-center'> 
                                    PlayList: $this->name
                                    
                                </h2>";
                            for($i = 0; $i < count($this->artist); $i++) {
                                echo "<div class='bg-white/20 flex flex-col gap-2 mb-4 items-center '><img src='".$this->cover[$i]."' alt='Album Cover'>
                                <p><strong> Artist: </strong> ".$this->artist[$i]." </p>
                                <p><strong> Album: </strong> ".$this->album[$i]." </p>
                                <p><strong> Year: </strong> ".$this->year[$i]." </p> <br> 
                                </div>";
                            }
                        echo "</div>";
                    }
                }
                $playList = new PlayList('Favorite Albums');
                $playList->setPlayList('Bjork', 'Post', 'https://tinyurl.com/5x5ewx4m', '1995');
                $playList->setPlayList('The Smiths', 'Hatful of Hollow', 'https://tinyurl.com/46evapsj', '1984');
                $playList->setPlayList('Sigh', 'Shiki', 'https://tinyurl.com/2p9x9e8j', '2022');
                $playList->setPlayList('The Beatles', 'Sgt. Peppers Lonely Hearts Club Band', 'https://tinyurl.com/mpape5cd', '1967');
                $playList->setPlayList('Bjork', 'Debut', 'https://tinyurl.com/ywcc23b8', '1993');
                $playList->getPlayList();
                
                
            
            ?> 
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>