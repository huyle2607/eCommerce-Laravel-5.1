<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '<h3>Hello {{ Auth::user()->name }}!</h3>',
            // (string | mandatory) the text inside the notification
            text: "Let's do something with these database, shall we?",
            // (string | optional) the image to display on the left
            image: '{{ asset('public/assets-admin/img/'.Auth::user()->profile_pic) }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: '2000',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>