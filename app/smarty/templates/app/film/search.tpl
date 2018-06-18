{extends file="../../_includes/_layouts/app.tpl"}

{block name=title}Search{/block}

{block name=content}

    <div class="container">
        {if $filmsByName}
            <div class="row m-t-10">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center bg-success">
                            Search by film name
                        </div>
                    </div>
                </div>
            </div>
            {foreach from=$filmsByName key=k item=film}
                <div class="row m-t-10">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                {$film.name} | {$film.format} | {$film.release_date}
                                <a href="/app/index.php?controller=film&action=show&id={$film.id}"><span class="btn btn-sm btn-primary pull-right">Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        {elseif $filmsByActorName}
            <div class="row m-t-10">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center bg-success">
                            Search by actor in films
                        </div>
                    </div>
                </div>
            </div>
            {foreach from=$filmsByActorName key=k item=film}
                <div class="row m-t-10">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                {$film.name} | {$film.format} | {$film.release_date}
                                <a href="/app/index.php?controller=film&action=show&id={$film.id}"><span class="btn btn-sm btn-primary pull-right">Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <div class="row m-t-10">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center bg-warning">
                            Sorry we don't have this film. But u can
                            <a href="/app/index.php?controller=film&action=create"><span class="btn btn-sm btn-success">Add film</span></a>
                        </div>
                    </div>
                </div>
            </div>
        {/if}



    </div>

{/block}