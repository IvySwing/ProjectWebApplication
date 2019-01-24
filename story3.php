<!doctype html>
<html>
    <head>
     <link rel="stylesheet" href="stylestory.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">     
    </head>
    <body>
        <h1> The Stump Speech </h1>
        <p>
        <?php
        
        $d = file_get_contents('data3.json');
        $d = json_decode($d, true);
        
            $a = $d[0];
    
            echo "Ladies and Gentlemen, on this " .$a[0]. " occasion it is a privilege to address such a/an " .$a[1]. "-looking group of " .$a[2]. ". I can tell from your smiling " .$a[3]. " that you will support the " .$a[4]. " program in the coming election. I promise that, if elected, there will be a/an " .$a[5]. " in every " .$a[6]. " and two " .$a[7]. " in every garage. I want to warn you against my " .$a[8]. " opponent, Mr. " .$a[9]. ". This man is nothing but a/an " .$a[10]. " " .$a[11]. ". He is of " .$a[12]. " character and is working with " .$a[13]. " in glove with the criminal element. If elected, I promise to eliminate vice. I will keep the " .$a[13]. " off the city's streets. I will keep crooks from dipping their " .$a[14]. " in the public till. I promise you " .$a[15]. " government, " .$a[16]. " taxes, and " .$a[17]. " schools."
        ?>
        </p>
        <br>
        <footer><a href="index.html">Wanna Try Another One?</a>
        </footer>
    </body>
</html>