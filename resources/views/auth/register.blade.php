<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">
    <script type="text/javascript" src="public/js/bootstrap-datepicker.js"></script>
    <script>
      $(function() {
        $('#datepicker').datepicker({format: "yyyy-mm-dd"});
      });
    </script>
    <link rel="stylesheet" href="{{ asset('public/css/register.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Register now</h3>
            </div>
            <div class="panel panel-body">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error(s)!</strong> I think there are something wrong with your inputs!
                <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
                </ul>
            </div>
            @endif
              <form action="{{ route('register') }}" method="POST" role="form">            
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
                </div>
                <div class="form-group">
                    <div class="radio" style="margin-left: 190px">
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="1" checked="checked">
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" id="inputGender" value="0" checked="checked">
                            Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="text" name="dob" id="datepicker" class="form-control" placeholder="Date of birth" value="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Your password">
                </div>
                <div class="form-group">
                    <label for="">Password confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Please confirm your password!">
                </div>
                <label for="">Profile pic (Optional)</label>
                <div class="input-group form-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse&hellip; <input name="profile_pic" id="image" type="file" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Your phone number">
                </div>
                <button type="submit" class="btn btn-primary">Register!</button>
                <a href="{{ route('homepage') }}" class="btn btn-warning">Back</a>
            </form>  
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8" async defer>
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});
</script>
</body>
</html>