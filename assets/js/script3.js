$(document).ready(function() {
    $('#searchForm').on('submit', function(event) {
        event.preventDefault();
        const from = $('#from').val();
        const to = $('#to').val();
        const date = $('#date').val();

        $.ajax({
            url: 'homepageadmin.php',
            type: 'POST',
            data: { from: from, to: to, date: date },
            success: function(response) {
                $('#results').html(response);
            },
            error: function() {
                $('#results').html('<div class="alert alert-danger">An error occurred while searching for flights.</div>');
            }
        });
    });
});

