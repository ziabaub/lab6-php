<?php
/**
 * Created by PhpStorm.
 * User: ziadelsarrih
 * Date: 2019-04-27
 * Time: 12:57
 */
define("cookieName", "myPage");
if (isset($_COOKIE[cookieName])) {
    $data = explode(',', $_COOKIE[cookieName]);
} else {
    $data = array('white','gray','25','black','18');
}

?>
<!Doctype html>
<html lang="en">
<head>
    <title>lab6</title>
    <link rel="stylesheet" href="stylesheet2.css">
</head>
<body bgcolor="<?php echo $data[0] ?>" style="width: 100% ; height: 50px">
<header class="headClass"
        style="background: <?php echo $data[1] ?> ; font-size: <?php echo $data[2] ?>px ;color: blue ; margin:0;">
    <div class="header">This Is My Web</div>
</header>

<main style="background-color: <?php echo $data[3] ?> ; font-size: <?php echo $data[4] ?> ">
    <article>
        After World War II, Ruska resumed work at Siemens, where he continued to develop the electron microscope,
        producing the first microscope with 100k magnification.[12] The fundamental structure of this microscope design,
        with multi-stage beam preparation optics, is still used in modern microscopes. The worldwide electron microscopy
        community advanced with electron microscopes being manufactured in Manchester UK, the USA (RCA), Germany
        (Siemens)
        and Japan (JEOL). The first international conference in electron microscopy was in Delft in 1949, with more than
        one hundred attendees.[11] Later conferences included the "First" international conference in Paris, 1950 and
        then in London in 1954.
    </article>
    <article>
        After World War II, Ruska resumed work at Siemens, where he continued to develop the electron microscope,
        producing the first microscope with 100k magnification.[12] The fundamental structure of this microscope design,
        with multi-stage beam preparation optics, is still used in modern microscopes. The worldwide electron microscopy
        community advanced with electron microscopes being manufactured in Manchester UK, the USA (RCA), Germany
        (Siemens)
        and Japan (JEOL). The first international conference in electron microscopy was in Delft in 1949, with more than
        one hundred attendees.[11] Later conferences included the "First" international conference in Paris, 1950 and
        then in London in 1954.
    </article>
    <article>
        After World War II, Ruska resumed work at Siemens, where he continued to develop the electron microscope,
        producing the first microscope with 100k magnification.[12] The fundamental structure of this microscope design,
        with multi-stage beam preparation optics, is still used in modern microscopes. The worldwide electron microscopy
        community advanced with electron microscopes being manufactured in Manchester UK, the USA (RCA), Germany
        (Siemens)
        and Japan (JEOL). The first international conference in electron microscopy was in Delft in 1949, with more than
        one hundred attendees.[11] Later conferences included the "First" international conference in Paris, 1950 and
        then in London in 1954.
    </article>
    <article>
        After World War II, Ruska resumed work at Siemens, where he continued to develop the electron microscope,
        producing the first microscope with 100k magnification.[12] The fundamental structure of this microscope design,
        with multi-stage beam preparation optics, is still used in modern microscopes. The worldwide electron microscopy
        community advanced with electron microscopes being manufactured in Manchester UK, the USA (RCA), Germany
        (Siemens)
        and Japan (JEOL). The first international conference in electron microscopy was in Delft in 1949, with more than
        one hundred attendees.[11] Later conferences included the "First" international conference in Paris, 1950 and
        then in London in 1954.
    </article>
</main>

</body>

</html>
