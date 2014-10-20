@extends('layouts.base')

@section('content')
<div class="container">
        <div class="col-md-10">
            <table class="table table-striped table-hover" id="adList">
                <thead>
                    <tr>
                        <th><span>Type</span>
                        </th>
                        <th><span>Title</span>
                        </th>
                        <th><span><a rel="tooltip" rel="tooltip" title="Pay per 1,000 clicks (USD)" href="javascript:void(0);">Pay</a></span>
                        </th>
                        <th><span><a rel="tooltip" rel="tooltip" title="How much you have to have made before the money is transferred (USD)" href="javascript:void(0);">Threshold</a></span>
                        </th>
                        <th><span>URL</span>
                        </th>
                        <th><span>More info</span>
                        </th>
                    </tr>
                </thead>
                <tbody><!--
                    <tr id="scoreboard">
                        <td>Scoreboard</td>
                        <td>Random ad</td>
                        <td>$21</td>
                        <td>$25</td>
                        <td class="input-group-sm">
                            <input class="form-control" type="text" onclick="this.select();" value="http://google.com" readonly>
                        </td>
                        <td><a href="/info/generated_id_here">More info</a>
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
                        <td><a href="/info/id_generated_here">More info</a>
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
                        <td><a href="/info/id_generated_here">More info</a>
                        </td>
                    </tr>
                    -->
                    @if (strlen($adhtml)>1)
						{{ $adhtml }}
						{{ $paginate = true }}
					@else
						<div style="text-align:center"><h3>Nothing to see here. Why don't you <a href='/post-ad'>post an ad</a>?</h3></div>
						{{ $paginate = false }}
					@endif
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
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
        <!--
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
        -->
        
        @if ($paginate == true)
			{{ $ads->links() }}
		@endif
    </div>
@stop
@section('foot')

