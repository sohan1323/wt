$(document).ready(function() {
    $('#nameInput').keyup(function() {
        var name = $(this).val();
        if (name.trim() === "") {
            $('#response').text("Stranger, please tell me your name!");
        } else if (["Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan"].includes(name)) {
            $('#response').text("Hello, master!");
        } else {
            $('#response').text("I don't know you!");
        }
    });
});
