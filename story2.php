<!doctype html>
<html>
    <head>
     <link rel="stylesheet" href="stylestory.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">     
    </head>
    <body>
        <h1> The Novel: Fifty Shades of #5C564A </h1>
        <p>
        <?php
        
        $d = file_get_contents('data2.json');
        $d = json_decode($d, true);
        
            $a = $d[0];
    
            echo "He " .$a[0]. " his " .$a[1]. " so his " .$a[2]. " pushes against me ... Yes. Right there ... He " .$a[3]. " his " .$a[4]. " along my " .$a[5]. ", eases back, then " .$a[6]. " into me again - so " .$a[7]. ", so " .$a[8]. ", so " .$a[9]. " - his " .$a[10]. " pressing down on me, his " .$a[11]. " and his " .$a[12]. " on either side of my " .$a[13]. ". Oh, Ana! He " .$a[14]. " as he lets go, my name a " .$a[15]. " on his " .$a[16]. " as he finds his " .$a[17]. ". His " .$a[18]. " rests on my " .$a[19]. ", his " .$a[20]. " wrapped around me ... I just want to enjoy the " .$a[21]. " " .$a[22]. " afterglow of making " .$a[23]. " with Christian Grey, because that's what we've done: " .$a[24]. ", " .$a[25]. " " .$a[26]. ".";
        ?>
        </p>
        <br>
        <footer><a href="index.html">Wanna Try Another One?</a>
        </footer>
    </body>
</html>