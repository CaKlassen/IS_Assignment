<div class="row">
  <div class="errors">{errorMessage}</div>
    <form action="/admin/confirmPost" method="post">
        
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div>

        {fId}
        {fAuthor}
        {fAvatar}
        {fTitle}
        {fContent}    
        {fSubmit}
    </form>
</div>