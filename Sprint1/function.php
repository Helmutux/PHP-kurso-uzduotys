<?php

if($_GET){
    if(isset($_GET['create'])){
        create();
    } elseif (isset($_GET['delete'])){
        delete();
    }
}

function create()
{
    echo "The create directory function is called.";
}
function delete()
{
    echo "The delete function is called.";
}

?>



