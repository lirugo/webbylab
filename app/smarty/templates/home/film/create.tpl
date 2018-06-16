{extends file="../../_includes/_layouts/app.tpl"}

{block name=content}

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form action="/app/index.php?controller=home&action=postCreate&" method="POST">
                        <input name="name" type="text" class="form-control m-t-10" placeholder="Film name" required>
                        <input name="release_date" type="text" class="form-control m-t-10" placeholder="Release date" required>
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