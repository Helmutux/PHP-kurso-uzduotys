<!-- 
1.sukurti konstanta su srifto dydziu
2.sukurti paprasta HTML puslapi su (butinai su DOCTYPE ir visais baziniais tag'ais - html, head, body)
3.nustatykiite paragrafu teksto dydi ir spalva style tag'e, kuri patalpinkite head dalyje, ir nurodykite dydzio reiksme is konstantos susikurtos anksciau 
-->

<?php
    define('SIZE', '30px');
    define('COLOR', 'blue');
?>>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    p {
        font-size: <?=SIZE?>;
        color: <?=COLOR?>;
    }
    </style>
    <title>Task 5. Konstantos PHP kalboje</title>
</head>

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui recusandae praesentium iste eaque eos aspernatur
    necessitatibus blanditiis alias nesciunt sequi, quam suscipit cum reiciendis in corrupti sunt, consequatur illo
    nisi. Fugiat ipsa inventore nisi similique impedit quos laboriosam, excepturi repudiandae tenetur reiciendis quis,
    ipsam tempora enim ab porro totam dolor.</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem officia sed quas voluptate saepe. Incidunt,
    perferendis delectus facilis pariatur, maiores quibusdam rerum numquam quasi beatae inventore a quisquam quis
    laudantium vero? Animi quis, nemo veniam quia dolorum quisquam, quaerat earum eveniet excepturi architecto rerum
    similique? Quis architecto est commodi dolore soluta labore in saepe recusandae impedit corrupti, ut veniam eos modi
    at pariatur maiores? Voluptatum veritatis earum officiis ipsam quod eius dignissimos iste aliquam amet delectus
    adipisci, pariatur porro nobis fuga modi vero in aut, natus perferendis quia vel incidunt voluptates. Vel molestias
    accusamus a numquam, maiores architecto ducimus voluptates tempora commodi unde aliquam obcaecati labore ut voluptas
    facere laudantium. Provident doloribus mollitia illo consequatur, quo in non fugiat atque, quisquam eaque aperiam.
    Iusto tempora itaque voluptate adipisci tempore suscipit id magni eum, aspernatur sint, molestiae reprehenderit
    excepturi ullam nam necessitatibus ad odio enim laborum? Dolor officiis suscipit quaerat deserunt.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eum odio accusamus omnis nemo. Illum minus harum
    facere, ipsum assumenda praesentium eligendi. Minus ad laborum, ab voluptas iure harum esse fugiat aliquid quisquam
    beatae necessitatibus distinctio vitae voluptates officiis totam tempora voluptatem hic earum assumenda obcaecati
    cupiditate omnis tempore? Et delectus reiciendis assumenda dolor magni deleniti dignissimos. Vero quae, iure
    voluptatibus repellendus aperiam, laboriosam, atque libero distinctio laborum modi qui adipisci quas consectetur vel
    laudantium voluptatem? Corrupti ex magni magnam odio illo? Cumque animi nobis repellendus, iusto sunt totam
    asperiores fugit? Soluta id delectus quas ex nulla mollitia molestias a.</p>

<body>

</body>

</html>