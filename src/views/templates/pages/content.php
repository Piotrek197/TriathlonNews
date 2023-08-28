<h1>Add a new post</h1>

<form method="post" action="/post">

    <label for="title">Post title</label>
    <input type="text" name="title" id="title" autocomplete="off" /><br/>

    <label for="post-body">Post text</label>
    <textarea name="post-body" id="post-body" placeholder="Write something here..."></textarea><br/>

    <label for="category">Category<label>
    <select>
        <option value="">Select category</option>
        <option vaule="run" name="run">run</option>
        <option value="swim" name="swim">swim</option>
        <option value="bike" name="bike">bike</option>
    </select><br/>


    <button type="submit" name="submit-button">Submit</button>

</form>

