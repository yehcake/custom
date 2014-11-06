<!doctype html>
<html>

<head>
    <title>Illustrative Cake Pricing | Yeh! Cake</title>
    <?php include "../stubs/head.php";?>
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
        $(document).on("pagecreate", "#pricingPage", function(event) {
            $(".slider").on("slidestop", function(event, ui) {
                var size = $("#size").val();
                var difficulty = $("#difficulty").val();
                var toppers = $("#toppers").val();
                updateEstimate(size, difficulty, toppers);
            });
        });
    </script>
</head>

<body>
    <div data-role="page" id="pricingPage">

        <div role="main" class="ui-content no-top-padding">

            <?php include "../stubs/header.php";?>

            <div class="content-container">
                <div class="page-title">Illustrative Cake Pricing</div>
                <form>
                    <div>
                        <div class="ui-field-contain">
                            <label for="size">Size (Servings):</label>
                            <input type="range" name="size" id="size" data-highlight="true" min="10" max="100" value="20" class="slider">
                        </div>
                        <div class="ui-field-contain">
                            <label for="difficulty">Difficulty:</label>
                            <input type="range" name="difficulty" id="difficulty" data-highlight="true" min="1" max="10" value="5" class="slider">
                        </div>
                        <div class="ui-field-contain">
                            <label for="toppers">Toppers:</label>
                            <input type="range" name="toppers" id="toppers" data-highlight="true" min="0" max="8" value="0" class="slider">
                        </div>
                    </div>
                </form>
                <div class="pricing-estimate">
                    While not an <a href="../availability">official quotation</a>, such a cake is estimated to cost
                    <div class="price-range">
                        <span id="range">NT$3,000 ~ NT$5,000</span>
                        <a href="#popupInfo" data-rel="popup" data-transition="pop" class="my-tooltip-btn ui-btn ui-alt-icon ui-nodisc-icon ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Learn More">Learn More</a>
                        <div data-role="popup" id="popupInfo" class="ui-content" data-theme="a" style="max-width:350px;">
                            <p>
                                Our pricing is based on time and material. That is, how long it takes to make a particular cake and how much material is used in the process. Along those lines, the number of requested cake toppers (3-D figures) tends to affect pricing.
                            </p>
                        </div>
                    </div>
                    <div class="highlight-grey">
                        ※ Shaped cakes start at NT$6,000.
                    </div>
                </div>
                <div class="ui-grid-a ui-responsive">
                    <div class="ui-block-a">
                        <a data-pin-do="embedBoard" href="http://www.pinterest.com/yehcake/difficulty-1-4/" data-pin-scale-width="60" data-pin-scale-height="120" data-pin-board-width="280">Example of Less Difficult Cakes</a>
                    </div>
                    <div class="ui-block-b">
                        <a data-pin-do="embedBoard" href="http://www.pinterest.com/yehcake/difficulty-5%2B/" data-pin-scale-width="60" data-pin-scale-height="120" data-pin-board-width="280">Example of More Difficult Cakes</a>
                    </div>
                </div>
                <!-- /grid-a -->
            </div>

            <?php include "../stubs/footer.php";?>

        </div>
        <!-- /content -->
    </div>
    <!-- /page -->

    <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
</body>

</html>
