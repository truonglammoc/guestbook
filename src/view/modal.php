<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Post Guestbook</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" rows="5" id="message"></textarea>
        </div>
        <input type="hidden" id="mode" name="mode">
        <input type="hidden" id="hId" name="hId">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="save">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close">Close</button>
      </div>
    </div>
  </div>
</div>