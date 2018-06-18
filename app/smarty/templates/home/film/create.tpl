{extends file="../../_includes/_layouts/app.tpl"}

{block name=stylesheets}
    <link href="./smarty/static/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"/>
{/block}

{block name=content}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form action="/app/index.php?controller=film&action=postCreate" method="POST">
                        <input name="name" type="text" class="form-control m-t-10" placeholder="Film name" required>

                        <div class="input-group date form_date m-t-10" data-date="" data-date-format="yyyy-mm-dd " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <input class="form-control" name="release_date" size="16" type="text" value="" readonly placeholder="Select release date">
                            <div class="input-group-prepend">
                                <span class="input-group-addon input-group-text"><span class="glyphicon glyphicon-calendar fa fa-calendar"></span></span>
                            </div>
                        </div>
                        <input type="hidden" id="dtp_input2" value="" />

                        <select name="format" class="form-control m-t-10" required>
                            <option value="">Select format</option>
                            <option value="VHS">VHS</option>
                            <option value="DVD">DVD</option>
                            <option value="Blu-Ray">Blu-Ray</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success m-t-10">Add film</button>



                    </form>
                </div>
            </div>
        </div>
    </div>

{/block}

{block name=scripts}

    <script src="./smarty/static/js/bootstrap-datetimepicker.js"></script>
    <script>
        $('.form_date').datetimepicker({
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
{/block}