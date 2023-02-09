@extends('layouts.main')
@section('content')
    <!-- BEGIN Page Content -->
    <!-- the #js-page-content id is needed for some plugins to initialize -->
    <main id="js-page-content" role="main" class="page-content">
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-table'></i> @yield('title') Talep Listesi: <span class='fw-300'>Indir</span>
                <sup class='badge badge-primary fw-500'>+</sup>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>Talep Listesi</h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                    data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                <p>Exporting provide overlapping functionality for data export:</p>
                            </div>
                            <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead class="bg-primary-600">
                                @yield('head')
                                </thead>
                                <tbody>
                                @yield('body')
                                </tbody>
                                <tfoot>
                                @yield('foot')
                                </tfoot>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')

    <!-- datatble responsive bundle contains:
+ jquery.dataTables.js
+ dataTables.bootstrap4.js
+ dataTables.autofill.js
+ dataTables.buttons.js
+ buttons.bootstrap4.js
+ buttons.html5.js
+ buttons.print.js
+ buttons.colVis.js
+ dataTables.colreorder.js
+ dataTables.fixedcolumns.js
+ dataTables.fixedheader.js
+ dataTables.keytable.js
+ dataTables.responsive.js
+ dataTables.rowgroup.js
+ dataTables.rowreorder.js
+ dataTables.scroller.js
+ dataTables.select.js
+ datatables.styles.app.js
+ datatables.styles.buttons.app.js -->
    <script src="js/datagrid/datatables/datatables.bundle.js"></script>
    <!-- datatbles buttons bundle contains:
    + "jszip.js",
    + "pdfmake.js",
    + "vfs_fonts.js"
    NOTE: 	The file size is pretty big, but you can always use the
        build.json file to deselect any components you do not need under "export" -->
    <script src="js/datagrid/datatables/datatables.export.js"></script>
    <script>
        $(document).ready(function () {

            // initialize datatable
            $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                            extend:    'colvis',
                            text:      'Column Visibility',
                            titleAttr: 'Col visibility',
                            className: 'mr-sm-3'
                        },*/
                        {
                            text: 'Ekle',
                            action: function () {
                                window.location.href = @yield('route')
                            },
                            className: 'btn-outline-info btn-sm mr-1'
                        },
                    ]
                });

        });

    </script>
@endsection
