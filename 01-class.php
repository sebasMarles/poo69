<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Class</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-[100vh] flex justify-center items-center text-white/80">
    <main class="w-[380px] h-[600px] bg-gray-500/70 rounded" >
        <header class="flex gap-6 justify-center items-center border-b pb-5">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 hover:scale-75 transition">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
            </a>
            <h1 class="text-2xl">01 - Class</h1>
        </header>
        <section>
            <?php
                class Vehicle {
                    //Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    public function setAttributes($brand, $refer, $model, $color) {
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }

                    public function getAttributes() {
                        return "<div class=' p-4 ring-1 bg-blue-100/50 ring-white/50 rounded-md mb-2'>
                        <p><Strong>Brand:</Strong> $this->brand<p>
                        <p><Strong>Reference:</Strong> $this->refer<p>
                        <p><Strong>Model:</Strong> $this->model<p>
                        <p><Strong>Color:</Strong> $this->color<p>
                        </div>";
                        
                    }


                }
                //crear un objeto
                $vehicle1 = new Vehicle;
                $vehicle1->setAttributes('Volkswagen', 'Tiguan', '2023', 'SpaceGray');
                echo $vehicle1->getAttributes();

                $vehicle2 = new Vehicle;
                $vehicle2->setAttributes('Chevrolet', 'Camaro', '2020', 'Black');
                echo $vehicle2->getAttributes();

                $vehicle3 = new Vehicle;
                $vehicle3->setAttributes('Corvette', 'C8', '2021', 'White');
                echo $vehicle3->getAttributes();

                $vehicle4 = new Vehicle;
                $vehicle4->setAttributes('Renault', 'Renault 4', '1978', 'Blue Shit');
                echo $vehicle4->getAttributes();
                    
                

                //Acceso a atributos
                //echo $vehicle1->brand;
                //$vehicle1->brand = 'Toyota';
                //echo $vehicle1->brand;
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>

</html>