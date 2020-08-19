 <script>
            $(window).load(function(){

                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's

                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels

                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                        ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor

            });
        </script>
        <script>
            $(window).load(function(){

                // html demo
                $('#html').jstree();

                // inline data demo
                $('#data').jstree({
                    'core' : {
                        'data' : [
                        { "text" : "Root node", "children" : [
                        { "text" : "Child node 1" },
                        { "text" : "Child node 2" }
                        ]}
                        ]
                    }
                });

                // data format demo
                $('#frmt').jstree({
                    'core' : {
                        'data' : [
                        {
                            "text" : "Root node",
                            "state" : { "opened" : true },
                            "children" : [
                            {
                                "text" : "Child node 1",
                                "state" : { "selected" : true },
                                "icon" : "jstree-file"
                            },
                            { "text" : "Child node 2", "state" : { "disabled" : true } }
                            ]
                        }
                        ]
                    }
                });

                // ajax demo
                $('#ajax').jstree({
                    'core' : {
                        'data' : {
                            "url" : "assets/extras/tree.json",
                            "dataType" : "json" // needed only if you do not supply JSON headers
                        }
                    }
                });

                // lazy demo
                $('#lazy').jstree({
                    'core' : {
                        'data' : {
                            "url" : "//www.jstree.com/fiddle/?lazy",
                            "data" : function (node) {
                                return { "id" : node.id };
                            }
                        }
                    }
                });

                // data from callback
                $('#clbk').jstree({
                    'core' : {
                        'data' : function (node, cb) {
                            if(node.id === "#") {
                                cb([{"text" : "Root", "id" : "1", "children" : true}]);
                            }
                            else {
                                cb(["Child"]);
                            }
                        }
                    }
                });

                // interaction and events
                $('#evts_button').on("click", function () {
                    var instance = $('#evts').jstree(true);
                    instance.deselect_all();
                    instance.select_node('1');
                });
                $('#evts')
                .on("changed.jstree", function (e, data) {
                    if(data.selected.length) {
                        alert('The selected node is: ' + data.instance.get_node(data.selected[0]).text);
                    }
                })
                .jstree({
                    'core' : {
                        'multiple' : false,
                        'data' : [
                        { "text" : "Root node", "children" : [
                        { "text" : "Child node 1", "id" : 1 },
                        { "text" : "Child node 2" }
                        ]}
                        ]
                    }
                });

            });
        </script>
        <script>
            $(window).load(function(){
                $(".sortable").sortable({
                    connectWith: ".sortable",
                    handle: ".tile-header",
                    placeholder: "ui-sortable-placeholder",
                    start: function()
                    {
                        $('.sortable .tile').addClass('drag-active');
                    },
                    stop: function()
                    {
                        $('.sortable .tile').removeClass('drag-active');
                    }
                }).disableSelection();
            });
        </script>
        <!--/ Page Specific Scripts -->





        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            $(window).load(function(){

                var updateOutput = function(e)

                {
                    var list   = e.length ? e : $(e.target),
                    output = list.data('output');
                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };

                // activate Nestable for list 1
                $('#nestable').nestable({
                    group: 1
                })
                .on('change', updateOutput);

                // output initial serialised data
                updateOutput($('#nestable').data('output', $('#nestable-output')));
            });
        </script>
        <script>
            $(window).load(function(){

                $('#datepicker-inline').datetimepicker({
                    inline: true
                });

                $('#datetimepicker1').datetimepicker();

                $('#raty1').raty({
                    number: 10,
                    target : '#hint',
                    targetType : 'number'
                });

                $('#raty2').raty({
                    score: 3,
                    starOff: 'fa fa-star-o text-orange',
                    starOn: 'fa fa-star text-orange',
                    target : '#hint2',
                    targetType : 'number',
                    targetKeep : true
                });

                $('#raty3').raty({
                    score: 10,
                    number: 15,
                    starOff: 'fa fa-bug',
                    starOn: 'fa fa-bug text-cyan',
                    target : '#hint3',
                    targetType : 'number',
                    targetKeep : true
                });

                $('#raty4').raty({
                    readOnly: true,
                    score: 2
                });

                $('#raty5').raty({
                    cancel: true,
                    score: 4
                });

                var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
                'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
                'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
                'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
                'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
                'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
                'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
                'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
                ];

                // constructs the suggestion engine
                var states = new Bloodhound({
                  datumTokenizer: Bloodhound.tokenizers.whitespace,
                  queryTokenizer: Bloodhound.tokenizers.whitespace,
                  // `states` is an array of state names defined in "The Basics"
                  local: states
              });

                $('#basicTypeahead').typeahead({
                  hint: true,
                  highlight: true,
                  minLength: 1
              },
              {
                  name: 'states',
                  source: states
              });

                var countries = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    // url points to a json file that contains an array of country names, see
                    // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
                    prefetch: 'assets/extras/countries.json'
                });

                // passing in `null` for the `options` arguments will result in the default
                // options being used
                $('#jsonTypeahead').typeahead(null, {
                    name: 'countries',
                    source: countries
                });

                var usStates = [{'name':'Alabama','flag':'5/5c/Flag_of_Alabama.svg/45px-Flag_of_Alabama.svg.png'},{'name':'Alaska','flag':'e/e6/Flag_of_Alaska.svg/43px-Flag_of_Alaska.svg.png'},{'name':'Arizona','flag':'9/9d/Flag_of_Arizona.svg/45px-Flag_of_Arizona.svg.png'},{'name':'Arkansas','flag':'9/9d/Flag_of_Arkansas.svg/45px-Flag_of_Arkansas.svg.png'},{'name':'California','flag':'0/01/Flag_of_California.svg/45px-Flag_of_California.svg.png'},{'name':'Colorado','flag':'4/46/Flag_of_Colorado.svg/45px-Flag_of_Colorado.svg.png'},{'name':'Connecticut','flag':'9/96/Flag_of_Connecticut.svg/39px-Flag_of_Connecticut.svg.png'},{'name':'Delaware','flag':'c/c6/Flag_of_Delaware.svg/45px-Flag_of_Delaware.svg.png'},{'name':'Florida','flag':'f/f7/Flag_of_Florida.svg/45px-Flag_of_Florida.svg.png'},{'name':'Georgia','flag':'5/54/Flag_of_Georgia_%28U.S._state%29.svg/46px-Flag_of_Georgia_%28U.S._state%29.svg.png'},{'name':'Hawaii','flag':'e/ef/Flag_of_Hawaii.svg/46px-Flag_of_Hawaii.svg.png'},{'name':'Idaho','flag':'a/a4/Flag_of_Idaho.svg/38px-Flag_of_Idaho.svg.png'},{'name':'Illinois','flag':'0/01/Flag_of_Illinois.svg/46px-Flag_of_Illinois.svg.png'},{'name':'Indiana','flag':'a/ac/Flag_of_Indiana.svg/45px-Flag_of_Indiana.svg.png'},{'name':'Iowa','flag':'a/aa/Flag_of_Iowa.svg/44px-Flag_of_Iowa.svg.png'},{'name':'Kansas','flag':'d/da/Flag_of_Kansas.svg/46px-Flag_of_Kansas.svg.png'},{'name':'Kentucky','flag':'8/8d/Flag_of_Kentucky.svg/46px-Flag_of_Kentucky.svg.png'},{'name':'Louisiana','flag':'e/e0/Flag_of_Louisiana.svg/46px-Flag_of_Louisiana.svg.png'},{'name':'Maine','flag':'3/35/Flag_of_Maine.svg/45px-Flag_of_Maine.svg.png'},{'name':'Maryland','flag':'a/a0/Flag_of_Maryland.svg/45px-Flag_of_Maryland.svg.png'},{'name':'Massachusetts','flag':'f/f2/Flag_of_Massachusetts.svg/46px-Flag_of_Massachusetts.svg.png'},{'name':'Michigan','flag':'b/b5/Flag_of_Michigan.svg/45px-Flag_of_Michigan.svg.png'},{'name':'Minnesota','flag':'b/b9/Flag_of_Minnesota.svg/46px-Flag_of_Minnesota.svg.png'},{'name':'Mississippi','flag':'4/42/Flag_of_Mississippi.svg/45px-Flag_of_Mississippi.svg.png'},{'name':'Missouri','flag':'5/5a/Flag_of_Missouri.svg/46px-Flag_of_Missouri.svg.png'},{'name':'Montana','flag':'c/cb/Flag_of_Montana.svg/45px-Flag_of_Montana.svg.png'},{'name':'Nebraska','flag':'4/4d/Flag_of_Nebraska.svg/46px-Flag_of_Nebraska.svg.png'},{'name':'Nevada','flag':'f/f1/Flag_of_Nevada.svg/45px-Flag_of_Nevada.svg.png'},{'name':'New Hampshire','flag':'2/28/Flag_of_New_Hampshire.svg/45px-Flag_of_New_Hampshire.svg.png'},{'name':'New Jersey','flag':'9/92/Flag_of_New_Jersey.svg/45px-Flag_of_New_Jersey.svg.png'},{'name':'New Mexico','flag':'c/c3/Flag_of_New_Mexico.svg/45px-Flag_of_New_Mexico.svg.png'},{'name':'New York','flag':'1/1a/Flag_of_New_York.svg/46px-Flag_of_New_York.svg.png'},{'name':'North Carolina','flag':'b/bb/Flag_of_North_Carolina.svg/45px-Flag_of_North_Carolina.svg.png'},{'name':'North Dakota','flag':'e/ee/Flag_of_North_Dakota.svg/38px-Flag_of_North_Dakota.svg.png'},{'name':'Ohio','flag':'4/4c/Flag_of_Ohio.svg/46px-Flag_of_Ohio.svg.png'},{'name':'Oklahoma','flag':'6/6e/Flag_of_Oklahoma.svg/45px-Flag_of_Oklahoma.svg.png'},{'name':'Oregon','flag':'b/b9/Flag_of_Oregon.svg/46px-Flag_of_Oregon.svg.png'},{'name':'Pennsylvania','flag':'f/f7/Flag_of_Pennsylvania.svg/45px-Flag_of_Pennsylvania.svg.png'},{'name':'Rhode Island','flag':'f/f3/Flag_of_Rhode_Island.svg/32px-Flag_of_Rhode_Island.svg.png'},{'name':'South Carolina','flag':'6/69/Flag_of_South_Carolina.svg/45px-Flag_of_South_Carolina.svg.png'},{'name':'South Dakota','flag':'1/1a/Flag_of_South_Dakota.svg/46px-Flag_of_South_Dakota.svg.png'},{'name':'Tennessee','flag':'9/9e/Flag_of_Tennessee.svg/46px-Flag_of_Tennessee.svg.png'},{'name':'Texas','flag':'f/f7/Flag_of_Texas.svg/45px-Flag_of_Texas.svg.png'},{'name':'Utah','flag':'f/f6/Flag_of_Utah.svg/45px-Flag_of_Utah.svg.png'},{'name':'Vermont','flag':'4/49/Flag_of_Vermont.svg/46px-Flag_of_Vermont.svg.png'},{'name':'Virginia','flag':'4/47/Flag_of_Virginia.svg/44px-Flag_of_Virginia.svg.png'},{'name':'Washington','flag':'5/54/Flag_of_Washington.svg/46px-Flag_of_Washington.svg.png'},{'name':'West Virginia','flag':'2/22/Flag_of_West_Virginia.svg/46px-Flag_of_West_Virginia.svg.png'},{'name':'Wisconsin','flag':'2/22/Flag_of_Wisconsin.svg/45px-Flag_of_Wisconsin.svg.png'},{'name':'Wyoming','flag':'b/bc/Flag_of_Wyoming.svg/43px-Flag_of_Wyoming.svg.png'}];

                // constructs the suggestion engine
                var usStates = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    // `states` is an array of state names defined in "The Basics"
                    local: usStates
                });


                $('#customTypeahead').typeahead(null, {
                    name: 'us-states',
                    display: 'name',
                    source: usStates,
                    templates: {
                        empty: [
                        '<div class="empty-message">',
                        'unable to find any US States that match the current query',
                        '</div>'
                        ].join('\n'),
                        suggestion: Handlebars.compile('<div><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/{{flag}}" width="16" class="mr-10"><strong>{{name}}</strong></div>')
                    }
                });
            });
        </script>
        <!--/ Page Specific Scripts -->
        <script>
            $(window).load(function(){

                var i = -1;
                var toastCount = 0;
                var $toastlast;

                var getMessage = function () {
                    var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                    '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://johnpapa.net" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
                    'Are you the six fingered man?',
                    'Inconceivable!',
                    'I do not think that means what you think it means.',
                    'Have fun storming the castle!'
                    ];
                    i++;
                    if (i === msgs.length) {
                        i = 0;
                    }

                    return msgs[i];
                };

                var getMessageWithClearButton = function (msg) {
                    msg = msg ? msg : 'Clear itself?';
                    msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
                    return msg;
                };

                $('#showtoast').click(function () {
                    var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                    var msg = $('#message').val();
                    var title = $('#title').val() || '';
                    var $showDuration = $('#showDuration');
                    var $hideDuration = $('#hideDuration');
                    var $timeOut = $('#timeOut');
                    var $extendedTimeOut = $('#extendedTimeOut');
                    var $showEasing = $('#showEasing');
                    var $hideEasing = $('#hideEasing');
                    var $showMethod = $('#showMethod');
                    var $hideMethod = $('#hideMethod');
                    var toastIndex = toastCount++;
                    var addClear = $('#addClear').prop('checked');

                    toastr.options = {
                        closeButton: $('#closeButton').prop('checked'),
                        debug: $('#debugInfo').prop('checked'),
                        newestOnTop: $('#newestOnTop').prop('checked'),
                        progressBar: $('#progressBar').prop('checked'),
                        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                        preventDuplicates: $('#preventDuplicates').prop('checked'),
                        onclick: null
                    };

                    if ($('#addBehaviorOnToastClick').prop('checked')) {
                        toastr.options.onclick = function () {
                            alert('You can perform some custom action after a toast goes away');
                        };
                    }

                    if ($showDuration.val().length) {
                        toastr.options.showDuration = $showDuration.val();
                    }

                    if ($hideDuration.val().length) {
                        toastr.options.hideDuration = $hideDuration.val();
                    }

                    if ($timeOut.val().length) {
                        toastr.options.timeOut = addClear ? 0 : $timeOut.val();
                    }

                    if ($extendedTimeOut.val().length) {
                        toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
                    }

                    if ($showEasing.val().length) {
                        toastr.options.showEasing = $showEasing.val();
                    }

                    if ($hideEasing.val().length) {
                        toastr.options.hideEasing = $hideEasing.val();
                    }

                    if ($showMethod.val().length) {
                        toastr.options.showMethod = $showMethod.val();
                    }

                    if ($hideMethod.val().length) {
                        toastr.options.hideMethod = $hideMethod.val();
                    }

                    if (addClear) {
                        msg = getMessageWithClearButton(msg);
                        toastr.options.tapToDismiss = false;
                    }
                    if (!msg) {
                        msg = getMessage();
                    }

                    $('#toastrOptions').text('Command: toastr["'
                        + shortCutFunction
                        + '"]("'
                        + msg
                        + (title ? '", "' + title : '')
                        + '")\n\ntoastr.options = '
                        + JSON.stringify(toastr.options, null, 2)
                        );

                    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                    $toastlast = $toast;

                    if(typeof $toast === 'undefined'){
                        return;
                    }

                    if ($toast.find('#okBtn').length) {
                        $toast.delegate('#okBtn', 'click', function () {
                            alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                            $toast.remove();
                        });
                    }
                    if ($toast.find('#surpriseBtn').length) {
                        $toast.delegate('#surpriseBtn', 'click', function () {
                            alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                        });
                    }
                    if ($toast.find('.clear').length) {
                        $toast.delegate('.clear', 'click', function () {
                            toastr.clear($toast, { force: true });
                        });
                    }
                });

       function getLastToast(){
        return $toastlast;
    }
    $('#clearlasttoast').click(function () {
        toastr.clear(getLastToast());
    });
    $('#cleartoasts').click(function () {
        toastr.clear();
    });

});
</script>
<script>
    $(window).load(function(){

        $('.footable').footable();

    });
