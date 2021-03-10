<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Deret Aritmatika</title>
        <link rel="stylesheet" href="aritmatikafix.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="aritmatikafix.php" class="aritmatika-form" method="GET">
            <h1>Menghitung  Deret Aritmatika</h1>

            <div class="txtb">
                <input type="number" name="inp1">
            <span data-placeholder="Bilangan Pertama"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="inp2">
                <span data-placeholder="Beda"></span>
            </div>

            <div class="txtb">
                <input type="number" name="ke">
                <span data-placeholder="Suku ke-"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="hitung">

            <?php 

                if(isset($_GET['hitung']))
                {
                    $awal= $_GET['inp1'];
                    $beda = $_GET['inp2'];
                    $n = $_GET['ke'];

                    $output = $awal + ($n - 1)* $beda;
                    echo "Suku ke- $n bilangan tersebut adalah $output  <br>" ;
                    
                    $hasil= $awal + $beda;
                    echo "Barisan angkanya : $awal $hasil";

                    for ($i=$awal; $i<=8; $i++)
                    {

                    $output = $hasil+$beda;
                    echo " $output";
                    
                    $awal = $hasil;
                    $hasil = $output;
                    }

                    
                }

            ?>

        </form>
        <!-- Akhir Isi Menu Sign Up -->

        <!-- Awal Linear Gradien -->
        <script type="text/javascript">
            $(".txtb input").on("focus",function(){
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur",function(){
                if($(this).val()== "")
                $(this).removeClass("focus");
            });
        
        </script>
        <!-- Akhir Linear Gradien -->

    </body>
  ...
</html>