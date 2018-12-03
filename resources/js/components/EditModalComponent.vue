<template>
    <!-- modal Edit -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog modal-lg" role="document" style="width:800px;">
    <div class="modal-content">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Units</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body pd-25 pd-x-35">
        <div class="form-layout form-layout-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Units: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="units">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="desc">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Short form: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="short_form">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Physical: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country" name="physical">
                    <option label="Choose country"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Factor: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="factor">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Basic Unity: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Basic Unity" name="basic_unity">
                    <option label="Choose Basic Unity"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Block: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="block">
                </div>
              </div>
            </div><!-- row -->

            
          </div><!-- form-layout -->
      </div><!-- modal-body -->
      <div class="modal-footer form-layout-footer">
          <button class="btn btn-info">Save Changes</button>
          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
