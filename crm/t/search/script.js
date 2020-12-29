$(function () {

    $('input[name=search]').on('keyup', function () {

        var data = $('#searchForm').serialize();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: data,
            success: function (result) {
                $('#search_result').html(result);

            }
        });

    });
});


$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }

        init();
    });
});


function logout() {

    // To invalidate a basic auth login:
    //
    // 	1. Call this logout function.
    //	2. It makes a GET request to an URL with false Basic Auth credentials
    //	3. The URL returns a 401 Unauthorized
    // 	4. Forward to some "you-are-logged-out"-page
    // 	5. Done, the Basic Auth header is invalid now

    $.ajax({
        type: "GET",
        url: "/t/search/logout.php",
        async: false,
        username: "logmeout",
        password: "123456",
        headers: { "Authorization": "Basic xxx" }
    })
        .done(function(){
            // If we don't get an error, we actually got an error as we expect an 401!
        })
        .fail(function(){
            // We expect to get an 401 Unauthorized error! In this case we are successfully
            // logged out and we redirect the user.
            window.location = "/t/sklad/";
        });

    return false;
}