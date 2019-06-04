<form action="/admin/articles/{{ $article->id }}" method="post">
    <input type="text" name="id" placeholder="ID" value="{{ $article->id }}" readonly>
    <br>
    <input type="text" name="title" placeholder="Title" 
    value="{{ $article->title }}">
    <br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="Content">
        {{ $article->title }}
    </textarea>
    <br>
    @csrf
    <input type="submit" value="Lưu">
</form>