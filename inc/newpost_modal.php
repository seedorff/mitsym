<div class="modal fade" id="newpost">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form accept-charset="UTF-8" action="" method="POST">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Nyt opslag</h4>
        </div>
        
        <div class="modal-body">  
          
          <fieldset class="form-group">              
            <select class="selecttags" multiple="multiple">
              <option value="begivenhed">Begivenhed</option>
              <option value="saelges">Sælges</option>
              <option value="koebes">Købes</option>
            </select>              
          </fieldset>
          
          <fieldset class="form-group">
            <input type="text" class="form-control" id="post-title" placeholder="Overskrift">
            <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Din opslagstekst - maks 500 tegn" maxlength="500"></textarea>
          </fieldset>

          <fieldset class="form-group">
            <input type="text" class="form-control" id="post-expiration" placeholder="Udløbsdato">
          </fieldset>

        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Gem opslag</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->