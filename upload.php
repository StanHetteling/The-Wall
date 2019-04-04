<form class="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
    <p>Describe your post</p><p class="chrac">(max 128 characters)</p>
    <br>
    <input class="title-upload" type="text" name="tileupload" value="Title" maxlength="128">
    <br>
    Select image to upload
    <br>
    <input class="upload-file" type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <label for="category">Choose category</label>
    <br>
    <select id="category" name="category">
      <option value="australia">Funny</option>
      <option value="canada">Animals</option>
      <option value="usa">Anime</option>
      <option value="usa">Awesome</option>
      <option value="usa">Gaming</option>
      <option value="usa">Gif</option>
      <option value="usa">Movie & TV</option>
      <option value="usa">Pokémon</option>
      <option value="usa">League of Legends</option>
      <option value="usa">PC Matser Race</option>
      <option value="usa">PUBG</option>
      <option value="usa">WTF</option>
      <option value="usa">Savage</option>
      <option value="usa">NSFW</option>
    </select>
    <br>
    <input class="upload-submit" type="submit" value="Post" name="submit">
</form>
