<script>
            $(window).load(function(){

                //initialize basic datatable
                var table = $('#basic-usage').DataTable({
                    "ajax": 'assets/extras/datatables-basic.json',
                    "columns": [
                    { "data": "id" },
                    { "data": "firstName" },
                    { "data": "lastName" }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "dom": 'Rlfrtip'
                });

                $('#basic-usage tbody').on( 'click', 'tr', function () {
                    if ( $(this).hasClass('row_selected') ) {
                        $(this).removeClass('row_selected');
                    }
                    else {
                        table.$('tr.row_selected').removeClass('row_selected');
                        $(this).addClass('row_selected');
                    }
                });
                //*initialize basic datatable




                //initialize editable datatable

                function restoreRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);

                    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                        oTable.row(nRow).data(aData[i]);
                    }

                    oTable.draw();
                }

                function editRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);
                    jqTds[0].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[0] + '">';
                    jqTds[1].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[1] + '">';
                    jqTds[2].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[2] + '">';
                    jqTds[3].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[3] + '">';
                    jqTds[4].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[4] + '">';
                    jqTds[5].innerHTML = '<a role="button" tabindex="0" class="edit text-success text-uppercase text-strong text-sm mr-10">Save</a><a role="button" tabindex="0" class="cancel text-warning text-uppercase text-strong text-sm mr-10">Cancel</a>';
                }

                function saveRow(oTable, nRow) {
                    var jqInputs = $('input', nRow);
                    oTable.cell(nRow, 0).data(jqInputs[0].value);
                    oTable.cell(nRow, 1).data(jqInputs[1].value);
                    oTable.cell(nRow, 2).data(jqInputs[2].value);
                    oTable.cell(nRow, 3).data(jqInputs[3].value);
                    oTable.cell(nRow, 4).data(jqInputs[4].value);
                    oTable.cell(nRow, 5).data('<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a>');
                    oTable.draw();
                }

                var table2 = $('#editable-usage');

                var oTable = $('#editable-usage').DataTable({
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var nEditing = null;
                var nNew = false;

                $('#add-entry').click(function (e) {
                    e.preventDefault();

                    if (nNew && nEditing) {
                        if (confirm("Previous row is not saved yet. Save it ?")) {
                            saveRow(oTable, nEditing); // save
                            $(nEditing).find("td:first").html("Untitled");
                            nEditing = null;
                            nNew = false;

                        } else {
                            oTable.row(nEditing).remove().draw(); // cancel
                            nEditing = null;
                            nNew = false;

                            return;
                        }
                    }

                    var aiNew = oTable.row.add(['', '', '', '', '', '', '']).draw();
                    var nRow = oTable.row(aiNew[0]).node();
                    editRow(oTable, nRow);
                    nEditing = nRow;
                    nNew = true;
                });

                table2.on('click', '.delete', function (e) {
                    e.preventDefault();

                    if (confirm("Are you sure?") == false) {
                        return;
                    }

                    var nRow = $(this).parents('tr')[0];
                    oTable.row(nRow).remove().draw();
                    alert("Deleted!");
                });

                table2.on('click', '.cancel', function (e) {
                    e.preventDefault();
                    if (nNew) {
                        oTable.row(nEditing).remove().draw();
                        nEditing = null;
                        nNew = false;
                    } else {
                        restoreRow(oTable, nEditing);
                        nEditing = null;
                    }
                });

                table2.on('click', '.edit', function (e) {
                    e.preventDefault();

                    /* Get the row as a parent of the link that was clicked on */
                    var nRow = $(this).parents('tr')[0];

                    if (nEditing !== null && nEditing != nRow) {
                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                        restoreRow(oTable, nEditing);
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    } else if (nEditing == nRow && this.innerHTML == "Save") {
                        /* Editing this row and want to save it */
                        saveRow(oTable, nEditing);
                        nEditing = null;
                        alert("Updated!");
                    } else {
                        /* No edit in progress - let's start one */
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    }
                });
                //*initialize editable datatable

                //initialize responsive datatable
                var table3 = $('#responsive-usage').DataTable({
                    "ajax": 'assets/extras/datatables-responsive.json',
                    "columns": [
                    { "data": "id" },
                    { "data": "firstName" },
                    { "data": "lastName" },
                    { "data": "tel" },
                    { "data": "address" },
                    { "data": "city" },
                    { "data": "state" },
                    { "data": "zip" }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });
                //*initialize responsive datatable

                //initialize responsive datatable
                function stateChange(iColumn, bVisible) {
                    console.log('The column', iColumn, ' has changed its status to', bVisible);
                }

                var table4 = $('#advanced-usage').DataTable({
                    "ajax": 'assets/extras/datatables-basic.json',
                    "columns": [
                    { "data": "id" },
                    { "data": "firstName" },
                    { "data": "lastName" }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                    'copy',
                    'print', {
                        'sExtends': 'collection',
                        'sButtonText': 'Save',
                        'aButtons': ['csv', 'xls', 'pdf']
                    }
                    ],
                    "sSwfPath": "assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');
                //*initialize responsive datatable

            });
        </script>