<?php include 'templates/header.php';?>

<body>
    <?php include 'templates/navbar.php';?>
    <div class="container">
        <div class="col-md-8">
            <table class="table table-striped table-hover" id="adList">
                <thead>
                    <tr>
                        <th><span>Type</span>
                        </th>
                        <th><span>Title</span>
                        </th>
                        <th><span><a rel="tooltip" rel="tooltip" title="Pay per 1,000 clicks" href="javascript:void(0);">Pay</a></span>
                        </th>
                        <th><span><a rel="tooltip" rel="tooltip" title="How much you have to have made before the money is transferred" href="javascript:void(0);">Threshold</a></span>
                        </th>
                        <th><span>URL</span>
                        </th>
                        <th><span>More info</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="scoreboard">
                        <td>Scoreboard</td>
                        <td>Random ad</td>
                        <td>$21</td>
                        <td>$25</td>
                        <td class="input-group-sm">
                            <input class="form-control" type="text" onclick="this.select();" value="http://google.com" readonly>
                        </td>
                        <td><a href="http://google.com">More info</a>
                        </td>
                    </tr>
                    <tr id="bossbar">
                        <td>Bossbar</td>
                        <td>15 minutes</td>
                        <td>$41</td>
                        <td>$10</td>
                        <td class="input-group-sm">
                            <input class="form-control" type="text" onclick="this.select();" value="http://google.com" readonly>
                        </td>
                        <td><a href="http://google.com">More info</a>
                        </td>
                    </tr>
                    <tr id="chat">
                        <td>Chat</td>
                        <td>2014 car</td>
                        <td>$51</td>
                        <td>$50</td>
                        <td class="input-group-sm">
                            <input class="form-control" type="text" onclick="this.select();" value="http://google.com" readonly>
                        </td>
                        <td><a href="http://google.com">More info</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Filter</b>
                </div>
                <div class="panel-body">
                    <b>Type</b>
                    <br>
                    <div>
                        <input type="checkbox" id="allTypes" onclick="tableUpdate(); uncheckTypes();"><span>All</span>
                    </div>
                    <div>
                        <input type="checkbox" id="scoreboard" onclick="tableUpdate();"><span>Scoreboard</span>
                    </div>
                    <div>
                        <input type="checkbox" id="bossbar" onclick="tableUpdate();"><span>Bossbar</span>
                    </div>
                    <div>
                        <input type="checkbox" id="chat" onclick="tableUpdate();"><span>Chat</span>
                    </div>
                    <div>
                        <input type="checkbox" id="hologram" onclick="tableUpdate();"><span>Hologram</span>
                    </div>
                    <!--
					<hr>
                    <b>Pay per 1,000 clicks</b>
                    <br>
                    <b>$1</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="ppt" type="text" class="span2" data-slider-min="0" data-slider-max="101" data-slider-step="1" data-slider-value="[0,101]" />&nbsp;&nbsp;&nbsp;&nbsp;<b>$100+</b>
                    <hr>
                    <b>Payment threshold</b>
                    <br>
                    <b>$1</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="pt" type="text" class="span2" data-slider-min="0" data-slider-max="1001" data-slider-step="1" data-slider-value="[0,1001]" />&nbsp;&nbsp;&nbsp;&nbsp;<b>$1000+</b>
					-->
                </div>
            </div>
        </div>
        <div class="dataTables_paginate paging_simple_numbers" style="align:left;">
            <ul class="pagination">
                <li class="paginate_button previous disabled"><a href="#">Previous</a>
                </li>
                <li class="paginate_button active"><a href="#">1</a>
                </li>
                <li class="paginate_button"><a href="#">2</a>
                </li>
                <li class="paginate_button"><a href="#">3</a>
                </li>
                <li class="paginate_button"><a href="#">4</a>
                </li>
                <li class="paginate_button"><a href="#">5</a>
                </li>
                <li class="paginate_button"><a href="#">6</a>
                </li>
                <li class="paginate_button"><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
    <?php include 'templates/footer.php';?>
    <script type="text/javascript">
        var types = ["scoreboard", "bossbar", "chat", "hologram"];


        function tableUpdate() {
            $("tr").each(function(index) {
                for (i = 0; i < types.length; i++) {
                    if ($(this).attr('id') == types[i]) {
                        if ((!$('input#' + types[i]).is(':checked')) && (!$('input#allTypes').is(':checked'))) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    }
                }

            });
        }

        function uncheckTypes() {
            for (i = 0; i < types.length; i++) {
                $('input#' + types[i]).prop('checked', false);
            }
        }

        /*		$("#ppt").slider({})
        $('#ppt').on('slide', function(ev) {
			if($('#ppt').val().contains("101")){
			   alert('hu');
			}else{
				alert($('#ppt').val());
			}
            console.log($('#ppt').val());
        });
        $("#pt").slider({});*/



        $(function() {
            $('#adList').tablesorter();
        });
    </script>
</body>