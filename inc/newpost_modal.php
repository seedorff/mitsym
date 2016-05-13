<div class="modal fade" id="newpost">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Nyt opslag</h4>
      </div>
      <div class="modal-body">
           
        <form accept-charset="UTF-8" action="" method="POST">
            <fieldset class="form-group">              
                
                <select class="selecttags" multiple="multiple">
                  <option value="begivenhed">Begivenhed</option>
                  <option value="saelges">Sælges</option>
                </select>              

              </fieldset>
            <fieldset class="form-group">
              <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Din opslagstekst"></textarea>
            </fieldset>
            <button class="btn btn-info" type="submit">Gem opslag</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
        </form>
        
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->