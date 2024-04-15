$(document).ready(function() {
    // Load book details from XML file
    $.ajax({
        type: "GET",
        url: "book.xml",
        dataType: "xml",
        success: function(xml) {
            $(xml).find('book').each(function() {
                var title = $(this).find('title').text();
                $('#bookSelect').append($('<option>').text(title).attr('value', title));
            });
        },
        error: function(xhr, status, error) {
            console.log("Error loading XML file: " + error);
        }
    });

    // Handle book selection
    $('#bookSelect').change(function() {
        var selectedBook = $(this).val();
        if (selectedBook === "") {
            $('#bookDetails').html("");
            return;
        }
        
        $.ajax({
            type: "GET",
            url: "book.xml",
            dataType: "xml",
            success: function(xml) {
                var bookDetails = "<h3>Book Details:</h3>";
                $(xml).find('book').each(function() {
                    var title = $(this).find('title').text();
                    if (title === selectedBook) {
                        var author = $(this).find('author').text();
                        var year = $(this).find('year').text();
                        var price = $(this).find('price').text();
                        bookDetails += "<p>Title: " + title + "</p>";
                        bookDetails += "<p>Author: " + author + "</p>";
                        bookDetails += "<p>Year: " + year + "</p>";
                        bookDetails += "<p>Price: " + price + "</p>";
                        return false; // Exit the loop after finding the selected book
                    }
                });
                $('#bookDetails').html(bookDetails);
            },
            error: function(xhr, status, error) {
                console.log("Error loading XML file: " + error);
            }
        });
    });
});