</script>

                <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                $('#select-all').change(function() {
                    if ($(this).is(":checked")) {
                        $('#usersList .selectMe').prop('checked', true);
                    } else {
                        $('#usersList .selectMe').prop('checked', false);
                    }
                });

            });
        </script>
        <!--/ vendor javascripts -->
        <script>
            $(window).load(function(){

                //initialize datatable
                $('#products-list').DataTable({
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
                        "sInfo":  'Found _TOTAL_ records',
                        "oPaginate": {
                            "sPage":    "Page ",
                            "sPageOf":  "of",
                            "sNext":  '<i class="fa fa-angle-right"></i>',
                            "sPrevious":  '<i class="fa fa-angle-left"></i>'
                        }
                    },
                    "pagingType": "input",
                    "ajax": 'assets/extras/products.json',
                    "order": [[ 1, "asc" ]],
                    "columns": [
                    {
                        "data": "null",
                        "defaultContent": '<label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label>'
                    },
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "category" },
                    {
                        "data": "price",
                        "type": "num-fmt",
                        "render": function (data) {
                            return '$' + parseFloat(data).toFixed(2);
                        }
                    },
                    {
                        "data": "date",
                        "className": "formatDate"
                    },
                    {
                        "type": "html",
                        "data": "status",
                        "render": function (data) {
                            if (data === 'published') {
                                return '<span class="label bg-success">' + data + '</span>'
                            } else if (data === 'not published') {
                                return '<span class="label bg-warning">' + data + '</span>'
                            } else if (data === 'deleted') {
                                return '<span class="label bg-lightred">' + data + '</span>'
                            }
                        }
                    },
                    {
                        "data": null,
                        "defaultContent": '<a href="shop-single-product" class="btn btn-xs btn-default mr-5"><i class="fa fa-search"></i> View</a><a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>'
                    }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "drawCallback": function(settings, json) {
                        $(".formatDate").each(function (idx, elem) {
                            $(elem).text($.format.date($(elem).text(), "MMM d, yyyy"));
                        });
                        $('#select-all').change(function() {
                            if ($(this).is(":checked")) {
                                $('#products-list tbody .selectMe').prop('checked', true);
                            } else {
                                $('#products-list tbody .selectMe').prop('checked', false);
                            }
                        });
                    }
                });
                //*initialize datatable
            });
        </script>
        <!--/ Page Specific Scripts -->
        <script>
            $(window).load(function(){

                //initialize datatable
                $('#orders-list').DataTable({
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
                        "sInfo":  'Found _TOTAL_ records',
                        "oPaginate": {
                            "sPage":    "Page ",
                            "sPageOf":  "of",
                            "sNext":  '<i class="fa fa-angle-right"></i>',
                            "sPrevious":  '<i class="fa fa-angle-left"></i>'
                        }
                    },
                    "pagingType": "input",
                    "ajax": 'assets/extras/orders.json',
                    "order": [[ 1, "asc" ]],
                    "columns": [
                    {
                        "data": "null",
                        "defaultContent": '<label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label>'
                    },
                    { "data": "id" },
                    {
                        "data": "date",
                        "className": "formatDate"
                    },
                    { "data": "placedby" },
                    {
                        "type": "html",
                        "data": "status",
                        "render": function (data) {
                            if (data === 'sent') {
                                return '<span class="label bg-success">' + data + '</span>'
                            } else if (data === 'closed') {
                                return '<span class="label bg-warning">' + data + '</span>'
                            } else if (data === 'cancelled') {
                                return '<span class="label bg-lightred">' + data + '</span>'
                            } else if (data === 'pending') {
                                return '<span class="label bg-primary">' + data + '</span>'
                            }
                        }
                    },
                    { "data": "shipto" },
                    { "data": "quantity" },
                    {
                        "data": "total",
                        "type": "num-fmt",
                        "render": function (data) {
                            return '$' + parseFloat(data).toFixed(2);
                        }
                    },
                    {
                        "data": null,
                        "defaultContent": '<a href="shop-single-order" class="btn btn-xs btn-default mr-5"><i class="fa fa-search"></i> View</a><a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>'
                    }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "drawCallback": function(settings, json) {
                        $(".formatDate").each(function (idx, elem) {
                            $(elem).text($.format.date($(elem).text(), "MMM d, yyyy"));
                        });
                        $('#select-all').change(function() {
                            if ($(this).is(":checked")) {
                                $('#orders-list tbody .selectMe').prop('checked', true);
                            } else {
                                $('#orders-list tbody .selectMe').prop('checked', false);
                            }
                        });
                    }
                });
                //*initialize datatable
            });
        </script>
        <script>
            $(window).load(function(){

                //initialize datatable
                $('#invoices-list').DataTable({
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
                        "sInfo":  'Found _TOTAL_ records',
                        "oPaginate": {
                            "sPage":    "Page ",
                            "sPageOf":  "of",
                            "sNext":  '<i class="fa fa-angle-right"></i>',
                            "sPrevious":  '<i class="fa fa-angle-left"></i>'
                        }
                    },
                    "pagingType": "input",
                    "ajax": 'assets/extras/invoices.json',
                    "order": [[ 1, "asc" ]],
                    "columns": [
                    {
                        "data": "null",
                        "defaultContent": '<label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0"><input type="checkbox" class="selectMe"><i></i></label>'
                    },
                    { "data": "id" },
                    {
                        "data": "date",
                        "className": "formatDate"
                    },
                    { "data": "invoicefor" },
                    {
                        "type": "html",
                        "data": "status",
                        "render": function (data) {
                            if (data === 'paid') {
                                return '<span class="label bg-success">' + data + '</span>'
                            } else if (data === 'unpaid') {
                                return '<span class="label bg-warning">' + data + '</span>'
                            } else if (data === 'cancelled') {
                                return '<span class="label bg-lightred">' + data + '</span>'
                            } else if (data === 'sent') {
                                return '<span class="label bg-primary">' + data + '</span>'
                            }
                        }
                    },
                    {
                        "data": "total",
                        "type": "num-fmt",
                        "render": function (data) {
                            return '$' + parseFloat(data).toFixed(2);
                        }
                    },
                    {
                        "data": null,
                        "defaultContent": '<a href="shop-single-invoice" class="btn btn-xs btn-default mr-5"><i class="fa fa-search"></i> View</a><a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>'
                    }
                    ],
                    "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "drawCallback": function(settings, json) {
                        $(".formatDate").each(function (idx, elem) {
                            $(elem).text($.format.date($(elem).text(), "MMM d, yyyy"));
                        });
                        $('#select-all').change(function() {
                            if ($(this).is(":checked")) {
                                $('#invoices-list tbody .selectMe').prop('checked', true);
                            } else {
                                $('#invoices-list tbody .selectMe').prop('checked', false);
                            }
                        });
                    }
                });
                //*initialize datatable
            });
        </script>
        <!--/ Page Specific Scripts -->
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                $('#ex1').slider({
                    formatter: function(value) {
                        return 'Current value: ' + value;
                    }
                });
                $("#ex5").slider();

            });
        </script>
        <!--/ Page Specific Scripts -->

        <script>
            $(window).load(function(){

                $('#world-map').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    borderColor: '#fff',
                    borderOpacity: 0.25,
                    borderWidth: 0.5,
                    color: '#e7eaeb',
                    enableZoom: true,
                    hoverColor: '#16a085',
                    normalizeFunction: 'polynomial',
                    scaleColors: ['#C8EEFF', '#006491'],
                    selectedColor: '#666',
                    values: sample_data
                });

                $('#europe-map').vectorMap({
                    map: 'europe_en',
                    backgroundColor: null,
                    borderColor: '#222',
                    borderOpacity: 0.25,
                    borderWidth: 1,
                    color: '#e7eaeb',
                    hoverColor: '#16a085',
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true
                });

                $('#usa-map').vectorMap({
                    map: 'usa_en',
                    backgroundColor: null,
                    borderColor: '#222',
                    borderOpacity: 0.25,
                    borderWidth: 1,
                    color: '#e7eaeb',
                    hoverColor: '#16a085',
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true,
                    selectedRegion: 'MO'
                });

                $('#germany-map').vectorMap({
                    map: 'germany_en',
                    backgroundColor: null,
                    borderColor: '#222',
                    borderOpacity: 0.25,
                    borderWidth: 1,
                    color: '#e7eaeb',
                    hoverColor: '#16a085',
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true
                });

            });
        </script>
        <!--/ Page Specific Scripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                map1 = new GMaps({
                    div: '#basic-map',
                    lat: -12.043333,
                    lng: -77.028333
                });

                map2 = new GMaps({
                    div: '#markers-map',
                    lat: -12.043333,
                    lng: -77.028333
                });
                map2.addMarker({
                    lat: -12.043333,
                    lng: -77.03,
                    title: 'Lima',
                    details: {
                        database_id: 42,
                        author: 'HPNeo'
                    },
                    click: function(e){
                        if(console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    }
                });
                map2.addMarker({
                    lat: -12.042,
                    lng: -77.028333,
                    title: 'Marker with InfoWindow',
                    infoWindow: {
                        content: '<p>HTML Content</p>'
                    }
                });

                map3 = new GMaps({
                    div: '#routes-map',
                    lat: -12.043333,
                    lng: -77.028333
                });
                map3.drawRoute({
                    origin: [-12.044012922866312, -77.02470665341184],
                    destination: [-12.090814532191756, -77.02271108990476],
                    travelMode: 'driving',
                    strokeColor: '#131540',
                    strokeOpacity: 0.6,
                    strokeWeight: 6
                });

                map4 = new GMaps({
                    div: '#custom-map',
                    lat: -12.043333,
                    lng: -77.028333
                });
                map4.addControl({
                    position: 'top_right',
                    content: 'Geolocate',
                    style: {
                        margin: '5px',
                        padding: '1px 6px',
                        border: 'solid 1px #717B87',
                        background: '#fff'
                    },
                    events: {
                        click: function(){
                            GMaps.geolocate({
                                success: function(position){
                                    map4.setCenter(position.coords.latitude, position.coords.longitude);
                                },
                                error: function(error){
                                    alert('Geolocation failed: ' + error.message);
                                },
                                not_supported: function(){
                                    alert("Your browser does not support geolocation");
                                }
                            });
                        }
                    }
                });

            });
        </script>
        <!--/ Page Specific Scripts -->

        <script>
            $(window).load(function(){

                $('#select-all').change(function() {
                    if ($(this).is(":checked")) {
                        $('#mails-list .mail-select input').prop('checked', true);
                    } else {
                        $('#mails-list .mail-select input').prop('checked', false);
                    }
                });

            });
        </script>

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                //load wysiwyg editor
                $('#summernote').summernote({
                    height: 200   //set editable area's height
                });
                //*load wysiwyg editor

            });
        </script>

        <script>
            $(window).load(function(){

                $('.mix-grid').mixItUp();


                $('.mix-controls .select-all input').change(function(){
                    if($(this).is(":checked")) {
                        $('.gallery').find('.mix').addClass('selected');
                        enableGalleryTools(true);
                    } else {
                        $('.gallery').find('.mix').removeClass('selected');
                        enableGalleryTools(false);
                    }
                });

                $('.mix .img-select').click(function(){
                    var mix = $(this).parents('.mix');
                    if(mix.hasClass('selected')) {
                        mix.removeClass('selected');
                        enableGalleryTools(false);
                    } else {
                        mix.addClass('selected');
                        enableGalleryTools(true);
                    }
                });

                var enableGalleryTools = function(enable) {

                    if (enable) {

                        $('.mix-controls li.mix-control').removeClass('disabled');

                    } else {

                        var selected = false;

                        $('.gallery .mix').each(function(){
                            if($(this).hasClass('selected')) {
                                selected = true;
                            }
                        });

                        if(!selected) {
                            $('.mix-controls li.mix-control').addClass('disabled');
                        }
                    }
                }

            });
        </script>
        <!--/ Page Specific Scripts -->

        <script>
            $(window).load(function(){

                $('#rootwizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index+1;

                        // If it's the last tab then hide the last button and show the finish instead
                        if($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }

                    },

                    onNext: function(tab, navigation, index) {

                        var form = $('form[name="step'+ index +'"]');

                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    },

                    onTabClick: function(tab, navigation, index) {

                        var form = $('form[name="step'+ (index+1) +'"]');
                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    }

                });

            });
        </script>
        <!--/ Page Specific Scripts -->





        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                $('#form1').parsley().subscribe('parsley:field:validate', function () {
                    if ($('#form1').parsley().isValid()) {
                        $('#form1Submit').prop('disabled', false);
                    } else {
                        $('#form1Submit').prop('disabled', true);
                    }
                });

                $('#form1Submit').on('click', function(){
                    $('#form1').submit();
                });

                $('#form2Submit').on('click', function(){
                    $('#form2').submit();
                });

                $('#form3Submit').on('click', function(){
                    $('#form3').submit();
                });

                $('#form4Submit').on('click', function(){
                    $('#form4').submit();
                });
            });
        </script>
        <!--/ Page Specific Scripts -->

        <!--/ vendor javascripts -->

        <script>
            $(window).load(function(){


                /*
                 * jQuery File Upload Plugin JS Example 8.9.1
                 * https://github.com/blueimp/jQuery-File-Upload
                 *
                 * Copyright 2010, Sebastian Tschan
                 * https://blueimp.net
                 *
                 * Licensed under the MIT license:
                 * http://www.opensource.org/licenses/MIT
                 */

                 /* global $, window */

                 $(function () {
                    'use strict';

                    // Initialize the jQuery File Upload widget:
                    $('#fileupload').fileupload({
                        // Uncomment the following to send cross-domain cookies:
                        //xhrFields: {withCredentials: true},
                        url: 'assets/js/vendor/file-upload/server/php/'
                    });

                    // Enable iframe cross-domain access via redirect option:
                    $('#fileupload').fileupload(
                        'option',
                        'redirect',
                        window.location.href.replace(
                            /\/[^\/]*$/,
                            'assets/js/vendor/file-upload/cors/result.html?%s'
                            )
                        );

                    if (window.location.hostname === 'blueimp.github.io') {
                        // Demo settings:
                        $('#fileupload').fileupload('option', {
                            url: '//jquery-file-upload.appspot.com/',
                            // Enable image resizing, except for Android and Opera,
                            // which actually support image resizing, but fail to
                            // send Blob objects via XHR requests:
                            disableImageResize: /Android(?!.*Chrome)|Opera/
                            .test(window.navigator.userAgent),
                            maxFileSize: 5000000,
                            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
                        });
                        // Upload server status check for browsers with CORS support:
                        if ($.support.cors) {
                            $.ajax({
                                url: '//jquery-file-upload.appspot.com/',
                                type: 'HEAD'
                            }).fail(function () {
                                $('<div class="alert alert-danger"/>')
                                .text('Upload server currently unavailable - ' +
                                    new Date())
                                .appendTo('#fileupload');
                            });
                        }
                    } else {
                        // Load existing files:
                        $('#fileupload').addClass('fileupload-processing');
                        $.ajax({
                            // Uncomment the following to send cross-domain cookies:
                            //xhrFields: {withCredentials: true},
                            url: $('#fileupload').fileupload('option', 'url'),
                            dataType: 'json',
                            context: $('#fileupload')[0]
                        }).always(function () {
                            $(this).removeClass('fileupload-processing');
                        }).done(function (result) {
                            $(this).fileupload('option', 'done')
                            .call(this, $.Event('done'), {result: result});
                        });
                    }

                });



             });
         </script>
         <!--/ Page Specific Scripts -->



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                $(function () {

                    'use strict';

                    var console = window.console || { log: function () {} },
                    $alert = $('.docs-alert'),
                    $message = $alert.find('.message'),
                    showMessage = function (message, type) {
                        $message.text(message);

                        if (type) {
                            $message.addClass(type);
                        }

                        $alert.fadeIn();

                        setTimeout(function () {
                            $alert.fadeOut();
                        }, 3000);
                    };

                    // Demo
                    // -------------------------------------------------------------------------

                    (function () {
                        var $image = $('.img-container > img'),
                        $dataX = $('#dataX'),
                        $dataY = $('#dataY'),
                        $dataHeight = $('#dataHeight'),
                        $dataWidth = $('#dataWidth'),
                        $dataRotate = $('#dataRotate'),
                        options = {
                                    // data: {
                                    //   x: 420,
                                    //   y: 60,
                                    //   width: 640,
                                    //   height: 360
                                    // },
                                    // strict: false,
                                    // responsive: false,
                                    // checkImageOrigin: false

                                    // modal: false,
                                    // guides: false,
                                    // highlight: false,
                                    // background: false,

                                    // autoCrop: false,
                                    // autoCropArea: 0.5,
                                    // dragCrop: false,
                                    // movable: false,
                                    // resizable: false,
                                    // rotatable: false,
                                    // zoomable: false,
                                    // touchDragZoom: false,
                                    // mouseWheelZoom: false,

                                    // minCanvasWidth: 320,
                                    // minCanvasHeight: 180,
                                    // minCropBoxWidth: 160,
                                    // minCropBoxHeight: 90,
                                    // minContainerWidth: 320,
                                    // minContainerHeight: 180,

                                    // build: null,
                                    // built: null,
                                    // dragstart: null,
                                    // dragmove: null,
                                    // dragend: null,
                                    // zoomin: null,
                                    // zoomout: null,

                                    aspectRatio: 16 / 9,
                                    preview: '.img-preview',
                                    crop: function (data) {
                                        $dataX.val(Math.round(data.x));
                                        $dataY.val(Math.round(data.y));
                                        $dataHeight.val(Math.round(data.height));
                                        $dataWidth.val(Math.round(data.width));
                                        $dataRotate.val(Math.round(data.rotate));
                                    }
                                };

                                $image.on({
                                    'build.cropper': function (e) {
                                        console.log(e.type);
                                    },
                                    'built.cropper': function (e) {
                                        console.log(e.type);
                                    },
                                    'dragstart.cropper': function (e) {
                                        console.log(e.type, e.dragType);
                                    },
                                    'dragmove.cropper': function (e) {
                                        console.log(e.type, e.dragType);
                                    },
                                    'dragend.cropper': function (e) {
                                        console.log(e.type, e.dragType);
                                    },
                                    'zoomin.cropper': function (e) {
                                        console.log(e.type);
                                    },
                                    'zoomout.cropper': function (e) {
                                        console.log(e.type);
                                    }
                                }).cropper(options);


                        // Methods
                        $(document.body).on('click', '[data-method]', function () {
                            var data = $(this).data(),
                            $target,
                            result;

                            if (data.method) {
                                data = $.extend({}, data); // Clone a new one

                                if (typeof data.target !== 'undefined') {
                                    $target = $(data.target);

                                    if (typeof data.option === 'undefined') {
                                        try {
                                            data.option = JSON.parse($target.val());
                                        } catch (e) {
                                            console.log(e.message);
                                        }
                                    }
                                }

                                result = $image.cropper(data.method, data.option);

                                if (data.method === 'getCroppedCanvas') {
                                    $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);
                                }

                                if ($.isPlainObject(result) && $target) {
                                    try {
                                        $target.val(JSON.stringify(result));
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }

                            }
                        }).on('keydown', function (e) {

                            switch (e.which) {
                                case 37:
                                e.preventDefault();
                                $image.cropper('move', -1, 0);
                                break;

                                case 38:
                                e.preventDefault();
                                $image.cropper('move', 0, -1);
                                break;

                                case 39:
                                e.preventDefault();
                                $image.cropper('move', 1, 0);
                                break;

                                case 40:
                                e.preventDefault();
                                $image.cropper('move', 0, 1);
                                break;
                            }

                        });


                        // Import image
                        var $inputImage = $('#inputImage'),
                        URL = window.URL || window.webkitURL,
                        blobURL;

                        if (URL) {
                            $inputImage.change(function () {
                                var files = this.files,
                                file;

                                if (files && files.length) {
                                    file = files[0];

                                    if (/^image\/\w+$/.test(file.type)) {
                                        blobURL = URL.createObjectURL(file);
                                        $image.one('built.cropper', function () {
                                            URL.revokeObjectURL(blobURL); // Revoke when load complete
                                        }).cropper('reset').cropper('replace', blobURL);
                                        $inputImage.val('');
                                    } else {
                                        showMessage('Please choose an image file.');
                                    }
                                }
                            });
                        } else {
                            $inputImage.parent().remove();
                        }


                        // Options
                        $('.docs-options :checkbox').on('change', function () {
                            var $this = $(this);

                            options[$this.val()] = $this.prop('checked');
                            $image.cropper('destroy').cropper(options);
                        });


                        // Tooltips
                        $('[data-toggle="tooltip"]').tooltip();

                    }());

   });
   });
