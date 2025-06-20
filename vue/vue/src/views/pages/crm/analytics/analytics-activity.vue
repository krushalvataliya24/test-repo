<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Activities</h4>
        <div class="d-flex align-items-center flex-wrap row-gap-2">
          <div class="dropdown me-2">
            <a
              class="dropdown-toggle"
              data-bs-toggle="dropdown"
              href="javascript:void(0);"
            >
              Last 30 Days
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:void(0);" class="dropdown-item"> Last 30 Days </a>
              <a href="javascript:void(0);" class="dropdown-item"> Last 15 Days </a>
              <a href="javascript:void(0);" class="dropdown-item"> Last 7 Days </a>
            </div>
          </div>
          <a
            href="#"
            class="btn btn-primary"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas_add"
            ><i class="ti ti-square-rounded-plus me-2"></i>Add New Activity</a
          >
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="activities-list">
        <ul>
          <li>
            <div class="row align-items-center">
              <div class="col-md-5">
                <div class="activity-name">
                  <h5>We scheduled a meeting for next week</h5>
                  <p>Due Date : 10 Feb 2024, 09:00 am</p>
                  <span class="badge activity-badge bg-purple"
                    ><i class="ti ti-user-share"></i>Meeting</span
                  >
                </div>
              </div>
              <div class="col-md-3">
                <div class="user-activity">
                  <span>
                    <img src="@/assets/img/profiles/avatar-19.jpg" alt="" />
                  </span>
                  <h6>Darlee Robertson</h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-0">
                  <vue-select
                    :options="Select"
                    id="selectprogress"
                    placeholder="Inprogress"
                  />
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row align-items-center">
              <div class="col-md-5">
                <div class="activity-name">
                  <h5>Regarding latest updates in project</h5>
                  <p>Due date : 29 Sep 2023, 08:20 am</p>
                  <span class="badge activity-badge bg-warning"
                    ><i class="ti ti-mail"></i>Email</span
                  >
                </div>
              </div>
              <div class="col-md-3">
                <div class="user-activity">
                  <span>
                    <img src="@/assets/img/profiles/avatar-22.jpg" alt="" />
                  </span>
                  <h6>Dawn Mercha</h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-0">
                  <vue-select :options="Select" id="cancel" placeholder="Inprogress" />
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row align-items-center">
              <div class="col-md-5">
                <div class="activity-name">
                  <h5>Call John and discuss about project</h5>
                  <p>Due date : 05 Oct 2023, 10:35 am</p>
                  <span class="badge activity-badge bg-blue"
                    ><i class="ti ti-subtask"></i>Task</span
                  >
                </div>
              </div>
              <div class="col-md-3">
                <div class="user-activity">
                  <span>
                    <img src="@/assets/img/profiles/avatar-16.jpg" alt="" />
                  </span>
                  <h6>Carol Thomas</h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-0">
                  <vue-select :options="Select" id="cancelled" placeholder="Inprogress" />
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row align-items-center">
              <div class="col-md-5">
                <div class="activity-name">
                  <h5>Discussed budget proposal with Edwin</h5>
                  <p>Due date : 16 Oct 2023, 04:40 pm</p>
                  <span class="badge activity-badge bg-green"
                    ><i class="ti ti-phone"></i>Calls</span
                  >
                </div>
              </div>
              <div class="col-md-3">
                <div class="user-activity">
                  <span>
                    <img src="@/assets/img/profiles/avatar-20.jpg" alt="" />
                  </span>
                  <h6>Sharon Roy</h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-0">
                  <vue-select :options="Select" id="complete" placeholder="Inprogress" />
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      Select: ["Last 30 days", "Last 3 months", "Last 6 months"],
    };
  },
  mounted() {
    if (document.getElementsByClassName("add-popups").length > 0) {
      var addPopups = document.getElementsByClassName("add-popups");
      for (var i = 0; i < addPopups.length; i++) {
        addPopups[i].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup2")[0];
          if (togglePopup) {
            togglePopup.classList.add("sidebar-popup");
          }
        });
      }

      var sidebarCloses = document.getElementsByClassName("sidebar-close2");
      for (var j = 0; j < sidebarCloses.length; j++) {
        sidebarCloses[j].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup2")[0];
          if (togglePopup) {
            togglePopup.classList.remove("sidebar-popup");
          }
        });
      }
    }
  },
};
</script>
