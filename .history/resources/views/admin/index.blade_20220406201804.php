@push('css')
<link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />
<style>
    th{text-align:left;}
</style>
@endpush

@push('scripts')
<!-- Datatables -->
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" referrerpolicy="origin"></script>

<script>

$(document).ready( function () {
    // Setup - add a text input to each footer cell
    $('#table thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#table thead');

    $('#table').DataTable( {
        orderCellsTop: true,
        fixedHeader: true,
        serverSide: true,
        ajax: {
            url: "{{ URL::to('datatables') }}",
            type: 'POST',
            data : {
                "_token": "{{ csrf_token() }}"
            } 
        },
        dom: 'rtip',
        columns: [
            { data: 'title' },
            { data: 'company_name' },
            { data: 'expired_at' },
            { 
                data: 'status',
                sortable : false
            },
            { 
                data: 'live_url',
                sortable: false,
                render: function ( data, type, row ) {
                    return '<a href="'+data+'" target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline" >Live</a>'
                }
            },
            { 
                data: 'edit_url',
                sortable: false,
                render: function ( data, type, row ) {
                    return '<a href="'+data+'" class="px-4 py-1 text-sm text-white bg-blue-400 rounded" target="_blank">Izmeni</a>'
                }
            }
        ],
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = 'Pretraga';

                    // Disable search input for columns
                    var disabled_search = [2,4,5];
                    if(disabled_search.includes(colIdx)){
                        $(cell).html('');
                        return;
                    }
                    else if(colIdx == 3){

                        $(cell).html('<select id="status-select" class="w-full"><option value="">Svi</option><option value="1">Aktivan</option><option value="0">Neaktivan</option></select>');
                        $('select#status-select').on('change', function (e) {
                            e.stopPropagation();
                            // Get the search value
                            api.column(colIdx).search(this.value.toString()).draw();
                        });
                        return;
                    }
                    
                    $(cell).html('<input type="text" class="w-full" placeholder="' + title + '" />');
                    
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                            // Get the search value
                            $(this).attr('title', $(this).val());
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api.column(colIdx).search(this.value).draw();
 
                            $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        }
    });
});

    
</script>
@endpush

<x-app-layout>
    {{-- <x-slot name="header">
        <a href="{{ route('admin.jobs.create') }}">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg class=" h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Dodaj oglas
            </button>
        </a>
    </x-slot> --}}

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
     
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="p-5 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="table" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Naziv oglasa</th>
                                        <th>Kompanija</th>
                                        <th>Datum isteka</th>
                                        <th>Status</th>
                                        <th>Live URL</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
</x-app-layout>
