    function sendMessage() {
        var message = $('#message').val();
        $.ajax({
            url: '/chat/send',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                message: message
            },
            success: function(response) {
                $('#message').val('');
                getMessages();
            }
        });
    }

    function getMessages() {
        $.ajax({
            url: '/chat/messages',
            method: 'GET',
            success: function(response) {
                $('#chat-container').html(response);
                scrollToBottom();
            }
        });
    }

    function scrollToBottom() {
        var chatContainer = $('#chat-container');
        chatContainer.scrollTop(chatContainer[0].scrollHeight);
    }

    $(document).ready(function() {
        getMessages();
    });