<div>
 <h1>Upload file</h1>
 <form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <input type="submit" value="Upload file">

 </form>
</div>
