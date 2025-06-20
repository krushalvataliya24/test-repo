<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper cardhead">
    <div class="content">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="page-title">Tooltip</h3>
          </div>
        </div>
      </div>
      <!-- /Page Header -->

      <div class="row">
        <!-- Colored Tooltips -->
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header justify-content-between">
              <div class="card-title">Colored Tooltips</div>
            </div>
            <div class="card-body">
              <div class="btn-list">
                <a-tooltip placement="top" title="Primary Tooltip">
                  <button type="button" class="btn btn-primary">
                    Primary Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Secondary Tooltip">
                  <button
                    type="button"
                    class="btn btn-secondary"
                  >
                    Secondary Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Warning Tooltip">
                  <button
                    type="button"
                    class="btn btn-warning"
                  >
                    Warning Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Info Tooltip">
                  <button
                    type="button"
                    class="btn btn-info"
                  >
                    Info Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Success Tooltip">
                  <button
                    type="button"
                    class="btn btn-success"
                  >
                    Success Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Danger Tooltip">
                  <button
                    type="button"
                    class="btn btn-danger"
                  >
                    Danger Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Light Tooltip">
                  <button
                    type="button"
                    class="btn btn-light"
                  >
                    Light Tooltip
                  </button>
                </a-tooltip>
                <a-tooltip placement="top" title="Dark Tooltip">
                  <button
                    type="button"
                    class="btn btn-dark text-white"
                  >
                    Dark Tooltip
                  </button>
                </a-tooltip>
              </div>
            </div>
          </div>
        </div>
        <!-- /Colored Tooltips -->
      </div>

      <div class="row">
        <!-- Html Element -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Html Element</h5>
            </div>
            <div class="card-body">
              <div class="popover-list">
                <a-tooltip placement="top" title="Popover title">
                  <button
                    class="example-popover btn btn-primary"
                    type="button"
                  >
                    Hover Me
                  </button>
                </a-tooltip>
              </div>
            </div>
          </div>
        </div>
        <!-- /Html Element -->

        <!-- Direction Tooltip -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Direction Tooltip</h5>
            </div>
            <div class="card-body">
              <div class="tooltip-list">
                <a-tooltip placement="top" title="Tooltip on top">
                  <button
                    type="button"
                    class="btn btn-primary"
                  >
                    Tooltip on top
                  </button>
                </a-tooltip>
                <a-tooltip placement="right" title="Tooltip on right">
                  <button
                    type="button"
                    class="btn btn-primary ms-1"
                  >
                    Tooltip on right
                  </button>
                </a-tooltip>
                <a-tooltip placement="bottom" title="Tooltip on bottom">
                  <button
                    type="button"
                    class="btn btn-primary ms-1"
                  >
                    Tooltip on bottom
                  </button>
                </a-tooltip>
                <a-tooltip placement="left" title="Tooltip on left">
                  <button
                    type="button"
                    class="btn btn-primary ms-1"
                  >
                    Tooltip on left
                  </button>
                </a-tooltip>
              </div>
            </div>
          </div>
        </div>
        <!-- /Direction Tooltip -->

        <!-- Html Element -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Html Element</h5>
            </div>
            <div class="card-body">
              <div class="popover-list">
                <a-tooltip placement="top">
                  <template #title>
                    <span v-html="tooltipContent"></span>
                  </template>
                  <button
                    type="button"
                    class="btn btn-primary"
                  >
                    Tooltip with HTML
                  </button>
                </a-tooltip>
                <a-tooltip placement="bottom">
                  <template #title>
                    <span v-html="tooltipContent"></span>
                  </template>
                  <button
                    type="button"
                    class="btn btn-primary ms-1"
                  >
                    Click Me
                  </button>
                </a-tooltip>
              </div>
            </div>
          </div>
        </div>
        <!-- /Html Element -->

        <!-- Tooltip -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Disabled Elements</h5>
            </div>
            <div class="card-body">
              <a-tooltip placement="top" title="Disabled tooltip">
                <span
                class="d-inline-block"
                tabindex="0"
              >
                <button class="btn btn-primary" type="button" disabled="">
                  Disabled button
                </button>
              </span>
              </a-tooltip>
            </div>
          </div>
        </div>
        <!-- /Tooltip -->

        <!-- Tooltip Links -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tooltips on Links</h5>
            </div>
            <div class="card-body">
              <p class="text-muted mb-0">
                Hover on the link to view the
                <a-tooltip placement="top" title="Link Tooltip">
                  <a
                    href="javascript:void(0);"
                    class="text-primary"
                    >Tooltip</a
                  >
                </a-tooltip>
              </p>
            </div>
          </div>
        </div>
        <!-- /Tooltip Links -->

        <!-- Tooltip Images -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tooltip For Images</h5>
            </div>
            <div class="card-body">
              <a-tooltip placement="top" title="Marina Kai">
                <a
                  href="javascript:void(0);"
                  class="avatar avatar-md me-2 online avatar-rounded"
                >
                  <img src="@/assets/img/profiles/avatar-01.jpg" alt="img" />
                </a>
              </a-tooltip>
              <a-tooltip placement="top" title="Alex Carey">
                <a
                  href="javascript:void(0);"
                  class="avatar avatar-lg me-2 online avatar-rounded"
                >
                  <img src="@/assets/img/profiles/avatar-02.jpg" alt="img" />
                </a>
              </a-tooltip>
              <a-tooltip placement="top" title="Maria John">
                <a
                  href="javascript:void(0);"
                  class="avatar avatar-xl me-2 offline avatar-rounded"
                >
                  <img src="@/assets/img/profiles/avatar-03.jpg" alt="img" />
                </a>
              </a-tooltip>
            </div>
          </div>
        </div>
        <!-- /Tooltip Images -->
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";
import { Tooltip } from 'ant-design-vue';

const tooltipContent = ref("<em>Tooltip</em> <u>with</u> <b>HTML</b>");

export default {
  components: {
    'a-tooltip': Tooltip
  },
  data(){
    return{
      tooltipContent,
    }
  }
}
</script>
