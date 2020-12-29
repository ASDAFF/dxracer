$(function () {
    $(document).ready(function () {
        var dataTableOrders = $('#dataTableOrders').DataTable({

            "bLengthChange": false, //thought this line could hide the LengthMenu
            "bInfo": false,
            "paging": false,
            "language": {
                "lengthMenu": "Показывать _MENU_ на страницу",
                "zeroRecords": "Ничего не найдено",
                "info": "Страница _PAGE_ из _PAGES_",
                "infoEmpty": "Записей нет",
                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                "search": "Поиск",
            },
            columnDefs: [
                {width: '5%', targets: 0},
                {width: '5%', targets: 1},
                {width: '35%', targets: 2},
                {width: '5%', targets: 3},
                {width: '5%', targets: 4},
                {width: '5%', targets: 5},
                {width: '10%', targets: 6}
            ],
            "bStateSave": true,
            processing: true,
            "searching": false,
            "ordering": false,



        });
    })
});