</script>
<!--/ Page Specific Scripts -->    


         <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                $('#ex1').slider({
                    formatter: function(value) {
                        return 'Current value: ' + value;
                    }
                });
                $("#ex1").on("slide", function(slideEvt) {
                    $("#ex1SliderVal").text(slideEvt.value);
                });

                $("#ex2, #ex3, #ex4, #ex5").slider();

                //load wysiwyg editor
                $('#summernote').summernote({
                    height: 200   //set editable area's height
                });
                //*load wysiwyg editor
            });
        </script>
        <!--/ Page Specific Scripts -->

        <script>
            $(window).load(function(){


            });
        </script>
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


                // Morris line chart

                Morris.Line({
                    element: 'line-example',
                    data: [
                    { y: '2009', a: 15,  b: 5 },
                    { y: '2010', a: 20,  b: 10 },
                    { y: '2011', a: 35,  b: 25 },
                    { y: '2012', a: 40, b: 30 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    lineColors:['#16a085','#FF0066']
                });

                // Morris line area chart

                Morris.Area({
                    element: 'line-area-example',
                    data: [
                    { y: '2009', a: 10,  b: 3 },
                    { y: '2010', a: 14,  b: 5 },
                    { y: '2011', a: 8,  b: 2 },
                    { y: '2012', a: 20, b: 15 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    lineColors:['#a2d200','#d2d2d2'],
                    lineWidth:'0',
                    grid: false,
                    fillOpacity:'0.5'
                });

                // Morris bar chart

                Morris.Bar({
                    element: 'bar-example',
                    data: [
                    { y: '2009', a: 75,  b: 65 },
                    { y: '2010', a: 50,  b: 40 },
                    { y: '2011', a: 75,  b: 65 },
                    { y: '2012', a: 100, b: 90 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    barColors:['#ff4a43','#1693A5']
                });

                // Morris donut chart

                Morris.Donut({
                    element: 'donut-example',
                    data: [
                    {label: "Download Sales", value: 12},
                    {label: "In-Store Sales", value: 30},
                    {label: "Mail-Order Sales", value: 20}
                    ]
                });

                // Sparkline Line Chart
                $('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
                    type: 'line',
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(34, 190, 239, .3)',
                    lineColor: 'rgba(34, 190, 239, .5)',
                    lineWidth: 2,
                    spotRadius: 5,
                    valueSpots:[5,6,8,7,6,8,5,4,7],
                    minSpotColor: '#eaf9fe',
                    maxSpotColor: '#00a3d8',
                    highlightSpotColor: '#00a3d8',
                    highlightLineColor: '#bec6ca',
                    normalRangeMin: 0
                });
                $('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
                    type: 'line',
                    composite: true,
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(255, 74, 67, .6)',
                    lineColor: 'rgba(255, 74, 67, .8)',
                    lineWidth: 2,
                    minSpotColor: '#ffeced',
                    maxSpotColor: '#d90200',
                    highlightSpotColor: '#d90200',
                    highlightLineColor: '#bec6ca',
                    spotRadius: 5,
                    valueSpots:[2,3,4,3,1,2,4,1,3],
                    normalRangeMin: 0
                });

                // Sparkline Bar Chart

                var $el = $('#sparkline02');

                var values = $el.data('values').split(',').map(parseFloat);
                var type = $el.data('type') || 'line' ;
                var height = $el.data('height') || 'auto';

                var parentWidth = $el.parent().width();
                var valueCount = values.length;
                var barSpacing = 5;

                var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

                $el.sparkline(values, {
                    width:'100%',
                    type: type,
                    height: height,
                    barWidth: barWidth,
                    barSpacing: barSpacing,
                    barColor: '#16a085',
                    negBarColor: '#FF0066'
                });

                // Sparkline Pie Chart

                $('#sparkline03').sparkline([5,10,20,15 ], {
                    type: 'pie',
                    width: 'auto',
                    height: '250px',
                    sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
                });

                // Easy-pie charts
                var charts = $('.easypiechart');

                //update instance every 5 sec
                window.setInterval(function() {

                    // refresh easy pie chart
                    charts.each(function() {
                        $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
                    });

                }, 5000);

                //Gauge.js Charts

                var gauge1Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.15,
                    // The length of each line
                    lineWidth: 0.44,
                    // The line thickness
                    pointer: {
                        length: 1,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#1693A5'],
                    [1.0, '#1693A5']
                    ]
                };
                var target1 = document.getElementById('gauge1'); // your canvas element
                var gauge1 = new Gauge(target1).setOptions(gauge1Opts); // create sexy gauge!
                gauge1.maxValue = 3000; // set max gauge value
                gauge1.animationSpeed = 40; // set animation speed (32 is default value)
                gauge1.set(658); // set actual value

                var gauge2Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.10,
                    // The length of each line
                    lineWidth: 0.40,
                    // The line thickness
                    pointer: {
                        length: 0.9,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#FF0066'],
                    [1.0, '#FF0066']
                    ]
                };
                var target2 = document.getElementById('gauge2'); // your canvas element
                var gauge2 = new Gauge(target2).setOptions(gauge2Opts); // create sexy gauge!
                gauge2.maxValue = 3000; // set max gauge value
                gauge2.animationSpeed = 40; // set animation speed (32 is default value)
                gauge2.set(1258); // set actual value

                var gauge3Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.05,
                    // The length of each line
                    lineWidth: 0.34,
                    // The line thickness
                    pointer: {
                        length: 0.8,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#428bca'],
                    [1.0, '#428bca']
                    ]
                };
                var target3 = document.getElementById('gauge3'); // your canvas element
                var gauge3 = new Gauge(target3).setOptions(gauge3Opts); // create sexy gauge!
                gauge3.maxValue = 3000; // set max gauge value
                gauge3.animationSpeed = 40; // set animation speed (32 is default value)
                gauge3.set(1458); // set actual value

                var gauge4Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0,
                    // The length of each line
                    lineWidth: 0.3,
                    // The line thickness
                    pointer: {
                        length: 0.7,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#f0ad4e'],
                    [1.0, '#f0ad4e']
                    ]
                };
                var target4 = document.getElementById('gauge4'); // your canvas element
                var gauge4 = new Gauge(target4).setOptions(gauge4Opts); // create sexy gauge!
                gauge4.maxValue = 3000; // set max gauge value
                gauge4.animationSpeed = 40; // set animation speed (32 is default value)
                gauge4.set(2514); // set actual value



                // Initialize Line Chart
                var data1 = [{
                    data: [[1,5.3],[2,5.9],[3,7.2],[4,8],[5,7],[6,6.5],[7,6.2],[8,6.7],[9,7.2],[10,7],[11,6.8],[12,7]],
                    label: 'Sales',
                    points: {
                        show: true,
                        radius: 6
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 5,
                        fill: 0
                    }
                }, {
                    data: [[1,6.6],[2,7.4],[3,8.6],[4,9.4],[5,8.3],[6,7.9],[7,7.2],[8,7.7],[9,8.9],[10,8.4],[11,8],[12,8.3]],
                    label: 'Orders',
                    points: {
                        show: true,
                        radius: 6
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 5,
                        fill: 0
                    }
                }];

                var options1 = {
                    colors: ['#a2d200', '#cd97eb'],
                    series: {
                        shadowSize: 0
                    },
                    xaxis:{
                        font: {
                            color: '#ccc'
                        },
                        position: 'bottom',
                        ticks: [
                        [ 1, 'Jan' ], [ 2, 'Feb' ], [ 3, 'Mar' ], [ 4, 'Apr' ], [ 5, 'May' ], [ 6, 'Jun' ], [ 7, 'Jul' ], [ 8, 'Aug' ], [ 9, 'Sep' ], [ 10, 'Oct' ], [ 11, 'Nov' ], [ 12, 'Dec' ]
                        ]
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y.4',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot1 = $.plot($("#line-chart"), data1, options1);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot1.resize();
                    plot1.setupGrid();
                    plot1.draw();
                });
                // * Initialize Line Chart

                // Initialize Bar Chart

                var barData = [];

                for (var i = 0; i < 20; ++i) {
                  barData.push([i, Math.sin(i+0.1)]);
              }

              var data2 = [{
                data: barData,
                label: 'Satisfaction',
                color: '#e05d6f'
            }];

            var options2 = {
                series: {
                    shadowSize: 0
                },
                bars: {
                    show: true,
                    barWidth: 0.6,
                    lineWidth: 0,
                    fillColor: {
                        colors: [{ opacity:0.8 }, { opacity:0.8}]
                    }
                },
                xaxis: {
                    font: {
                        color: '#ccc'
                    }
                },
                yaxis: {
                    font: {
                        color: '#ccc'
                    },
                    min: -2,
                    max: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderWidth: 0,
                    color: '#ccc'
                },
                tooltip: true
            };

            var plot2 = $.plot($("#bar-chart"), data2, options2);

            $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot2.resize();
                    plot2.setupGrid();
                    plot2.draw();
                });
                // * Initialize Bar Chart

                // Initialize Ordered Chart
                var data3 = [{
                    data: [[10, 50], [20, 80], [30, 60], [40, 40]],
                    label: 'A'
                }, {
                    data: [[10, 30], [20, 50], [30, 70], [40, 50]],
                    label: 'B'
                }, {
                    data: [[10, 40], [20, 60], [30, 90], [40, 60]],
                    label: 'C'
                }];

                var options3 = {
                    series: {
                        shadowSize: 0
                    },
                    bars: {
                        show: true,
                        fill: true,
                        lineWidth: 0,
                        fillColor: {
                            colors: [{ opacity:0.6 }, { opacity:0.8}]
                        },
                        order: 1, // order bars
                        colors: ['#428bca','#d9534f','#A40778']
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true
                };

                var plot3 = $.plot($("#ordered-chart"), data3, options3);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot3.resize();
                    plot3.setupGrid();
                    plot3.draw();
                });
                // * Initialize Ordered Chart

                // Initialize Staced Chart
                var data4 = [{
                    data: [[10, 50], [20, 80], [30, 60], [40, 40]],
                    label: 'A'
                }, {
                    data: [[10, 30], [20, 50], [30, 70], [40, 50]],
                    label: 'B'
                }, {
                    data: [[10, 40], [20, 60], [30, 90], [40, 60]],
                    label: 'C'
                }];

                var options4 = {
                    series: {
                        shadowSize: 0,
                        stack: true // stack bars
                    },
                    bars: {
                        show: true,
                        fill: true,
                        lineWidth: 0,
                        fillColor: {
                            colors: [{ opacity:0.6 }, { opacity:0.8}]
                        },
                        colors: ['#428bca','#d9534f','#A40778']
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true
                };

                var plot4 = $.plot($("#stacked-chart"), data4, options4);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot4.resize();
                    plot4.setupGrid();
                    plot4.draw();
                });
                // * Initialize Stacked Chart

                // Initialize Combined Chart
                var data5 = [{
                    data: [[0, 8], [1, 15], [2, 16], [3, 14], [4,16], [5,18], [6,17], [7,15], [8,12], [9,13]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 3
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[0, 5], [1, 9], [2, 10], [3, 8], [4,9], [5, 12], [6, 14], [7, 13], [8, 10], [9, 12]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.4,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.6 }, { opacity: 0.8}] }
                    }
                }];

                var options5 = {
                    colors: ['#16a085','#FF0066'],
                    series: {
                        shadowSize: 0
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                };

                var plot5 = $.plot($("#combined-chart"), data5, options5);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot5.resize();
                    plot5.setupGrid();
                    plot5.draw();
                });
                // * Initialize Stacked Chart

                // Initialize Pie Chart
                var data6 = [
                { label: 'Chrome', data: 30 },
                { label: 'Firefox', data: 15 },
                { label: 'Safari', data: 15 },
                { label: 'IE', data: 10 },
                { label: 'Opera', data: 5 },
                { label: 'Other', data: 10}
                ];

                var options6 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.05
                            }
                        }
                    },
                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot6 = $.plot($("#pie-chart"), data6, options6);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot6.resize();
                    plot6.setupGrid();
                    plot6.draw();
                });
                // * Initialize Pie Chart

                // Initialize Donut Chart
                var data7 = [
                { label: 'Chrome', data: 30 },
                { label: 'Firefox', data: 15 },
                { label: 'Safari', data: 15 },
                { label: 'IE', data: 10 },
                { label: 'Opera', data: 5 },
                { label: 'Other', data: 10}
                ];

                var options7 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0.5,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.05
                            }
                        }
                    },
                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot7 = $.plot($("#donut-chart"), data7, options7);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot7.resize();
                    plot7.setupGrid();
                    plot7.draw();
                });
                // * Initialize Donut Chart

                // Initialize Realtime Chart
                var realTimeData = [];
                var totalPoints = 300;
                var updateInterval = 30;

                function getData() {
                    if (realTimeData.length > 0)
                        realTimeData = realTimeData.slice(1);

                    // Do a random walk

                    while (realTimeData.length < totalPoints) {

                        var prev = realTimeData.length > 0 ? realTimeData[realTimeData.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        realTimeData.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < realTimeData.length; ++i) {
                        res.push([i, realTimeData[i]])
                    }

                    return res;
                }

                var options8 = {
                    colors: ['#a2d200'],
                    series: {
                        shadowSize: 0,
                        lines: {
                            show: true,
                            fill: 0.1
                        }
                    },
                    xaxis:{
                        font: {
                            color: '#ccc'
                        },
                        tickFormatter: function() {
                            return '';
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        },
                        min: 0,
                        max: 110
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%y%',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot8 = $.plot($("#realtime-chart"), [getData()], options8);

                function update() {
                    plot8.setData([getData()]);
                    plot8.draw();
                    setTimeout(update, updateInterval);
                };

                update();

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot8.resize();
                    plot8.setupGrid();
                    plot8.draw();
                });
                // * Initialize Realtime Chart

                // Rickshaw Chart
                var graph1 = new Rickshaw.Graph( {
                    element: document.querySelector("#rickshaw"),
                    renderer: 'area',
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: [{x: 0, y: 23}, {x: 1, y: 15}, {x: 2, y: 79}, {x: 3, y: 31}, {x: 4, y: 60}]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: [{x: 0, y: 30}, {x: 1, y: 20}, {x: 2, y: 64}, {x: 3, y: 50}, {x: 4, y: 15}]
                    }]
                });
                graph1.render();
                // *Rickshaw Chart

                // Rickshaw Realtime Chart
                var graph2;

                var seriesData = [ [], []];
                var random = new Rickshaw.Fixtures.RandomData(50);
                var updateInterval = 800;

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                graph2 = new Rickshaw.Graph( {
                    element: document.querySelector("#rickshaw-realtime"),
                    height: 250,
                    renderer: 'area',
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: seriesData[0]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: seriesData[1]
                    }]
                } );

                var hoverDetail = new Rickshaw.Graph.HoverDetail( {
                    graph: graph2
                });

                setInterval( function() {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph2.update();

                },updateInterval);
                // *Rickshaw Realtime Chart


            });
        </script>

        <script>
            $(window).load(function(){

                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev',
                        center: 'title',
                        right: 'next'
                    },
                    defaultDate: '2015-02-12',
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function() {
                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }
                    },
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                    {
                        title: 'All Day Event',
                        start: '2015-02-01',
                        className: 'b-l b-2x b-greensea'
                    },
                    {
                        title: 'Long Event',
                        start: '2015-02-07',
                        end: '2015-02-10',
                        className: 'bg-dutch'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2015-02-09T16:00:00',
                        className: 'b-l b-2x b-lightred'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2015-02-16T16:00:00',
                        className: 'b-l b-2x b-success'
                    },
                    {
                        title: 'Conference',
                        start: '2015-02-11',
                        end: '2015-02-13',
                        className: 'b-l b-2x b-primary'
                    },
                    {
                        title: 'Meeting',
                        start: '2015-02-12T10:30:00',
                        end: '2015-02-12T12:30:00',
                        className: 'b-l b-2x b-greensea'
                    },
                    {
                        title: 'Lunch',
                        start: '2015-02-12T12:00:00',
                        className: 'b-l b-2x b-primary'
                    },
                    {
                        title: 'Meeting',
                        start: '2015-02-12T14:30:00',
                        className: 'b-l b-2x b-drank'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2015-02-12T17:30:00',
                        className: 'b-l b-2x b-lightred'
                    },
                    {
                        title: 'Dinner',
                        start: '2015-02-12T20:00:00',
                        className: 'b-l b-2x b-greensea'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2015-02-13T07:00:00',
                        className: 'b-l b-2x b-primary'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2015-02-28',
                        className: 'b-l b-2x b-greensea'
                    }
                    ]
                });

                // Hide default header
                //$('.fc-header').hide();



                // Previous month action
                $('#cal-prev').click(function(){
                    $('#calendar').fullCalendar( 'prev' );
                });

                // Next month action
                $('#cal-next').click(function(){
                    $('#calendar').fullCalendar( 'next' );
                });

                // Change to month view
                $('#change-view-month').click(function(){
                    $('#calendar').fullCalendar('changeView', 'month');

                    // safari fix
                    $('#content .main').fadeOut(0, function() {
                        setTimeout( function() {
                            $('#content .main').css({'display':'table'});
                        }, 0);
                    });

                });

                // Change to week view
                $('#change-view-week').click(function(){
                    $('#calendar').fullCalendar( 'changeView', 'agendaWeek');

                    // safari fix
                    $('#content .main').fadeOut(0, function() {
                        setTimeout( function() {
                            $('#content .main').css({'display':'table'});
                        }, 0);
                    });

                });

                // Change to day view
                $('#change-view-day').click(function(){
                    $('#calendar').fullCalendar( 'changeView','agendaDay');

                    // safari fix
                    $('#content .main').fadeOut(0, function() {
                        setTimeout( function() {
                            $('#content .main').css({'display':'table'});
                        }, 0);
                    });

                });

                // Change to today view
                $('#change-view-today').click(function(){
                    $('#calendar').fullCalendar('today');
                });

                /* initialize the external events
                -----------------------------------------------------------------*/
                $('#external-events .event-control').each(function() {

                    // store data so the calendar knows to render an event upon drop
                    $(this).data('event', {
                        title: $.trim($(this).text()), // use the element's text as the event title
                        stick: true // maintain when user navigates (see docs on the renderEvent method)
                    });

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 999,
                        revert: true,      // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    });

                });

                $('#external-events .event-control .event-remove').on('click', function(){
                    $(this).parent().remove();
                });

                // Submitting new event form
                $('#add-event').submit(function(e){
                    e.preventDefault();
                    var form = $(this);

                    var newEvent = $('<div class="event-control p-10 mb-10">'+$('#event-title').val() +'<a class="pull-right text-muted event-remove"><i class="fa fa-trash-o"></i></a></div>');

                    $('#external-events .event-control:last').after(newEvent);

                    $('#external-events .event-control').each(function() {

                        // store data so the calendar knows to render an event upon drop
                        $(this).data('event', {
                            title: $.trim($(this).text()), // use the element's text as the event title
                            stick: true // maintain when user navigates (see docs on the renderEvent method)
                        });

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 999,
                            revert: true,      // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });

                    $('#external-events .event-control .event-remove').on('click', function(){
                        $(this).parent().remove();
                    });

                    form[0].reset();

                    $('#cal-new-event').modal('hide');

                });


            });
        </script>

        <script>
            $(window).load(function(){

                var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
                totalButtons7Click = buttons7Click.length;

                buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

                function activate() {
                    var self = this, activatedClass = 'btn-activated';

                    if( classie.has( this, 'btn-ef-7h' ) ) {
                        // if it is the first of the two btn-7h then activatedClass = 'btn-activated-error';
                        // if it is the second then activatedClass = 'btn-activated-success'
                        activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-6 ? 'btn-activated-error' : 'btn-activated-success';
                    }

                    if( !classie.has( this, activatedClass ) ) {
                        classie.add( this, activatedClass );
                        setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
                    }
                }
            });
        </script>



        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->

        <!--/ custom javascripts -->







        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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
        <!--================================================ -->
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
        <!--/ Page Specific Scripts -->





        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> 
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


                // Morris line chart

                Morris.Line({
                    element: 'line-example',
                    data: [
                    { y: '2009', a: 15,  b: 5 },
                    { y: '2010', a: 20,  b: 10 },
                    { y: '2011', a: 35,  b: 25 },
                    { y: '2012', a: 40, b: 30 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    lineColors:['#16a085','#FF0066']
                });

                // Morris line area chart

                Morris.Area({
                    element: 'line-area-example',
                    data: [
                    { y: '2009', a: 10,  b: 3 },
                    { y: '2010', a: 14,  b: 5 },
                    { y: '2011', a: 8,  b: 2 },
                    { y: '2012', a: 20, b: 15 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    lineColors:['#a2d200','#d2d2d2'],
                    lineWidth:'0',
                    grid: false,
                    fillOpacity:'0.5'
                });

                // Morris bar chart

                Morris.Bar({
                    element: 'bar-example',
                    data: [
                    { y: '2009', a: 75,  b: 65 },
                    { y: '2010', a: 50,  b: 40 },
                    { y: '2011', a: 75,  b: 65 },
                    { y: '2012', a: 100, b: 90 }
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    barColors:['#ff4a43','#1693A5']
                });

                // Morris donut chart

                Morris.Donut({
                    element: 'donut-example',
                    data: [
                    {label: "Download Sales", value: 12},
                    {label: "In-Store Sales", value: 30},
                    {label: "Mail-Order Sales", value: 20}
                    ]
                });

                // Sparkline Line Chart
                $('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
                    type: 'line',
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(34, 190, 239, .3)',
                    lineColor: 'rgba(34, 190, 239, .5)',
                    lineWidth: 2,
                    spotRadius: 5,
                    valueSpots:[5,6,8,7,6,8,5,4,7],
                    minSpotColor: '#eaf9fe',
                    maxSpotColor: '#00a3d8',
                    highlightSpotColor: '#00a3d8',
                    highlightLineColor: '#bec6ca',
                    normalRangeMin: 0
                });
                $('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
                    type: 'line',
                    composite: true,
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(255, 74, 67, .6)',
                    lineColor: 'rgba(255, 74, 67, .8)',
                    lineWidth: 2,
                    minSpotColor: '#ffeced',
                    maxSpotColor: '#d90200',
                    highlightSpotColor: '#d90200',
                    highlightLineColor: '#bec6ca',
                    spotRadius: 5,
                    valueSpots:[2,3,4,3,1,2,4,1,3],
                    normalRangeMin: 0
                });

                // Sparkline Bar Chart

                var $el = $('#sparkline02');

                var values = $el.data('values').split(',').map(parseFloat);
                var type = $el.data('type') || 'line' ;
                var height = $el.data('height') || 'auto';

                var parentWidth = $el.parent().width();
                var valueCount = values.length;
                var barSpacing = 5;

                var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

                $el.sparkline(values, {
                    width:'100%',
                    type: type,
                    height: height,
                    barWidth: barWidth,
                    barSpacing: barSpacing,
                    barColor: '#16a085',
                    negBarColor: '#FF0066'
                });

                // Sparkline Pie Chart

                $('#sparkline03').sparkline([5,10,20,15 ], {
                    type: 'pie',
                    width: 'auto',
                    height: '250px',
                    sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
                });

                // Easy-pie charts
                var charts = $('.easypiechart');

                //update instance every 5 sec
                window.setInterval(function() {

                    // refresh easy pie chart
                    charts.each(function() {
                        $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
                    });

                }, 5000);

                //Gauge.js Charts

                var gauge1Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.15,
                    // The length of each line
                    lineWidth: 0.44,
                    // The line thickness
                    pointer: {
                        length: 1,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#1693A5'],
                    [1.0, '#1693A5']
                    ]
                };
                var target1 = document.getElementById('gauge1'); // your canvas element
                var gauge1 = new Gauge(target1).setOptions(gauge1Opts); // create sexy gauge!
                gauge1.maxValue = 3000; // set max gauge value
                gauge1.animationSpeed = 40; // set animation speed (32 is default value)
                gauge1.set(658); // set actual value

                var gauge2Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.10,
                    // The length of each line
                    lineWidth: 0.40,
                    // The line thickness
                    pointer: {
                        length: 0.9,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#FF0066'],
                    [1.0, '#FF0066']
                    ]
                };
                var target2 = document.getElementById('gauge2'); // your canvas element
                var gauge2 = new Gauge(target2).setOptions(gauge2Opts); // create sexy gauge!
                gauge2.maxValue = 3000; // set max gauge value
                gauge2.animationSpeed = 40; // set animation speed (32 is default value)
                gauge2.set(1258); // set actual value

                var gauge3Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0.05,
                    // The length of each line
                    lineWidth: 0.34,
                    // The line thickness
                    pointer: {
                        length: 0.8,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#428bca'],
                    [1.0, '#428bca']
                    ]
                };
                var target3 = document.getElementById('gauge3'); // your canvas element
                var gauge3 = new Gauge(target3).setOptions(gauge3Opts); // create sexy gauge!
                gauge3.maxValue = 3000; // set max gauge value
                gauge3.animationSpeed = 40; // set animation speed (32 is default value)
                gauge3.set(1458); // set actual value

                var gauge4Opts = {
                    lines: 12,
                    // The number of lines to draw
                    angle: 0,
                    // The length of each line
                    lineWidth: 0.3,
                    // The line thickness
                    pointer: {
                        length: 0.7,
                        // The radius of the inner circle
                        strokeWidth: 0.035,
                        // The rotation offset
                        color: '#000000' // Fill color
                    },
                    limitMax: 'false',
                    // If true, the pointer will not go past the end of the gauge
                    colorStart: '#6FADCF',
                    // Colors
                    colorStop: '#8FC0DA',
                    // just experiment with them
                    strokeColor: '#f2f2f2',
                    // to see which ones work best for you
                    generateGradient: true,
                    percentColors: [
                    [0.0, '#f0ad4e'],
                    [1.0, '#f0ad4e']
                    ]
                };
                var target4 = document.getElementById('gauge4'); // your canvas element
                var gauge4 = new Gauge(target4).setOptions(gauge4Opts); // create sexy gauge!
                gauge4.maxValue = 3000; // set max gauge value
                gauge4.animationSpeed = 40; // set animation speed (32 is default value)
                gauge4.set(2514); // set actual value



                // Initialize Line Chart
                var data1 = [{
                    data: [[1,5.3],[2,5.9],[3,7.2],[4,8],[5,7],[6,6.5],[7,6.2],[8,6.7],[9,7.2],[10,7],[11,6.8],[12,7]],
                    label: 'Sales',
                    points: {
                        show: true,
                        radius: 6
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 5,
                        fill: 0
                    }
                }, {
                    data: [[1,6.6],[2,7.4],[3,8.6],[4,9.4],[5,8.3],[6,7.9],[7,7.2],[8,7.7],[9,8.9],[10,8.4],[11,8],[12,8.3]],
                    label: 'Orders',
                    points: {
                        show: true,
                        radius: 6
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 5,
                        fill: 0
                    }
                }];

                var options1 = {
                    colors: ['#a2d200', '#cd97eb'],
                    series: {
                        shadowSize: 0
                    },
                    xaxis:{
                        font: {
                            color: '#ccc'
                        },
                        position: 'bottom',
                        ticks: [
                        [ 1, 'Jan' ], [ 2, 'Feb' ], [ 3, 'Mar' ], [ 4, 'Apr' ], [ 5, 'May' ], [ 6, 'Jun' ], [ 7, 'Jul' ], [ 8, 'Aug' ], [ 9, 'Sep' ], [ 10, 'Oct' ], [ 11, 'Nov' ], [ 12, 'Dec' ]
                        ]
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y.4',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot1 = $.plot($("#line-chart"), data1, options1);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot1.resize();
                    plot1.setupGrid();
                    plot1.draw();
                });
                // * Initialize Line Chart

                // Initialize Bar Chart

                var barData = [];

                for (var i = 0; i < 20; ++i) {
                  barData.push([i, Math.sin(i+0.1)]);
              }

              var data2 = [{
                data: barData,
                label: 'Satisfaction',
                color: '#e05d6f'
            }];

            var options2 = {
                series: {
                    shadowSize: 0
                },
                bars: {
                    show: true,
                    barWidth: 0.6,
                    lineWidth: 0,
                    fillColor: {
                        colors: [{ opacity:0.8 }, { opacity:0.8}]
                    }
                },
                xaxis: {
                    font: {
                        color: '#ccc'
                    }
                },
                yaxis: {
                    font: {
                        color: '#ccc'
                    },
                    min: -2,
                    max: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderWidth: 0,
                    color: '#ccc'
                },
                tooltip: true
            };

            var plot2 = $.plot($("#bar-chart"), data2, options2);

            $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot2.resize();
                    plot2.setupGrid();
                    plot2.draw();
                });
                // * Initialize Bar Chart

                // Initialize Ordered Chart
                var data3 = [{
                    data: [[10, 50], [20, 80], [30, 60], [40, 40]],
                    label: 'A'
                }, {
                    data: [[10, 30], [20, 50], [30, 70], [40, 50]],
                    label: 'B'
                }, {
                    data: [[10, 40], [20, 60], [30, 90], [40, 60]],
                    label: 'C'
                }];

                var options3 = {
                    series: {
                        shadowSize: 0
                    },
                    bars: {
                        show: true,
                        fill: true,
                        lineWidth: 0,
                        fillColor: {
                            colors: [{ opacity:0.6 }, { opacity:0.8}]
                        },
                        order: 1, // order bars
                        colors: ['#428bca','#d9534f','#A40778']
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true
                };

                var plot3 = $.plot($("#ordered-chart"), data3, options3);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot3.resize();
                    plot3.setupGrid();
                    plot3.draw();
                });
                // * Initialize Ordered Chart

                // Initialize Staced Chart
                var data4 = [{
                    data: [[10, 50], [20, 80], [30, 60], [40, 40]],
                    label: 'A'
                }, {
                    data: [[10, 30], [20, 50], [30, 70], [40, 50]],
                    label: 'B'
                }, {
                    data: [[10, 40], [20, 60], [30, 90], [40, 60]],
                    label: 'C'
                }];

                var options4 = {
                    series: {
                        shadowSize: 0,
                        stack: true // stack bars
                    },
                    bars: {
                        show: true,
                        fill: true,
                        lineWidth: 0,
                        fillColor: {
                            colors: [{ opacity:0.6 }, { opacity:0.8}]
                        },
                        colors: ['#428bca','#d9534f','#A40778']
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true
                };

                var plot4 = $.plot($("#stacked-chart"), data4, options4);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot4.resize();
                    plot4.setupGrid();
                    plot4.draw();
                });
                // * Initialize Stacked Chart

                // Initialize Combined Chart
                var data5 = [{
                    data: [[0, 8], [1, 15], [2, 16], [3, 14], [4,16], [5,18], [6,17], [7,15], [8,12], [9,13]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 3
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[0, 5], [1, 9], [2, 10], [3, 8], [4,9], [5, 12], [6, 14], [7, 13], [8, 10], [9, 12]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.4,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.6 }, { opacity: 0.8}] }
                    }
                }];

                var options5 = {
                    colors: ['#16a085','#FF0066'],
                    series: {
                        shadowSize: 0
                    },
                    xaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        }
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                };

                var plot5 = $.plot($("#combined-chart"), data5, options5);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot5.resize();
                    plot5.setupGrid();
                    plot5.draw();
                });
                // * Initialize Stacked Chart

                // Initialize Pie Chart
                var data6 = [
                { label: 'Chrome', data: 30 },
                { label: 'Firefox', data: 15 },
                { label: 'Safari', data: 15 },
                { label: 'IE', data: 10 },
                { label: 'Opera', data: 5 },
                { label: 'Other', data: 10}
                ];

                var options6 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.05
                            }
                        }
                    },
                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot6 = $.plot($("#pie-chart"), data6, options6);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot6.resize();
                    plot6.setupGrid();
                    plot6.draw();
                });
                // * Initialize Pie Chart

                // Initialize Donut Chart
                var data7 = [
                { label: 'Chrome', data: 30 },
                { label: 'Firefox', data: 15 },
                { label: 'Safari', data: 15 },
                { label: 'IE', data: 10 },
                { label: 'Opera', data: 5 },
                { label: 'Other', data: 10}
                ];

                var options7 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0.5,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.05
                            }
                        }
                    },
                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot7 = $.plot($("#donut-chart"), data7, options7);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot7.resize();
                    plot7.setupGrid();
                    plot7.draw();
                });
                // * Initialize Donut Chart

                // Initialize Realtime Chart
                var realTimeData = [];
                var totalPoints = 300;
                var updateInterval = 30;

                function getData() {
                    if (realTimeData.length > 0)
                        realTimeData = realTimeData.slice(1);

                    // Do a random walk

                    while (realTimeData.length < totalPoints) {

                        var prev = realTimeData.length > 0 ? realTimeData[realTimeData.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        realTimeData.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < realTimeData.length; ++i) {
                        res.push([i, realTimeData[i]])
                    }

                    return res;
                }

                var options8 = {
                    colors: ['#a2d200'],
                    series: {
                        shadowSize: 0,
                        lines: {
                            show: true,
                            fill: 0.1
                        }
                    },
                    xaxis:{
                        font: {
                            color: '#ccc'
                        },
                        tickFormatter: function() {
                            return '';
                        }
                    },
                    yaxis: {
                        font: {
                            color: '#ccc'
                        },
                        min: 0,
                        max: 110
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%y%',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot8 = $.plot($("#realtime-chart"), [getData()], options8);

                function update() {
                    plot8.setData([getData()]);
                    plot8.draw();
                    setTimeout(update, updateInterval);
                };

                update();

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot8.resize();
                    plot8.setupGrid();
                    plot8.draw();
                });
                // * Initialize Realtime Chart

                // Rickshaw Chart
                var graph1 = new Rickshaw.Graph( {
                    element: document.querySelector("#rickshaw"),
                    renderer: 'area',
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: [{x: 0, y: 23}, {x: 1, y: 15}, {x: 2, y: 79}, {x: 3, y: 31}, {x: 4, y: 60}]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: [{x: 0, y: 30}, {x: 1, y: 20}, {x: 2, y: 64}, {x: 3, y: 50}, {x: 4, y: 15}]
                    }]
                });
                graph1.render();
                // *Rickshaw Chart

                // Rickshaw Realtime Chart
                var graph2;

                var seriesData = [ [], []];
                var random = new Rickshaw.Fixtures.RandomData(50);
                var updateInterval = 800;

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                graph2 = new Rickshaw.Graph( {
                    element: document.querySelector("#rickshaw-realtime"),
                    height: 250,
                    renderer: 'area',
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: seriesData[0]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: seriesData[1]
                    }]
                } );

                var hoverDetail = new Rickshaw.Graph.HoverDetail( {
                    graph: graph2
                });

                setInterval( function() {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph2.update();

                },updateInterval);
                // *Rickshaw Realtime Chart


            });
        </script>
        <!--/ Page Specific Scripts -->