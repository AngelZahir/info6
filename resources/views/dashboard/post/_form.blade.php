
<div class="form-group">
  <label for="title">Titulo</label>
  <input type="text" class="form-control" name='title' id="title" value="{{ old('title', $post->title)}}" >

</div>
<div class="form-group">
  <label for="url_clean">Url Limpia</label>
  <input type="text" class="form-control" name="url_clean" id="url_clean " value="{{ old('url_clean', $post->url_clean)}}">
</div>
<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" id="content" name="content" rows="3" >{{ old('content', $post->content)}}</textarea>
  </div>
<button type="submit" class="btn btn-primary">Enviar</button>