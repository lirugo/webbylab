{extends file="../../_includes/_layouts/app.tpl"}

{block name=title}Show{/block}

{block name=content}

    <div class="container">
        <div class="row">
            {if $films}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="/app/index.php?controller=film&action=index&sort=release_date&dir=DESC" class="btn btn-primary">New first</a>
                                <a href="/app/index.php?controller=film&action=index&sort=release_date&dir=ASC" class="btn btn-primary">Old first</a>
                                <a href="/app/index.php?controller=film&action=index&sort=name&dir=ASC" class="btn btn-primary">From A to Z</a>
                                <a href="/app/index.php?controller=film&action=index&sort=name&dir=DESC" class="btn btn-primary">From Z to A</a>
                            </div>
                        </div>
                    </div>
                </div>
                {foreach from=$films key=k item=film}
                    <div class="col-md-3 m-t-25">
                        <div class="card">
                            <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640858fe8f%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640858fe8f%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.203125%22%20y%3D%2296.3%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                            <span class="badge badge-info">{$film.release_date} | {$film.format}</span>
                            <div class="card-body">
                                <h5 class="card-title text-center">{$film.name}</h5>
                                {*<p class="card-text">Some desc.</p>*}
                            </div>
                            <ul class="list-group list-group-flush">
                                {if $film.actors}
                                    {for $foo=0 to count($film.actors)-1}
                                        <li class="list-group-item">{$film.actors[$foo].name}</li>
                                    {/for}
                                {else}
                                    <li class="list-group-item">No actors added yet...</li>
                                {/if}
                            </ul>
                            <a href="/app/index.php?controller=film&action=show&id={$film.id}" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                {/foreach}
            {else}
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center bg-warning">
                            Sorry we don't have any films yet... But u can
                            <a href="/app/index.php?controller=film&action=create"><span class="btn btn-sm btn-success">Add film</span></a>
                            or
                            <a href="/app/index.php?controller=film&action=import"><span class="btn btn-sm btn-success">Import</span></a>

                        </div>
                    </div>
                </div>
            {/if}

        </div>
    </div>

{/block}