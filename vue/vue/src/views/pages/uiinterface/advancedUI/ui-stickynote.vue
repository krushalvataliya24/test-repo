<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper cardhead">
    <div class="content">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="page-title">Sticky Note</h3>
          </div>
        </div>
      </div>
      <!-- /Page Header -->

      <div class="row">
        <!-- Sticky -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">
                Sticky Note
                <a
                  class="btn btn-primary float-sm-end m-l-10"
                  id="add_new"
                  href="javascript:void(0);"
                  >Add New Note</a
                >
              </h5>
            </div>
            <div class="card-body">
              <div class="sticky-note" id="board"></div>
            </div>
          </div>
        </div>
        <!-- /Sticky -->
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
};
</script>

<style>
.sticky-body {
  position: relative;
}
.drag {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.sticky {
  background: #ffffff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  color: #00243f;
  cursor: grab;
  display: inline-block;
  padding: 1rem;
  position: absolute;
  width: 15.5rem;
}
.sticky h3,
.sticky p {
  color: #00243f;
  pointer-events: none;
}
.sticky h3 {
  border-bottom: dashed 2px #0085e8;
  margin: 0 0 1rem;
  min-height: 1.8rem;
  padding: 0 1.5rem 0.25rem 0;
}
.sticky p {
  margin: 0;
  min-height: 9rem;
}
.sticky .deletesticky {
  color: #0085e8;
  cursor: pointer;
  font-size: 2rem;
  position: absolute;
  right: 0.8rem;
  top: 0rem;
}

.sticky-form {
  bottom: 1rem;
}
.sticky-form label,
.sticky-form input,
.sticky-form textarea {
  color: #000;
  display: block;
}
.sticky-form input,
.sticky-form textarea {
  background-color: #f0f9ff44;
  background-clip: padding-box;
  border: 2px dashed #0065b3;
  border-radius: 0.25rem;
  color: #00243f;
  font-family: "Courier New", Courier, monospace;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  margin-bottom: 0.75rem;
  padding: 0.375rem 0.75rem;
  /* width: calc(100vh - 1.5rem); */
  width: 300px;
}
.sticky-form input:focus,
.sticky-form textarea:focus {
  border: 2px dashed #0065b3;
  background-color: #ffffff;
  outline: none;
}
</style>
