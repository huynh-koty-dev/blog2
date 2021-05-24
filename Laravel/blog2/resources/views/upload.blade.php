<h1>Upload File</h1>
<form action="uploadFile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="uploadFile"><br><br>
    <button type="submit">Upload</button>

</form>