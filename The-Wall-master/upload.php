<form class="uploadform" action="upload.php" method="post" enctype="multipart/form-data">
    <p>Describe your post</p><p class="chrac">(max 128 characters)</p>
    <br>
    <input class="title-upload" type="text" name="tileupload" placeholder="Title.." maxlength="128">
    <br>
    Select image to upload
    <br>
    <img src="" style="display:none" height="200" id="image">
    <br>
    <input type="file" onchange="showImage.call(this)">
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
<script>
  function showImage()
  {
    if(this.files && this.files[0])
    {
      var obj = new FileReader();
      obj.onload = function(data){
        var image = document.getElementById("image");
        image.src = data.target.result;
        image.style.display = "inline-block";

      }
      obj.readAsDataURL(this.files[0]);
    }
  }
</script>
