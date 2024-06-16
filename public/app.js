
    // Close select dropdown after selecting an option
    document.addEventListener('DOMContentLoaded', function() {
    var select = document.getElementById('genre');
    select.addEventListener('change', function() {
    this.blur();
});
});
