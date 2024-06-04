    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/simplebar/simplebar.min.js"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

    <script src="plugins/apexcharts/apexcharts.js"></script>

    <script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>

    <script src="plugins/daterangepicker/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: "Clear",
                },
            });
            jQuery('input[name="dateRange"]').on(
                "apply.daterangepicker",
                function(ev, picker) {
                    jQuery(this).val(picker.startDate.format("MM/DD/YYYY"));
                }
            );
            jQuery('input[name="dateRange"]').on(
                "cancel.daterangepicker",
                function(ev, picker) {
                    jQuery(this).val("");
                }
            );
        });

        // Function to update live date and time
        function updateLiveDateTime() {
            var now = new Date();
            var dateTimeString = now.toLocaleString("en-US", {
                weekday: "long",
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric",
                hour12: true,
            });
            document.getElementById("liveDateTime").textContent = dateTimeString;
        }

        // Update live date and time every second
        setInterval(updateLiveDateTime, 1000);

        // Initial call to update live date and time
        updateLiveDateTime();
    </script>

    <script src="js/mono.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js"></script>

    <script src="plugins/fullcalendar/core-4.3.1/main.min.js"></script>
    <script src="plugins/fullcalendar/daygrid-4.3.0/main.min.js"></script>
    <script src="js/calendar.js"></script>


    <!--  -->
    </body>

    </html>