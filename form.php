<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .error{
            color: red;
            font-style: italic;
            font-size: small;
        }
    </style>
</head>
<body>
<div class="w3-card-4 ">
    <div class="w3-container w3-green">
        <h2>Student's Feedback</h2>
    </div>
    <form action="process_form.php" id = "addForm" class="w3-container" name="add-form" method="post">
        <p>
            <label><b>Student Name</b></label>
            <input class="w3-input w3-border w3-round" name="name" type="text"></p>
        <p>
            <label><b>Student Email</b></label>
            <input class="w3-input w3-border w3-round" name="email" type="text"></p>
        </p>
        <p>
            <label><b>Student Telephone</b></label>
            <input class="w3-input w3-border w3-round" name="phone" type="number"></p>
        <p>
            <label><b>Feedback Content</b></label>
            <input class="w3-input w3-border w3-round" name="feedback" type="text"></p>
        <input class="w3-button w3-green w3-margin-bottom w3-round" type="submit" value="Submit">
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="form_validate.js"></script>
<script>
    $(document).ready(function () {
        const inputName = $('input[name = name]');
        const inputEmail = $('input[name = email]');
        const inputPhone = $('input[name = phone]');
        const inputFeedback = $('input[name = feedback]');
        $('form[name=add-form]').submit(function (event) {
            event.preventDefault();
            let data = {
                name: inputName.val(),
                email: inputEmail.val(),
                phone: inputPhone.val(),
                feedback: inputFeedback.val()
            }
            $.ajax({
                url: "http://localhost:8080/dw_exam2/process_form.php",
                method: 'POST',
                data: JSON.stringify(data),
                success: function (responseData) {
                    alert(responseData.message);
                },
                error: function () {

                }
            });
        });
    }
</script>

</body>
</html>