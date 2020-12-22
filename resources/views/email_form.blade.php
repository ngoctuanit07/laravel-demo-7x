<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <title>Send email</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/postsendemail" method="post" class="was-validated">
                @csrf
                <div class="form-group">
                    <label
                        for="uname">Subject :</label>
                    <input type="text" class="form-control" name="subject"/>


                </div>
                <div class="form-group">
                    <label
                        for="uname">Email :</label>
                    <input type="text" class="form-control" name="emailto"/>


                </div>
                <div class="form-group">
                    <label
                        for="uname">Email Template:</label>
                    <textarea id="emailtemplate" class="form-control summernote" name="emailtemplate"></textarea>

                </div>
                <button type="submit" class="btn
  btn-primary">Submit
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote();
    });
</script>
</body>
</html>
