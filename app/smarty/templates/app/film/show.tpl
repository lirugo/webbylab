{extends file="../../_includes/_layouts/app.tpl"}

{block name=content}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640858fe8f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640858fe8f%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.203125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <span class="badge badge-info">{$film[0].release_date} | {$film[0].format}</span>
                    <div class="card-head">
                        <h5 class="card-title text-center m-t-10">{$film[0].name}</h5>
                        {*<p class="card-text">Some desc.</p>*}
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">Action</h5>
                    </div>
                    <div class="card-body">
                        <form action="/app/index.php?controller=film&action=remove" method="POST">
                            <input name="id" type="hidden" value="{$film[0].id}"/>
                            <button type="submit" class="btn btn-danger btn-block">Remove</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">List of actors</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            {if $actors}
                            {for $foo=0 to count($actors)}
                                <li class="list-group-item">{$actors[$foo].name}</li>
                            {/for}
                            {else}
                                No actors added, you can be the first.
                            {/if}

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-head bg-info">
                        <h5 class="card-title text-center m-t-10">Add actors</h5>
                    </div>
                    <div class="card-body">
                        <form action="/app/index.php?controller=film&action=addActor" method="POST">
                            <input name="id" type="hidden" value="{$film[0].id}"/>
                            <input name="name" class="form-control" placeholder="Input actor name" required/>
                            <button type="submit" class="btn btn-success m-t-10">Add actor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{/block}