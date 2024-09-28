</div>
<!-- App container ends -->

</div>
<!-- Main container end -->

</div>

<!-- Page wrapper end -->

<!-- *************
			************ JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.1.7/b-3.1.2/b-html5-3.1.2/b-print-3.1.2/datatables.min.js"></script>
<!-- *************
			************ Vendor Js Files *************
		************* -->

<!-- Overlay Scroll JS -->
<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

<!-- Apex Charts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- <script src="assets/vendor/apex/custom/dash1/sparkline.js"></script> -->
<!-- <script src="assets/vendor/apex/custom/dash1/customers.js"></script>
<script src="assets/vendor/apex/custom/dash1/channel.js"></script>
<script src="assets/vendor/apex/custom/dash1/deals.js"></script>
<script src="assets/vendor/apex/custom/dash1/demography.js"></script>
<script src="assets/vendor/apex/custom/dash1/device.js"></script>
<script src="assets/vendor/apex/custom/dash1/weekly-sales.js"></script> -->

<!-- Vector Maps -->
<script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
<script src="assets/vendor/jvectormap/world-mill-en.js"></script>
<script src="assets/vendor/jvectormap/gdp-data.js"></script>
<script src="assets/vendor/jvectormap/continents-mill.js"></script>
<script src="assets/vendor/jvectormap/custom/world-map-markers2.js"></script>

<!-- Custom JS files -->
<script src="assets/js/custom.js"></script>
<script>
  $(document).ready(function() {
    $.ajax({
      url: '/get-chart-data.php',
      dataType: 'json',
      type: 'get',
      success: function(data) {
        /**
         * Code the dynamically render all charts in loop - removed
         */
        // $.each(data.items, (index, chartOption) => {
        //   //console.log(chartOption);
        //   var div = $('<div></div>').attr('id', 'chart' + index);
        //   $('#charts').append(div);
        //   var newChart = new ApexCharts(document.querySelector("#chart" + index), chartOption)
        //   newChart.render();
        // });

        new ApexCharts(document.querySelector("#sectors"), data['items']['sectors']).render();

        new ApexCharts(document.querySelector("#topics"), data['items']['topics']).render();

        new ApexCharts(document.querySelector("#overall"), data['items']['overall']).render();

        new ApexCharts(document.querySelector("#countries"), data['items']['countries']).render();

        new ApexCharts(document.querySelector("#sources"), data['items']['sources']).render();

        new ApexCharts(document.querySelector("#regions"), data['items']['regions']).render();

        new ApexCharts(document.querySelector("#cities"), data['items']['cities']).render();

      }
    });

    $('#table1').DataTable({
      lengthMenu: [4, 10, 25, 50, 75, 100]
    });

  });
</script>


</body>

</html>