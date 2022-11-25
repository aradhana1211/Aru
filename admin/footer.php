

          <footer class="footer d-none d-sm-block">
            <div class="footer-inner bgc-white-tp1">
              <div class="pt-3 border-none border-t-3 brc-grey-l2 border-double">
                <span class="text-primary-m1 font-bolder text-120">Penabiotic</span>
                <span class="text-grey">International</span>
                
              </div>
            </div><!-- .footer-inner -->

            <!-- `scroll to top` button inside footer (for example when in boxed layout) -->
            <div class="footer-tools">
              <a href="#" class="btn-scroll-up btn btn-dark mb-2 mr-2">
                <i class="fa fa-angle-double-up mx-2px text-95"></i>
              </a>
            </div>
          </footer>


        </div>


      </div>
    </div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


    <!-- include vendor scripts used in "DataTables" page. see "/views//pages/partials/table-datatables/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-colreorder@1.5.3/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-select@1.3.3/js/dataTables.select.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@1.7.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.7.0/js/buttons.colVis.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/datatables.net-responsive@2.2.7/js/dataTables.responsive.min.js"></script>


    <!-- include ace.js -->
    <script src="./dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="./app/browser/demo.min.js"></script>



    <!-- "DataTables" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        var tableId = '#datatable'

        var tableHead = document.querySelector('.sticky-nav')
        tableHead.addEventListener('sticky-change', function(e) {
          // when  thead becomes sticky, add is-stuck class to it (which adds a border-bottom to it)
          this.classList.toggle('is-stuck', e.detail.isSticky)
        })



        $.extend(true, $.fn.dataTable.defaults, {
          dom: "<'row'<'col-12 col-sm-6'l><'col-12 col-sm-6 text-right table-tools-col'f>>" +
            "<'row'<'col-12'tr>>" +
            "<'row'<'col-12 col-md-5'i><'col-12 col-md-7'p>>",
          renderer: 'bootstrap'
        })

        var $_table = $(tableId).DataTable({
          responsive: true,

          /** optional scrolling **/
          // scrollY: "300px",
          // scrollCollapse: true,

          colReorder: {
            //disable column reordering for first and last columns
            fixedColumnsLeft: 1,
            fixedColumnsRight: 1
          },

          // sDom: 'BRfrtlip',

          classes: {
            sLength: "dataTables_length text-left w-auto",
          },


          buttons: {
            dom: {
              button: {
                className: 'btn' //remove the default 'btn-secondary'
              },
              container: {
                className: 'dt-buttons btn-group bgc-white-tp2 text-right w-auto'
              }
            },

            buttons: [{
                "extend": "colvis",
                "text": "<i class='fa fa-eye text-125 text-dark-m2'></i> <span class='d-none'>Show/hide columns</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary",
                columns: ':not(:first)'
              },

              {
                "extend": "copy",
                "text": "<i class='far fa-copy text-125 text-purple'></i> <span class='d-none'>Copy to clipboard</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary"
              },

              {
                "extend": "csv",
                "text": "<i class='fa fa-database text-125 text-success-m1'></i> <span class='d-none'>Export to CSV</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary"
              },

              {
                "extend": "print",
                "text": "<i class='fa fa-print text-125 text-orange-d1'></i> <span class='d-none'>Print</span>",
                "className": "btn-light-default btn-bgc-white  btn-h-outline-primary btn-a-outline-primary",
                autoPrint: false,
                message: 'This print was produced using the Print button for DataTables'
              }
            ]
          },


          // first and last column are not sortable
          columnDefs: [{
              orderable: false,
              className: null,
              targets: 0
            },
            {
              orderable: false,
              className: null,
              targets: 1
            },
            {
              orderable: false,
              className: null,
              targets: -1
            },
            {
              responsivePriority: 1,
              targets: 2
            }
          ],


          // multiple row selection
          select: {
            style: 'multis'
          },

          // no specific initial ordering
          order: [],

          language: {
            search: '<i class="fa fa-search pos-abs mt-2 pt-3px ml-25 text-blue-m2"></i>',
            searchPlaceholder: " Search..."
          }
        })


        // specify position of table buttons
        console.log(window.location.pathname.split("/").length);
        var count = window.location.pathname.split("/").length - 1;
        // window.location.pathname.split("/").length
        if(window.location.pathname.split("/")[count] == 'userindex.php'){
          $('.table-tools-col')
          .append($_table.buttons().container())
          // move searchbox into table header
          .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-45 radius-round').removeClass('form-control-sm')
          // and add a "+" button
          .end().append('<a data-rel="tooltip" type="button" class="btn radius-round btn-outline-primary border-2 btn-sm ml-2" href="useradd.php" title="Add New"><i class="fa fa-plus"></i></a>')
          

        } else if(window.location.pathname.split("/")[count] == 'brandindex.php'){

          $('.table-tools-col')
          .append($_table.buttons().container())
          // move searchbox into table header
          .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-45 radius-round').removeClass('form-control-sm')
          // and add a "+" button
          .end().append('<a data-rel="tooltip" type="button" class="btn radius-round btn-outline-primary border-2 btn-sm ml-2" href="brandadd.php" title="Add New"><i class="fa fa-plus"></i></a>')

        } else {
         $('.table-tools-col')
          .append($_table.buttons().container())
          // move searchbox into table header
          .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-45 radius-round').removeClass('form-control-sm')
          // and add a "+" button
          .end().append('<button data-rel="tooltip" type="button" class="btn radius-round btn-outline-primary border-2 btn-sm ml-2" data-toggle="modal" data-target="#loginModal" title="Add New"><i class="fa fa-plus"></i></button>')

        }
        


        // helper methods to add/remove bgc-h-* class when selecting/deselecting rows
        var _highlightSelectedRow = function(row) {
          row.querySelector('input[type=checkbox]').checked = true
          row.classList.add('bgc-success-l3')
          row.classList.remove('bgc-h-default-l4')
        }
        var _unhighlightDeselectedRow = function(row) {
          row.querySelector('input[type=checkbox]').checked = false
          row.classList.remove('bgc-success-l3')
          row.classList.add('bgc-h-default-l4')
        }

        // listen to select/deselect event to highlight rows
        $_table
          .on('select', function(e, dt, type, index) {
            if (type == 'row') {
              var row = $_table.row(index).node()
              _highlightSelectedRow(row)
            }
          })
          .on('deselect', function(e, dt, type, index) {
            if (type == 'row') {
              var row = $_table.row(index).node()
              _unhighlightDeselectedRow(row)
            }
          })

        // when clicking the checkbox in table header, select/deselect all rows
        $(tableId)
          .on('click', 'th input[type=checkbox]', function() {
            if (this.checked) {
              $_table.rows().select().every(function() {
                _highlightSelectedRow(this.node())
              });
            } else {
              $_table.rows().deselect().every(function() {
                _unhighlightDeselectedRow(this.node())
              })
            }
          })

        // don't select row if we click on the "show details" `plus` sign (td)
        $(tableId).on('click', 'td.dtr-control', function(e) {
          e.stopPropagation()
        })


        // add/remove bgc-h-* class to TH when soring columns
        var previousTh = null
        var toggleTH_highlight = function(th) {
          th.classList.toggle('bgc-yellow-l2')
          th.classList.toggle('bgc-h-yellow-l3')
          th.classList.toggle('text-blue-d2')
        }

        $(tableId)
          .on('click', 'th:not(.sorting_disabled)', function() {
            if (previousTh != null) toggleTH_highlight(previousTh) // unhighlight previous TH
            toggleTH_highlight(this)
            previousTh = this
          })

        // don't select row when clicking on the edit icon
        $('a[data-action=edit').on('click', function(e) {
          e.preventDefault()
          e.stopPropagation() // don't select
        })

        // add a dark border
        $('.dataTables_wrapper')
          .addClass('border-b-1 border-x-1 brc-default-l2')

          // highlight DataTable header
          // also already done in CSS, but you can use custom colors here
          .find('.row:first-of-type')
          .addClass('border-b-1 brc-default-l3 bgc-blue-l4')
          .next().addClass('mt-n1px') // move the next `.row` up by 1px to go below header's border

        // highlight DataTable footer
        $('.dataTables_wrapper')
          .find('.row:last-of-type')
          .addClass('border-t-1 brc-default-l3 mt-n1px bgc-default-l4')


        // if the table has scrollbars, add ace styling to it
        $('.dataTables_scrollBody').aceScroll({
          color: "grey"
        })


        //enable tooltips
        setTimeout(function() {
          $('.dt-buttons button')
            .each(function() {
              var div = $(this).find('span').first()
              if (div.length == 1) $(this).tooltip({
                container: 'body',
                title: div.parent().text()
              })
              else $(this).tooltip({
                container: 'body',
                title: $(this).text()
              })
            })
          $('[data-rel=tooltip').tooltip({
            container: 'body'
          })
        }, 0)

      })
    </script>
  </body>

</html>