$(document).ready(function() {
    $('#searchInput').keyup(function() {
        var inputText = $(this).val().toLowerCase();
        var suggestions = ["apple", "banana", "orange", "grape", "pineapple", "watermelon", "mango", "kiwi", "strawberry", "peach"];

        var matchedSuggestions = suggestions.filter(function(suggestion) {
            return suggestion.startsWith(inputText);
        });

        var suggestionList = "<ul>";
        matchedSuggestions.forEach(function(suggestion) {
            suggestionList += "<li>" + suggestion + "</li>";
        });
        suggestionList += "</ul>";

        $('#suggestions').html(suggestionList);
    });
});
