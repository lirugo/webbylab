{extends file="../../_includes/_layouts/app.tpl"}

{block name=title}Import{/block}

{block name=content}

    <div class="container">
        <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card">
                   <div class="card-body">
                       <form class="form-inline">
                           <div class="form-group">
                               <button type="submit" class="btn btn-success pull-right m-r-10">Upload</button>
                           </div>
                           <div class="form-group">
                               <input type="file" name="file" accept=".txt" required>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>

{/block}