<template>
  <div class="owl-carousel files-carousel owl-theme">
    <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="item in FilesCarousel" :key="item.id">
        <div class="folders p-3">
          <div class="d-flex align-items-center justify-content-between head">
            <div class="d-flex align-items-center">
              <img
                :src="require(`@/assets/img/icons/${item.Image}`)"
                alt="File"
                class="me-2"
              />
              <h6 class="popup-toggle">
                <a href="javascript:void(0);">{{ item.Title }}</a>
              </h6>
            </div>
            <div class="d-flex align-items-center">
              <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
              <div class="dropdown">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  class="dropset"
                >
                  <i class="fa fa-ellipsis-v"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                  <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                  <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                  <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">Download</a>
                  </li>
                  <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                  </li>
                  <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-start project-plan mt-3">
            <label>{{ item.Day }}</label>
            <ul class="d-flex">
              <li class="d-flex align-items-center">{{ item.MB }}</li>
            </ul>
          </div>
        </div>
      </Slide>
      <template #addons>
        <Navigation />
      </template>
    </Carousel>
  </div>
</template>

<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import FilesCarousel from "@/assets/json/files-carousel.json";
export default {
  data() {
    return {
      FilesCarousel: FilesCarousel,
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
        loop: true,
      },
      breakpoints: {
        575: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 3,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 3,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Navigation,
  },
};
</script>
