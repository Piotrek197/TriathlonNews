posts page


<ul>
<?php


    foreach($posts as $post){
        
        echo <<<END
            <li>${post['title']}</li>    
        END;
    }

?>
</ul>