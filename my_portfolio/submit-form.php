<?php
      

?>

<script>
    $("document").ready(function() {
        $("form").submit(function (event) {
            event.preventDefault();
            var name = $("name").val();
            var email = $("email").val();
            var message = $("message").val();
            var submit = $("submit").val();

            $("form-message").load("submit-form.php", {
                name : name,
                email : email,
                message : message,
                submit : submit
            });
        });
    });
</script>