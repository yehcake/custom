    <meta charset="utf-8" />
    <meta name="robots" content="noarchive, noodp, noimageindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/themes/yehcake.min.css" />
    <link rel="stylesheet" href="/css/themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
    <link rel="stylesheet" href="/css/yehcake.css" />
    <script src="../js/pricing.js"></script>
    <script>
        function updateEstimate(size, difficulty, toppers) {
            if (isNaN(size) || isNaN(difficulty) || isNaN(toppers) || (size === "") || (difficulty === "") || (toppers === "")) {
                $("#range").text("UNKNOWN");
            }
            else {
                $("#range").text(getEstimate(size, difficulty, toppers));
            }
        }
        $( ":mobile-pagecontainer" ).on( "pagecontainershow", "#pricingPage", function( event, ui ) {
        //$(document).on("pagecreate", "#pricingPage", function(event) {
            $(".slider").on("slidestop", function(event, ui) {
                var size = $("#size").val();
                var difficulty = $("#difficulty").val();
                var toppers = $("#toppers").val();
                updateEstimate(size, difficulty, toppers);
            });
        });
    </script>    