<?php 
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php }
?>


<!-- 
WHILE LOOP:
$names = array("Beegyan", "Roneet", "Rajeev", "Sapkota");
    $count = 0;

    while($count < count($names)){
        echo "<li>Hi , my name is $names[$count]</li>";
        $count++;
    }

WHILE LOOP:
    $names = array("Beegyan", "Roneet", "Rajeev", "Sapkota");
    $count = 1;

    while($count < 100) {
        echo "<li>$count</li>";
        $count++;
    }

FUNCITON:
    function myFirstFunction () {
        echo "<pre>Hello it's me Bigyan.</pre>";
    }
    myFirstFunction();
    myFirstFunction(); 

FUNCTION WITH ARGUMENTS:
    echo(bloginfo('name'));
    function greet($name, $color) {
        echo "<p>Hi, my name is $name & my favorite color is $color</p>";
    }
    greet("Bigyan", "Black");
    greet("Cutie", "Pink");
-->