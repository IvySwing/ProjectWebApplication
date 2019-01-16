<!doctype html>
<html>
    <body>
        <?php
        
        $d = file_get_contents('data1.json');
        $d = json_decode($d, true);
        
            $a = $d[0];
    
            echo $a[0]. " is a normal " .$a[1]. ". Then, one day a " .$a[2]. " explodes, causing a " .$a[3]. " to blow up and a nearby " .$a[4]. " erupts into a " .$a[5]. " of flames. " .$a[6]. " realizes that he's being chased by the partially shut-down goverment, who's trying to " .$a[7]. " him. While on the run, he teams up with an incredibly attractive woman named " .$a[8]. " , who has an incredible " .$a[9]. " . She may be from the streets, but she can " .$a[10]. " like nobody's business. The duo decide to turn the tables on their pursuers by blowing up a " .$a[11]. " which triggers a chain reaction, causing the local " .$a[12]. " , " .$a[13]. " and the " .$a[14]. " to explode. Then, the bad guys' helicopter gets " .$a[15]. " by a piece of " .$a[16]. " from when the " .$a[17]. " exploded, and the helicopter explodes and falls onto a " .$a[18]. " , causing it to " .$a[19]. " , which shoots a fireball straight into the heart of " .$a[20]. " and destroys the bad guy leader. Everything is " .$a[21]. " and the two decide that such a " .$a[22]. " ordeal has caused them to fall in " .$a[23]. " with each other. They decide to celebrate by " .$a[24]. "ing on the " .$a[25]. " , and they even managed to use a " .$a[26]. " from the beginning of the movie, to " .$a[27]. " the whole story together. ";
        ?>
    </body>
</html>