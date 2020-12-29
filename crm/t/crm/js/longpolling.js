var LongPolling = {
    etag: 0,
    time: null,

    init: function (id) {
        var $this = this, xhr;
        //if ($this.time === null) {
        //    $this.time = $this.dateToUTCString(new Date());
        //}

        if (window.XDomainRequest) {
            // Если IE, запускаем работу чуть позже (из-за бага IE8)
            setTimeout(function () {
                $this.poll_IE($this, id);
            }, 2000);

        } else {
            // Создает XMLHttpRequest объект
            mcXHR = xhr = new XMLHttpRequest();
            xhr.onreadystatechange = xhr.onload = function () {
                if (4 === xhr.readyState) {

                    // Если пришло сообщение
                    if (200 === xhr.status && xhr.responseText.length > 0) {

                        // Берем Etag и Last-Modified из Header ответа
                        $this.etag = xhr.getResponseHeader('Etag');
                        $this.time = xhr.getResponseHeader('Last-Modified');

                        // Вызываем обработчик сообщения
                        $this.action(xhr.responseText);
                    }

                    if (xhr.status > 0) {
                        // Если ничего не пришло повторяем операцию
                        $this.poll($this, xhr, id);
                    }
                }
            };

            // Начинаем long polling
            $this.poll($this, xhr, id);
        }
    },

    poll: function ($this, xhr, id) {
        //var timestamp = (new Date()).getTime(),
        url = 'https://crm.time-avenue.com/sub/' + id;
        // timestamp помогает защитить от кеширования в браузерах

        xhr.open('GET', url, true);
        xhr.setRequestHeader("If-None-Match", $this.etag);
        xhr.setRequestHeader("If-Modified-Since", $this.time);
        xhr.send();
    },

    // То же самое что и poll(), только для IE
    poll_IE: function ($this, id) {
        var xhr = new window.XDomainRequest();
        //var timestamp = (new Date()).getTime(),
        url = 'https://crm.time-avenue.com/sub/' + id;

        xhr.onprogress = function () {
        };
        xhr.onload = function () {
            $this.action(xhr.responseText);
            $this.poll_IE($this, id);
        };
        xhr.onerror = function () {
            $this.poll_IE($this, id);
        };
        xhr.open('GET', url, true);
        xhr.send();
    },

    action: function (event) {
        actionOnPolling(event);
    }

    //valueToTwoDigits: function (value) {
    //    return ((value < 10) ? '0' : '') + value;
    //},

    // представление даты в виде UTC
    //dateToUTCString: function () {
    //    var time = this.valueToTwoDigits(date.getUTCHours())
    //        + ':' + this.valueToTwoDigits(date.getUTCMinutes())
    //        + ':' + this.valueToTwoDigits(date.getUTCSeconds());
    //    return this.days[date.getUTCDay()] + ', '
    //        + this.valueToTwoDigits(date.getUTCDate()) + ' '
    //        + this.months[date.getUTCMonth()] + ' '
    //        + date.getUTCFullYear() + ' ' + time + ' GMT';
    //}
};


function actionOnPolling(event) {
    var obj = $.parseJSON(event);
    var id_app = obj.text.id;
    console.log(obj.text.command);
    switch (obj.text.command) {
        //case 'UPD_ACTIVE_LIST_USERS':
        //    $.ajax({
        //        type: "POST",
        //        cache: false,
        //        url: '../lib/actionsLongPolling.php',
        //        data: {'command':'UPD_ACTIVE_LIST_USERS'},
        //        success: function (data) {
        //            $('#usersOnline').replaceWith(data);
        //        }// success
        //    });// ajax
        //    break;
        case 'UPD_APPLICATION':
            $.ajax({
                type: "POST",
                cache: false,
                url: 'lib/actionsLongPolling.php',
                data: { 'command': 'UPD_APPLICATION', 'id': id_app },
                success: function (data) {
                    $('tr#tr' + id_app).replaceWith(data);
                }// success
            });// ajax
            break;

        default:
            break;
    }
}
