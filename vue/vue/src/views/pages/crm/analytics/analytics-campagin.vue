<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Campaign</h4>
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
            data-bs-target="#offcanvas_pipeline"
            ><i class="ti ti-square-rounded-plus me-2"></i> Add Pipeline</a
          >
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="campaign-card">
        <ul>
          <li class="campaign-wrap">
            <div class="campaign-info">
              <div class="campaign-name">
                <h5>Distribution</h5>
                <p>Public Relations</p>
              </div>
              <ul class="list-progress">
                <li>
                  <h6>30.5%</h6>
                  <p>Opened</p>
                </li>
                <li>
                  <h6>20.5%</h6>
                  <p>Closed</p>
                </li>
                <li>
                  <h6>30.5%</h6>
                  <p>Unsubscribe</p>
                </li>
                <li>
                  <h6>70.5%</h6>
                  <p>Delivered</p>
                </li>
                <li>
                  <h6>35.0%</h6>
                  <p>Conversation</p>
                </li>
              </ul>
            </div>
            <div class="campaign-action">
              <div class="campaign-date">
                <span class="badge badge-pill badge-status bg-danger">Bounced</span>
                <p>Due Date : 25 Sep 2023</p>
              </div>
              <ul class="project-mem">
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-14.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-15.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-16.jpg" alt="img"
                  /></a>
                </li>
                <li class="more-set"><a href="#">+03</a></li>
              </ul>
            </div>
          </li>
          <li class="campaign-wrap">
            <div class="campaign-info">
              <div class="campaign-name">
                <h5>Pricing</h5>
                <p>Social Marketing</p>
              </div>
              <ul class="list-progress">
                <li>
                  <h6>42.5%</h6>
                  <p>Opened</p>
                </li>
                <li>
                  <h6>38.2%</h6>
                  <p>Closed</p>
                </li>
                <li>
                  <h6>48.8%</h6>
                  <p>Unsubscribe</p>
                </li>
                <li>
                  <h6>62.7%</h6>
                  <p>Delivered</p>
                </li>
                <li>
                  <h6>22.5%</h6>
                  <p>Conversation</p>
                </li>
              </ul>
            </div>
            <div class="campaign-action">
              <div class="campaign-date">
                <span class="badge badge-pill badge-status bg-green">Running</span>
                <p>Due Date : 14 Oct 2023</p>
              </div>
              <ul class="project-mem">
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-14.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-15.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-16.jpg" alt="img"
                  /></a>
                </li>
                <li class="more-set"><a href="#">+04</a></li>
              </ul>
            </div>
          </li>
          <li class="campaign-wrap">
            <div class="campaign-info">
              <div class="campaign-name">
                <h5>Merchandising</h5>
                <p>Content Marketing</p>
              </div>
              <ul class="list-progress">
                <li>
                  <h6>52.5%</h6>
                  <p>Opened</p>
                </li>
                <li>
                  <h6>29.3%</h6>
                  <p>Closed</p>
                </li>
                <li>
                  <h6>62.8%</h6>
                  <p>Unsubscribe</p>
                </li>
                <li>
                  <h6>71.3%</h6>
                  <p>Delivered</p>
                </li>
                <li>
                  <h6>39.5%</h6>
                  <p>Conversation</p>
                </li>
              </ul>
            </div>
            <div class="campaign-action">
              <div class="campaign-date">
                <span class="badge badge-pill badge-status bg-info">Paused</span>
                <p>Due Date : 14 Oct 2023</p>
              </div>
              <ul class="project-mem">
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-14.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-15.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-16.jpg" alt="img"
                  /></a>
                </li>
                <li class="more-set"><a href="#">+06</a></li>
              </ul>
            </div>
          </li>
          <li class="campaign-wrap">
            <div class="campaign-info">
              <div class="campaign-name">
                <h5>Repeat Customers</h5>
                <p>Rebranding</p>
              </div>
              <ul class="list-progress">
                <li>
                  <h6>17.5%</h6>
                  <p>Opened</p>
                </li>
                <li>
                  <h6>49.5%</h6>
                  <p>Closed</p>
                </li>
                <li>
                  <h6>35.2%</h6>
                  <p>Unsubscribe</p>
                </li>
                <li>
                  <h6>54.8%</h6>
                  <p>Delivered</p>
                </li>
                <li>
                  <h6>60.5%</h6>
                  <p>Conversation</p>
                </li>
              </ul>
            </div>
            <div class="campaign-action">
              <div class="campaign-date">
                <span class="badge badge-pill badge-status bg-success">Success</span>
                <p>Due Date : 29 Oct 2023</p>
              </div>
              <ul class="project-mem">
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-14.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-15.jpg" alt="img"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="@/assets/img/profiles/avatar-16.jpg" alt="img"
                  /></a>
                </li>
                <li class="more-set"><a href="#">+02</a></li>
              </ul>
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
    return {};
  },
  mounted() {
    if (document.getElementsByClassName("edit-popup").length > 0) {
      var addPopups = document.getElementsByClassName("edit-popup");
      for (var i = 0; i < addPopups.length; i++) {
        addPopups[i].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup1")[0];
          if (togglePopup) {
            togglePopup.classList.add("sidebar-popup");
          }
        });
      }

      var sidebarCloses = document.getElementsByClassName("sidebar-close1");
      for (var j = 0; j < sidebarCloses.length; j++) {
        sidebarCloses[j].addEventListener("click", () => {
          var togglePopup = document.getElementsByClassName("toggle-popup1")[0];
          if (togglePopup) {
            togglePopup.classList.remove("sidebar-popup");
          }
        });
      }
    }
  },
};
</script>
