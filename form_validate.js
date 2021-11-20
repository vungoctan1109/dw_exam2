$(function () {
    var $addForm = $("#addForm");
    $addForm.validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true
            },
            phone: {
                required: true
            },
            feedback: {
                required: true
            }
        },
        messages: {
            name: {
                required: 'Student Name is required.'
            },
            email: {
                required: 'Student email is required.'
            },
            phone: {
                required: 'Student phone is required.'
            },
            feedback: {
                required: 'Feedback is required.'
            }
        }
    });
})

