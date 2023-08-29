posts page


<ul>
<?php


    foreach($posts as $post){
        
        echo <<<END
            <li>${post['title']}</li>
            <form action="/posts" method="post">
                <input type="hidden" name="id" value="${post['id']}"/>
                <button type="submit" formaction="/delete" name="delete">Delete Post</button>
                <button type="submit" formaction="/update" name="update">Update Post</button>
            </form>
        END;
    }

?>
</ul>