<form action="/admin/articles" method="post">
    <input type="text" name="title" placeholder="Title">
    <br>
    <textarea name="content" id="" cols="30" rows="10" placeholder="Content"></textarea>
    <br>
    @csrf
    <input type="submit" value="Lưu">
</form>