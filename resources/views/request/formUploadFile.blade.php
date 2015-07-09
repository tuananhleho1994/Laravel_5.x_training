
<form action="{{ url('request/file') }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Upload File : <input type="file" name="photo"><br>
    <input type="submit" name="ok" value="Upload">
</form>